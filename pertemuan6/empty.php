<?php
$myArray = array();// Array kosong
if (empty($myArray)){
    echo "Array tidak terdefinisi atau kosong";
} else {
    echo "Array terdefinisi dan tidak kosong";
}
echo "<br><br>";
if (empty($nonExistentVar)){
    echo "Variable tidak terdefinisi atau kosong";
} else {
    echo "Variable terdefinisi dan tidak kosong.";
}
?>