```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      throw new InvalidArgumentException('Array contains non-numeric values.');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = ['1', '2', '3', '4', '5'];
echo calculateSum($numbers); // Output: 15

$numbers = [1, 2, 'three', 4, 5];
 try {
    echo calculateSum($numbers); 
} catch (InvalidArgumentException $e) {
    echo 'Error: ' . $e->getMessage(); // Output: Error: Array contains non-numeric values.
}
```