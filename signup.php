<?php
        
		$servername= "localhost";
		$username= "root";
		$password= "1234";
		$dbname = "user";
		
		$conn= mysqli_connect($servername,$username,$password,$dbname);
	   
	   if(isset($_POST['submit'])){
		   
	   $first = mysqli_real_escape_string($conn,$_POST['first']);
	   $last =  mysqli_real_escape_string($conn,$_POST['last']);
	   $email =  mysqli_real_escape_string($conn,$_POST['email']);
	   $user =  mysqli_real_escape_string($conn,$_POST['username']);
	   $pass = mysqli_real_escape_string($conn,$_POST['pass']);
	   $add = mysqli_real_escape_string($conn,$_POST['address']);
	   $gen = mysqli_real_escape_string($conn,$_POST['gen']);
	  
	   $date = mysqli_real_escape_string($conn,$_POST['date']);
	  
	   
	   //error handlers
	   //check for empty field
	   
	   if(empty($first) || empty($last) || empty($user) || empty($email)|| empty($pass)|| empty($add)|| empty($gen) || empty($date)){
		   
		   header("Location:signup2.php?signup=empty");
		   exit();
	   }
	   else{
		   //check empty characters are valid
		   if(!preg_match("/^[a-zA-Z]*$/",$first)|| !preg_match("/^[a-zA-Z]*$/",$last)){
			   
		    header("Location:signup2.php?signup=invalid");
		    exit();
		   }
		   else{
			   //check if email is valid
                  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("Location:signup2.php?signup=invalid");
		             exit(); 
				  }
                else{
                     $sql = "SELECT *FROM login WHERE Email='$email';";
                     $result= mysqli_query($conn,$sql);
                     $resultcheck = mysqli_num_rows($result);
                     
                     if($resultcheck>0){
                         header("Location:signup2.php?signup=usertaken");
                         exit();
				
				         }
                     else{
                          //hashing the password
						  $hashedpass = password_hash($pass,PASSWORD_DEFAULT);
						  
                           $sql = "INSERT INTO login VALUES ('$first','$last','$email','$user','$pass','$add','$gen','$date');";
						   mysqli_query($conn,$sql);
						   header("Location:signup2.php?signup=success");
                           exit();
					 }
				 }
				}
	   }
	   }
	   else{
		      header("Location:signup2.php?signup");
                         exit();
	   }
	   ?>
	   