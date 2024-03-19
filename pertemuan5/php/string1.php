<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi exercitationem sed esse et culpa magnam quaerat, 
                odio repudiandae distinctio est quae velit error doloribus, vel architecto eum soluta, 
                veritatis officiis?";
echo "<p>{$loremIpsum}</p";
echo "<br><br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br><br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";