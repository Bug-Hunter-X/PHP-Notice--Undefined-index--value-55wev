```php
function processData(array $data): array {
  $result = [];
  foreach ($data as $item) {
    if (array_key_exists('value', $item)) {
      $result[] = $item['value'];
    } else {
      //Handle missing 'value' key - Add a default value or log the error for better debugging 
      error_log('Missing value key in data');
      $result[] = null; // or a default value
    }
  }
  return $result;
}

$data = [
  ['value' => 1],
  ['value' => 2],
  ['value' => 3],
  ['anotherKey' => 4] //Missing 'value' key
];

$processedData = processData($data);
print_r($processedData);
```