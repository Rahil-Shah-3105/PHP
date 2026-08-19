<?php

declare(strict_types=1);

/**
 * Encode text to Morse Code.
 *
 * @param  string  $text  text to encode
 * @return string encoded text
 * @throws \Exception
 */
function encode(string $text): string
{
	error_log(sprintf('>>> Entering encode($text=%s)', is_scalar($text) ? $text : gettype($text)));
    $text = strtoupper($text); // Makes sure the string is uppercase
    $MORSE_CODE = [
        // Array containing morse code translations
        "A" => ".-",
        "B" => "-...",
        "C" => "-.-.",
        "D" => "-..",
        "E" => ".",
        "F" => "..-.",
        "G" => "--.",
        "H" => "....",
        "I" => "..",
        "J" => ".---",
        "K" => "-.-",
        "L" => ".-..",
        "M" => "--",
        "N" => "-.",
        "O" => "---",
        "P" => ".--.",
        "Q" => "--.-",
        "R" => ".-.",
        "S" => "...",
        "T" => "-",
        "U" => "..-",
        "V" => "...-",
        "W" => ".--",
        "X" => "-..-",
        "Y" => "-.--",
        "Z" => "--..",
        "1" => ".----",
        "2" => "..---",
        "3" => "...--",
        "4" => "....-",
        "5" => ".....",
        "6" => "-....",
        "7" => "--...",
        "8" => "---..",
        "9" => "----.",
        "0" => "-----",
        " " => "/",
    ];

    $encodedText = ""; // Stores the encoded text
    foreach (str_split($text) as $c) { // Going through each character
        if (array_key_exists($c, $MORSE_CODE)) { // Checks if it is a valid character
            $encodedText .= $MORSE_CODE[$c] . " "; // Appends the correct character
        } else {
			error_log(sprintf('Throwing new from encode($text=%s)', is_scalar($text) ? $text : gettype($text)));
            throw new \Exception('Invalid character: ' . $c);
        }
    }

    substr_replace($encodedText, "", -1); // Removes trailing space
	error_log(sprintf('<<< Exiting encode($text=%s)', is_scalar($text) ? $text : gettype($text)));
    return $encodedText;
}

/**
 * Decode Morse Code to text.
 * @param  string  $text  text to decode
 * @throws \Exception
 */
function decode(string $text): string
{
	error_log(sprintf('>>> Entering decode($text=%s)', is_scalar($text) ? $text : gettype($text)));
    $MORSE_CODE = [
        // An array containing morse code to text translations
        ".-" => "A",
        "-..." => "B",
        "-.-." => "C",
        "-.." => "D",
        "." => "E",
        "..-." => "F",
        "--." => "G",
        "...." => "H",
        ".." => "I",
        ".---" => "J",
        "-.-" => "K",
        ".-.." => "L",
        "--" => "M",
        "-." => "N",
        "---" => "O",
        ".--." => "P",
        "--.-" => "Q",
        ".-." => "R",
        "..." => "S",
        "-" => "T",
        "..-" => "U",
        "...-" => "V",
        ".--" => "W",
        "-..-" => "X",
        "-.--" => "Y",
        "--.." => "Z",
        ".----" => "1",
        "..---" => "2",
        "...--" => "3",
        "....-" => "4",
        "....." => "5",
        "-...." => "6",
        "--..." => "7",
        "---.." => "8",
        "----." => "9",
        "-----" => "0",
        "/" => " ",
    ];

    $decodedText = ""; // Stores the decoded text
    foreach (explode(" ", $text) as $c) { // Going through each group
        if (array_key_exists($c, $MORSE_CODE)) {
            // Checks if it is a valid character
            $decodedText .= $MORSE_CODE[$c];
            // Appends the correct character
        } elseif ($c !== '' && $c !== '0') {
            // Makes sure that the string is not empty to prevent trailing spaces or extra spaces from breaking this
			error_log(sprintf('Throwing new from decode($text=%s)', is_scalar($text) ? $text : gettype($text)));
            throw new \Exception('Invalid character: ' . $c);
        }
    }

	error_log(sprintf('<<< Exiting decode($text=%s)', is_scalar($text) ? $text : gettype($text)));
    return $decodedText;
}
