<?php

$name = "Nimti is simply amazing";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "ti");
echo "<br>";
echo str_replace("Nimti", "Nimtuu", $name);
echo "<br>";
echo str_repeat($name, 10);
echo "<br>";
echo rtrim("<pre>     this is a good boy    </pre>");
echo "<br>";
echo "<pre>";
echo ltrim("     hi this is hope    ");
echo rtrim("     i am hopeful     ");
echo "</pre>"
?>