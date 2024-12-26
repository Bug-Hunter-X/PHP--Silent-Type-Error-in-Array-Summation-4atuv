# PHP Silent Type Error in Array Summation

This repository demonstrates a common, yet subtle, error in PHP: the silent handling of non-numeric values when performing array summation.  The `calculateSum` function, while seemingly simple, lacks proper error handling or type checking. This can lead to incorrect results without any warning.

The `bug.php` file contains the flawed function, while `bugSolution.php` provides a corrected version that addresses the issue.

## Bug
The `calculateSum` function sums the values of an array.  However, if the array contains non-numeric values, the function treats them as 0, leading to potentially incorrect results without any error message.  This can be difficult to debug, especially in larger applications.

## Solution
The corrected version includes a type check (`is_numeric`) within the loop, and throws an exception if a non-numeric value is encountered.  This makes the error explicit and allows for appropriate error handling in the calling code.