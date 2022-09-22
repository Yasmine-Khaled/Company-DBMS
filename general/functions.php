<?php
function testMessage($condation,$message)
{
    $returnMessage ="";
    if($condation){
        $returnMessage = "$message successfully";
    }
    else{
        $returnMessage = "$message Failed";

    }
    return $returnMessage;
}
function path($go){
    echo"<script> window.location,replace('/company/$go') </script>";
}