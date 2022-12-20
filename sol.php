<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

   
 <form action="sol.php" method="post">
  First-Name: <input type="text" name="name"><br>
  Last-Name: <input type="text" name="lname"><br>
  AGE: <input type="number" name="age"><br>
  E-mail: <input type="email" name="email"><br>
  Job: <input type="text" name="job"><br>
  
 <input type="submit">
 </form>
        
 <?php 
    
    echo "Your First Name Is : " + $_POST["name"]; <br>
    echo "Your Last Name Is : " + $_POST["lname"]; <br>
    echo "Your Age Is : " + $_POST["age"]; <br>
    echo "Your Email Is : " + $_POST["email"]; <br>
    echo "Your Job Is : " + $_POST["job"]; <br>

 
 ?><br>

<form action="sol.php" method="post" enctype="multipart/form-data">
  Select File to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>


</body>
</html>
