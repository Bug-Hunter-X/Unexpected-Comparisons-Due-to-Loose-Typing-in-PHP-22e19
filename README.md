# Unexpected Comparisons Due to Loose Typing in PHP

This repository demonstrates a common error in PHP related to loose typing and unexpected comparisons between numbers and strings. The `bug.php` file contains a function that compares two values. While it's intended to compare numbers, it might receive a string as input, leading to an unexpected result.

The `bugSolution.php` file provides a solution that addresses this issue by explicitly type-checking the inputs.