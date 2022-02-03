<?php
include 'db.php';

if(isset($_POST['send']))  {

     $name = $_POST["name"];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     $sql = "INSERT INTO `contact`(`username`, `email`, `subject`, `message`) VALUES ('[$name]','[$email]','[$subject]','[$message]')";
     
   $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
   echo'<script type="text/javascript">alert("Your Feedback is Submitted");
     window.location="http://localhost/Restaurantly/#contact"
        </script>';
     
  }
?>