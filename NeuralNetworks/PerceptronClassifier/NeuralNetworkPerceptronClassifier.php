<?php

declare(strict_types=1);

namespace NeuralNetworks\PerceptronClassifier;

/**
 * This class implements a simple neural network with one hidden layer and one output neuron.
 * The network uses the sigmoid activation function and performs binary classification.
 * (https://cw.fel.cvut.cz/b211/courses/be5b33rpz/labs/07_perceptron/start)
 *
 * @author Michał Żarnecki https://github.com/rzarno
 */
class NeuralNetworkPerceptronClassifier
{
    public function trainModel(array $X, array $Y, int $iterations, float $learningRate): array
    {
		error_log(sprintf('>>> Entering trainModel($X=%s,$Y=%s,$iterations=%s,$learningRate=%s)', is_scalar($X) ? $X : gettype($X), is_scalar($Y) ? $Y : gettype($Y), is_scalar($iterations) ? $iterations : gettype($iterations), is_scalar($learningRate) ? $learningRate : gettype($learningRate)));
        [$W, $b] = $this->initParams(count($X));

        for ($i = 0; $i < $iterations; $i++) {
            // Forward propagation
            $A = $this->forwardPropagation($X, $W, $b);

            // Compute cost
            $cost = $this->computeCost($A, $Y);

            // Backward propagation
            [$dW, $db] = $this->backwardPropagation($A, $X, $Y);

            // Update parameters
            [$W, $b] = $this->updateParams($W, $b, $dW, $db, $learningRate);

            if ($i % 100 == 0) {
                echo sprintf('Iteration %d - Cost: %s%s', $i, $cost, PHP_EOL);
            }
        }

		error_log(sprintf('<<< Exiting trainModel($X=%s,$Y=%s,$iterations=%s,$learningRate=%s)', is_scalar($X) ? $X : gettype($X), is_scalar($Y) ? $Y : gettype($Y), is_scalar($iterations) ? $iterations : gettype($iterations), is_scalar($learningRate) ? $learningRate : gettype($learningRate)));
        return [$W, $b];
    }

    public function predict(array $X, array $W, float $b): array
    {
		error_log(sprintf('>>> Entering predict($X=%s,$W=%s,$b=%s)', is_scalar($X) ? $X : gettype($X), is_scalar($W) ? $W : gettype($W), is_scalar($b) ? $b : gettype($b)));
        $A = $this->forwardPropagation($X, $W, $b);
		error_log(sprintf('<<< Exiting predict($X=%s,$W=%s,$b=%s)', is_scalar($X) ? $X : gettype($X), is_scalar($W) ? $W : gettype($W), is_scalar($b) ? $b : gettype($b)));
        return array_map(fn ($a): int => $a > 0.5 ? 1 : 0, $A);
    }

    /**
     * Stage 1. Prepare dataset
     * @return array[]
     */
    public function generateTrainingSet(): array
    {
		error_log(sprintf('>>> Entering generateTrainingSet()'));
        $m = 50;

        // Generate a 2 x m matrix with binary values (0 or 1)
        $X = [];
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $X[$i][$j] = random_int(0, 1);
            }
        }

        // Compute Y: Logical AND condition (X[0] == 1 and X[1] == 0)
        $Y = [];
        for ($j = 0; $j < $m; $j++) {
            $Y[$j] = ($X[0][$j] == 1 && $X[1][$j] == 0) ? 1 : 0;
        }

		error_log(sprintf('<<< Exiting generateTrainingSet()'));
        return [$X, $Y];
    }

    /**
     * Stage 2. Initialize model parameters
     * @param int $n Number of features
     * @return array [$W, $b] Weight and bias arrays
     */
    private function initParams(int $n): array
    {
		error_log(sprintf('>>> Entering initParams($n=%s)', is_scalar($n) ? $n : gettype($n)));
        $W = [];
        for ($i = 0; $i < $n; $i++) {
            $W[$i] = mt_rand() / mt_getrandmax(); // Small random values
        }

        $b = 0.0; // Bias initialized to zero
		error_log(sprintf('<<< Exiting initParams($n=%s)', is_scalar($n) ? $n : gettype($n)));
        return [$W, $b];
    }

    /**
     * Sigmoid Activation Function
     */
    private function sigmoid(float $z): float
    {
		error_log(sprintf('>>> Entering sigmoid($z=%s)', is_scalar($z) ? $z : gettype($z)));
		error_log(sprintf('<<< Exiting sigmoid($z=%s)', is_scalar($z) ? $z : gettype($z)));
        return 1 / (1 + exp(-$z));
    }

    /**
     * Stage 3. Forward Propagation
     */
    private function forwardPropagation(array $X, array $W, float $b): array
    {
		error_log(sprintf('>>> Entering forwardPropagation($X=%s,$W=%s,$b=%s)', is_scalar($X) ? $X : gettype($X), is_scalar($W) ? $W : gettype($W), is_scalar($b) ? $b : gettype($b)));
        $Z = [];
        $counter = count($X[0]);
        for ($j = 0; $j < $counter; $j++) {
            $sum = $b;
            for ($i = 0; $i < count($W); $i++) {
                $sum += $W[$i] * $X[$i][$j];
            }

            $Z[$j] = $this->sigmoid($sum);
        }

		error_log(sprintf('<<< Exiting forwardPropagation($X=%s,$W=%s,$b=%s)', is_scalar($X) ? $X : gettype($X), is_scalar($W) ? $W : gettype($W), is_scalar($b) ? $b : gettype($b)));
        return $Z;
    }

    /**
     * Stage 4. Compute Cost Function (Binary Cross-Entropy Loss)
     */
    private function computeCost(array $A, array $Y): float
    {
		error_log(sprintf('>>> Entering computeCost($A=%s,$Y=%s)', is_scalar($A) ? $A : gettype($A), is_scalar($Y) ? $Y : gettype($Y)));
        $m = count($Y);
        $cost = 0.0;
        for ($i = 0; $i < $m; $i++) {
            $cost += -($Y[$i] * log($A[$i]) + (1 - $Y[$i]) * log(1 - $A[$i]));
        }

		error_log(sprintf('<<< Exiting computeCost($A=%s,$Y=%s)', is_scalar($A) ? $A : gettype($A), is_scalar($Y) ? $Y : gettype($Y)));
        return $cost / $m;
    }

    /**
     * Stage 5. Backward Propagation
     */
    private function backwardPropagation(array $A, array $X, array $Y): array
    {
		error_log(sprintf('>>> Entering backwardPropagation($A=%s,$X=%s,$Y=%s)', is_scalar($A) ? $A : gettype($A), is_scalar($X) ? $X : gettype($X), is_scalar($Y) ? $Y : gettype($Y)));
        $m = count($Y);
        $dW = array_fill(0, count($X), 0.0);
        $db = 0.0;

        for ($j = 0; $j < $m; $j++) {
            $dZ = $A[$j] - $Y[$j];
            $counter = count($X);
            for ($i = 0; $i < $counter; $i++) {
                $dW[$i] += $dZ * $X[$i][$j];
            }

            $db += $dZ;
        }

        // Average gradients
        $counter = count($dW);

        // Average gradients
        for ($i = 0; $i < $counter; $i++) {
            $dW[$i] /= $m;
        }

        $db /= $m;

		error_log(sprintf('<<< Exiting backwardPropagation($A=%s,$X=%s,$Y=%s)', is_scalar($A) ? $A : gettype($A), is_scalar($X) ? $X : gettype($X), is_scalar($Y) ? $Y : gettype($Y)));
        return [$dW, $db];
    }

    /**
     * STage 6. Update Parameters
     */
    private function updateParams(array $W, float $b, array $dW, float $db, float $learningRate): array
    {
		error_log(sprintf('>>> Entering updateParams($W=%s,$b=%s,$dW=%s,$db=%s,$learningRate=%s)', is_scalar($W) ? $W : gettype($W), is_scalar($b) ? $b : gettype($b), is_scalar($dW) ? $dW : gettype($dW), is_scalar($db) ? $db : gettype($db), is_scalar($learningRate) ? $learningRate : gettype($learningRate)));
        $counter = count($W);
        for ($i = 0; $i < $counter; $i++) {
            $W[$i] -= $learningRate * $dW[$i];
        }

        $b -= $learningRate * $db;

		error_log(sprintf('<<< Exiting updateParams($W=%s,$b=%s,$dW=%s,$db=%s,$learningRate=%s)', is_scalar($W) ? $W : gettype($W), is_scalar($b) ? $b : gettype($b), is_scalar($dW) ? $dW : gettype($dW), is_scalar($db) ? $db : gettype($db), is_scalar($learningRate) ? $learningRate : gettype($learningRate)));
        return [$W, $b];
    }
}
