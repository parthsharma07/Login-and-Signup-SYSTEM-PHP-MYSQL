<?php
// Array with names
$a[] = "Maharashtra-Goa~Goa Express~190123~Mumbai~Panji~Mon,Thurs~23:00~11:00";
$a[] = "Madhya Pradesh-Goa~South Express~190823~Indore~Panji~Mon,Thurs~23:00~11:00";
$a[] = "Madhya Pradesh-Goa~Central Express~190123~Bhopal~Panji~Tues,Fri~22:00~9:00";
$a[] = "Punjab-Haryana~North Express~170123~Jalandhar~Kurukshetra~Tues,Thurs,Sat~23:00~11:00";
$a[] = "Madhya Pradesh-Goa~Malwa Express~190129~Gwalior~Panji~Tues,Fri~22:00~9:00";
$a[] = "Maharashtra-Goa~Goa Express~110123~Nagpur~Panji~Mon,Thurs~23:00~11:00";
$a[] = "Bihar-Madhya Pradesh~BMP Express~160103~Patna~Indore~Mon,Fri~23:55~23:00";
$a[] = "Bihar-Madhya Pradesh~Kranti Express~150103~Patna~Indore~Mon,Sat~23:55~23:00";
$a[] = "Maharashtra-Goa~Atal Express~190100~Mumbai~Panji~Mon,Fri~20:00~1:00";
$a[] = "Punjab-Madhya Pradesh~Nirantar Express~190999~Chandigarh~Indore~Mon,Thurs~13:00~11:00";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "% $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>