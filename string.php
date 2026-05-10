<?php
//string
$str = ' Hello, PHP World! ';
echo strlen($str); // 21 (with spaces)
echo strlen(trim($str)); // 17 (trimmed)
echo strtoupper($str); // ' HELLO, PHP WORLD! '
echo strtolower($str); // ' hello, php world! '
echo str_replace('PHP', 'Amazing', $str); // Hello, Amazing World!
// Substring
$clean = trim($str);
echo substr($clean, 7, 3); // PHP
echo strpos($clean, 'World'); // 11
// Split and join
$csv = 'Alice,Bob,Carol,David';
$names = explode(',', $csv);
echo count($names); // 4
echo implode(' | ', $names); // Alice | Bob | Carol | David
// String padding
echo str_pad('42', 6, '0', STR_PAD_LEFT); // 000042
// Check if string contains (PHP 8+)
echo str_contains($clean, 'PHP') ? 'Yes' : 'No'; // Yes
echo str_starts_with($clean, 'Hello') ? 'Yes' : 'No'; // Yes
echo str_ends_with($clean, 'World!') ? 'Yes' : 'No'; echo str_contains($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean, ends_with($clean))))))))))) .'') .'':'') .'';
?>