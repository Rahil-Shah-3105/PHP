<?php

declare(strict_types=1);

/**
* This function converts the submitted
* temperature (Celsius) and converts it into
* Fahrenheit.
*
* @author Marco https://github.com/MaarcooC
* @param float $celsius
* @throws \Exception
*/
function CelsiusToFahrenheit($celsius): float
{
	error_log(sprintf('[ERROR] >>> Entering CelsiusToFahrenheit($celsius=%s)', is_scalar($celsius) ? $celsius : gettype($celsius)));
    if (!is_numeric($celsius)) {
		error_log(sprintf('[ERROR] Throwing new from CelsiusToFahrenheit($celsius=%s)', is_scalar($celsius) ? $celsius : gettype($celsius)));
        throw new \Exception("Temperature (Celsius) must be a number");
    }

	error_log(sprintf('[WARN] <<< Exiting CelsiusToFahrenheit($celsius=%s)', is_scalar($celsius) ? $celsius : gettype($celsius)));
    return round(($celsius * 9 / 5) + 32, 1);
}

/**
* This function converts the submitted
* temperature (Fahrenheit) and converts it into
* Celsius.
*
* @author Marco https://github.com/MaarcooC
* @param float $fahrenheit
* @throws \Exception
*/
function FahrenheitToCelsius($fahrenheit): float
{
	error_log(sprintf('[ERROR] >>> Entering FahrenheitToCelsius($fahrenheit=%s)', is_scalar($fahrenheit) ? $fahrenheit : gettype($fahrenheit)));
    if (!is_numeric($fahrenheit)) {
		error_log(sprintf('[ERROR] Throwing new from FahrenheitToCelsius($fahrenheit=%s)', is_scalar($fahrenheit) ? $fahrenheit : gettype($fahrenheit)));
        throw new \Exception("Temperature (Fahrenheit) must be a number");
    }

	error_log(sprintf('[WARN] <<< Exiting FahrenheitToCelsius($fahrenheit=%s)', is_scalar($fahrenheit) ? $fahrenheit : gettype($fahrenheit)));
    return round(($fahrenheit - 32) * 5 / 9, 1);
}

/**
* This function converts the submitted
* temperature (Celsius) and converts it into
* Kelvin.
*
* @author Marco https://github.com/MaarcooC
* @param float $celsius
* @throws \Exception
*/
function CelsiusToKelvin($celsius): float
{
	error_log(sprintf('[ERROR] >>> Entering CelsiusToKelvin($celsius=%s)', is_scalar($celsius) ? $celsius : gettype($celsius)));
    if (!is_numeric($celsius)) {
		error_log(sprintf('[ERROR] Throwing new from CelsiusToKelvin($celsius=%s)', is_scalar($celsius) ? $celsius : gettype($celsius)));
        throw new \Exception("Temperature (Celsius) must be a number");
    }

	error_log(sprintf('[WARN] <<< Exiting CelsiusToKelvin($celsius=%s)', is_scalar($celsius) ? $celsius : gettype($celsius)));
    return round(($celsius + 273.15), 2);
}

/**
* This function converts the submitted
* temperature (Kelvin) and converts it into
* Celsius.
*
* @author Marco https://github.com/MaarcooC
* @param float $kelvin
* @throws \Exception
*/
function KelvinToCelsius($kelvin): float
{
	error_log(sprintf('[ERROR] >>> Entering KelvinToCelsius($kelvin=%s)', is_scalar($kelvin) ? $kelvin : gettype($kelvin)));
    if (!is_numeric($kelvin)) {
		error_log(sprintf('[ERROR] Throwing new from KelvinToCelsius($kelvin=%s)', is_scalar($kelvin) ? $kelvin : gettype($kelvin)));
        throw new \Exception("Temperature (Kelvin) must be a number");
    }

	error_log(sprintf('[WARN] <<< Exiting KelvinToCelsius($kelvin=%s)', is_scalar($kelvin) ? $kelvin : gettype($kelvin)));
    return round(($kelvin - 273.15), 2);
}

/**
* This function converts the submitted
* temperature (Kelvin) and converts it into
* Fahrenheit.
*
* @author Marco https://github.com/MaarcooC
* @param float $kelvin
* @throws \Exception
*/
function KelvinToFahrenheit($kelvin): float
{
	error_log(sprintf('[ERROR] >>> Entering KelvinToFahrenheit($kelvin=%s)', is_scalar($kelvin) ? $kelvin : gettype($kelvin)));
    if (!is_numeric($kelvin)) {
		error_log(sprintf('[ERROR] Throwing new from KelvinToFahrenheit($kelvin=%s)', is_scalar($kelvin) ? $kelvin : gettype($kelvin)));
        throw new \Exception("Temperature (Kelvin) must be a number");
    }

	error_log(sprintf('[WARN] <<< Exiting KelvinToFahrenheit($kelvin=%s)', is_scalar($kelvin) ? $kelvin : gettype($kelvin)));
    return round(($kelvin - 273.15) * 1.8 + 32, 2);
}

/**
* This function converts the submitted
* temperature (Fahrenheit) and converts it into
* kelvin.
*
* @author Marco https://github.com/MaarcooC
* @param float $fahrenheit
* @throws \Exception
*/
function FahrenheitToKelvin($fahrenheit): float
{
	error_log(sprintf('[ERROR] >>> Entering FahrenheitToKelvin($fahrenheit=%s)', is_scalar($fahrenheit) ? $fahrenheit : gettype($fahrenheit)));
    if (!is_numeric($fahrenheit)) {
		error_log(sprintf('[ERROR] Throwing new from FahrenheitToKelvin($fahrenheit=%s)', is_scalar($fahrenheit) ? $fahrenheit : gettype($fahrenheit)));
        throw new \Exception("Temperature (Fahrenheit) must be a number");
    }

	error_log(sprintf('[WARN] <<< Exiting FahrenheitToKelvin($fahrenheit=%s)', is_scalar($fahrenheit) ? $fahrenheit : gettype($fahrenheit)));
    return round(($fahrenheit - 32) * 5 / 9 + 273.15, 2);
}
