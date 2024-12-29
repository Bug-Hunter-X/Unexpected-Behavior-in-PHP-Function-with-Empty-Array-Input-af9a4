```php
function myFunc(array $arr): int {
  foreach ($arr as $value) {
    if ($value === 0) {
      return 0; // Early exit if 0 is found
    }
  }
  return 1; // Return 1 if no 0 is found
}

$arr = [1,2,3,4,5];
$result = myFunc($arr);
echo $result; //Outputs 1 (Correct)

$arr2 = [1,2,0,4,5];
$result2 = myFunc($arr2);
echo $result2; //Outputs 0 (Correct)

$arr3 = [];
$result3 = myFunc($arr3); //Throws a warning: Undefined variable $value
echo $result3; //Outputs 1 (Incorrect)
```