<?php
// Array with names
$a[] = "Goa Express~190123~Mumbai~Panji~24~12~45~67~34~98~45~10~77~44~99~100";
$a[] = "South Express~190823~Indore~Panji~24~17~25~89~34~98~32~10~77~48~99~125";
$a[] = "Central Express~190123~Bhopal~Panji~8~12~45~67~56~98~45~10~77~88~100~10";
$a[] = "North Express~170123~Jalandhar~Kurukshetra~67~2~45~67~65~89~45~20~77~14~99~10";
$a[] = "Malwa Express~190129~Gwalior~Panji~7~12~45~23~34~48~45~33~77~44~100~180";
$a[] = "Goatawi Express~110123~Nagpur~Panji~14~28~42~56~70~84~45~10~77~44~98~100";
$a[] = "BMP Express~160103~Patna~Indore~64~129~45~66~34~98~40~10~77~49~99~200";
$a[] = "Kranti Express~150103~Patna~Indore~124~19~85~67~24~98~95~80~77~44~99~100";
$a[] = "Atal Express~190100~Mumbai~Panji~82~10~45~87~134~98~45~110~77~144~99~100";
$a[] = "Nirantar Express~190999~Chandigarh~Indore~56~122~65~12~34~100~45~10~177~64~99~100";

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