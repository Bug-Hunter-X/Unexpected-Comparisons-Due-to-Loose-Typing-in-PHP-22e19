function my_function($a, $b) {
  // Ensure both inputs are numbers using type checking
  if (is_numeric($a) && is_numeric($b)) {
    if ($a > $b) {
      return $a;
    } else {
      return $b; 
    }
  } else {
    // Handle non-numeric inputs appropriately
    return 'Invalid input: Both parameters must be numbers';
  }
}

$result = my_function(1, '2');  // Will output 'Invalid input...' 
$result2 = my_function(1, 2); //Will output 2