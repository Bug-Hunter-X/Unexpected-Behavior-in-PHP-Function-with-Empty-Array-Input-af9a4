# PHP Function Bug: Unexpected Behavior with Empty Arrays

This repository demonstrates a common but subtle error in PHP functions when handling empty arrays within `foreach` loops. The function `myFunc` is designed to search for the presence of 0 in an array, however when the input array is empty it throws a warning and returns an incorrect result.

## Bug Description
The bug arises when passing an empty array to `myFunc`.  The `foreach` loop doesn't iterate and the `$value` variable is undefined, leading to an unexpected behavior.

## How to Reproduce
1. Clone the repository
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output when the empty array is passed.

## Solution
The solution involves checking the array's emptiness before the `foreach` loop to avoid the undefined variable error.