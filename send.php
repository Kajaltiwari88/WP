<?php  


if (isset($_POST['name']) && isset($_POST['message'])) {
	include 'config/confidential.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($name)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO tbl_feedback(name, message) VALUES('$name', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
		     echo "<script>alert('Feedback was sent successfully');
             window.location.href='http://localhost/wp%20project'; </script>";
         
		}

		
        else {
            echo "<script>alert('Failed to send feedback')
            window.location.href='http://localhost/wp%20project/index.html';</script>"; 
           
		}
	}

}else {
    header('location:http://localhost/wp%20project/index.html');
}