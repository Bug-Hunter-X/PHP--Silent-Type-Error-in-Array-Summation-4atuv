```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = ['1', '2', '3', '4', '5'];
echo calculateSum($numbers); // Output: 15

$numbers = [1, 2, 'three', 4, 5];
echo calculateSum($numbers); // Output: 12, this might be unexpected behavior
// because the function does not handle non-numeric values properly. It will just treat
// 'three' as 0. More robust error handling is needed.
```