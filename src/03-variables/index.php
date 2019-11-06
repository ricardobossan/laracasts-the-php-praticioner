<?php

// Concatenate variables

$name= 'Jeffrey Way';

echo 'Hello, $name'; // wrong. Don't use single quotes in this case.
echo "Hello, $name"; // double quotes.
echo "Hello, {$name}"; // surround variable with curly braces.
echo 'Hello, ' . $name; // concatenation with '.', insteado of a '+'.