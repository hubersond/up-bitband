<?php

/**
 * Parse and validate console input arguments and returns an array of integers
 *
 * @param array $argValue   Console input argument values
 *
 * @return array
 * 
 * @throws \Exception  If not enough argument provided or given inputs contain non-integer value(s)
 */
function parseInputArgs(array $argValue): array
{
    $inputs = array_splice($argValue, 1);

    if (count($inputs) < 2) {/* check that minimum number of argument is given */
        throw new \Exception(
            sprintf("Expected at least 2 arguments, '%s' given.\n", count($inputs))
        );
    }

    foreach ($inputs as $input) {/* check that inputs are all integers */
        if (!is_numeric($input) || (int)$input != $input) {
            throw new \Exception("Expected inputs of type integer separated by white-space\n");
        }
    }

    return $inputs;
}

/**
 * Given an array of inputs, prints min and max integer values, and the odd numbers count in the array
 *
 * @param array $args   Console input argument values
 *
 * @return void
 */
function main(array $args): int
{
    try {
        $intArray = parseInputArgs($args);
        
    } catch (\Throwable $th) {
        printf("Error: %s", $th->getMessage());

        return 1;
    }

    $max = max($intArray);
    $min = min($intArray);
    $oddNumbers = array_filter($intArray, fn($number) => $number % 2 !== 0);

    printf("Maximum: %s \nMinimum: %s \nOdd numbers count: %s\n", $max, $min, count($oddNumbers));

    return 0;
}


main($argv);
