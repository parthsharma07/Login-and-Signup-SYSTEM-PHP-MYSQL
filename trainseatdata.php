<?php
$link = mysqli_connect("localhost", "root", "", "trains");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// get the q parameter from URL
$q = $_REQUEST["q"];
$sql = "SELECT * FROM seatmatrix WHERE TrainName='$q'";
$hint = "";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        	if ($hint === "") {
                 $hint = $row['TrainName'].'~'.$row['TrainNumber'].'~'.$row['Source'].'~'.$row['Destination'].'~'.$row['Available'].'~'.$row['Waiting'].'~'.$row['RAC'];
             } else {
                 $hint .= '~'.$row['Available'].'~'.$row['Waiting'].'~'.$row['RAC'];
             }
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

echo $hint === "" ? "no suggestion" : $hint;
?>