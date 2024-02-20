# Bitband/Upwork
A simple PHP script that takes an array of integers, displays the smallest and largest number.
As well as the count of odd numbers.

> Note: Requires `PHP >= 8`

## Usage
From a terminal execute the script with `php` passing at least two integers separated by
white space.

`php arr_int_max_min_odds.php 12 234 54 76 876 54 22 -5 -2`

Output:
> Maximum: 876
>
> Minimum: -5
>
> Odd numbers count: 1

Passing less than two arguments or inputs of type other than integer(`int`) returns an error.
