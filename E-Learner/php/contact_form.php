<?php

        

$conn = mysqli_connect("localhost:3307", "root", "", "Shubham");



    

    if($conn === false){

        die("ERROR: The connection could not be PROCESSED! " 

            . mysqli_connect_error());

    }



    $firstname =  $_REQUEST['firstname'];

    $lastname = $_REQUEST['lastname'];

    $mobno = $_REQUEST['mobno'];

    $country = $_REQUEST['country'];

    $subjects = $_REQUEST['subjects'];




    $sql = "INSERT into contact values ('$firstname', '$lastname', '$mobno', '$country', '$subjects')";

      if(mysqli_query($conn, $sql)){

          echo "CONGRATS!! DETAILS SAVED.";

      }

      else{

          echo "AHH!! SOME ERROR OCCURED.";

      }

      mysqli_close($conn);

?>
