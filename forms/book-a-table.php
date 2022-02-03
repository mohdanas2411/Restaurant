<?php
include 'db.php';

if(isset($_POST['book']))  {

     $name = $_POST["name"];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $date = $_POST['date'];
     $people = $_POST['people'];
     $message = $_POST['message'];

     $sql = "INSERT INTO `booktable` (`clientName`, `email`, `phone`, `date`, `people`, `message`) VALUES ('[$name]','[$email]','[$phone]','[$date]','[$people]','[$message]')";
     
   $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
   echo'<script type="text/javascript">alert("Your Feedback is Submitted");
     window.location="http://localhost/Restaurantly/#book-a-table"
        </script>';
     
  }
?>