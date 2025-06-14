
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> 
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Hand+Pre:wght@400..700&family=Miniver&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<title>Reg Page</title>
</head>
<body class="hello">
<?

php echo "welcome" ;
 ?>
<br>

<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "pass@123";
  $dbname = "isql";
  $conn = new mysqli($servername, $username, $password, $dbname);
 
 
   
    $user_name=$_POST["user_name"];
 $email=$_POST["email"];
    $phone_number=$_POST["phone_number"];
   
   
    $sql = "INSERT INTO feedback VALUES ('$user_name', ' $email','$phone_number' )";

    $result = $conn->query($sql);
	echo "hello , ".$user_name."<br>";
    if ($result == TRUE)
    {
      echo "Thanks for submitting your record";


	
      //header('Location: displayrecords.php');
    }
    else
    {
      echo "Error:". $sql . "<br>". $conn->error;
    }

    $conn->close();
  
?>

</form>
</body>
</html>