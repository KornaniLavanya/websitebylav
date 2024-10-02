<?php
   if(isset($_POST['submit']))
   {
    $email=$_POST['email'];
    $full_name=$_POST['full_name'];
      $father_name=$_POST['father_name'];
        
         $mobile_number=$_POST['mobile_name'];
          $Date_of_Birth=$_POST['Date_of_Birth'];
           $gender=$_POST['gender'];
            
             $course=$_POST['course'];
             $address=$_POST['address'];
   $servername = "localhost";
   $username = "id22348157_aditya";
   $password = "Lavanya@26";
   $dbname = "id22348157_website";
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   $sql = "INSERT INTO `admissions`(`email`, `full_name`, `father_name`, `mobile number`, `dob`, `gender`, `course`, `address`) VALUES ('$email','$fname','$fathername','$mobilelnumber','$dob','$gender','$course','$address')";
   if ($conn->query($sql) == TRUE) {
    echo "<p style='color:red;text-decoration:italic;font-family:times new roman;text-align:center;margin-bottom:25px;font-size:2.5vh'>"."Successfully Uploaded to Database"."</p>";
   

}  

}

?>