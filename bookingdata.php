<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// get the q parameter from URL
$q = $_SESSION['uname'];
$sql = "SELECT * FROM bookings WHERE username='$q'";
$hint = "";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        	if ($hint === "") {
                 $hint = $row['trainname'].'~'.$row['trainnumber'].'~'.$row['source'].'~'.$row['destination'].'~'.$row['time'];
             } else {
                 $hint .= '%'.$row['trainname'].'~'.$row['trainnumber'].'~'.$row['source'].'~'.$row['destination'].'~'.$row['time'];
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