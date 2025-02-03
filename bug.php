function my_function($a, $b) {
  if ($a > $b) {
    return $a;
  } else {
    return $b; 
  }
}

// This will cause a warning
$result = my_function(1, '2');

// This will not
$result2 = my_function(1, 2);