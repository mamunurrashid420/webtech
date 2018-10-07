<!DOCTYPE HTMl>
<html>
    <head>
        <title>self form </title>
        <style>
            .error{
                color: darkred;
            }
        </style>
    </head>
    <body>
        <?php
        $usernameErr = $nameErr = $emailErr = $phoneErr = $passwordErr = $repasswordErr  = "";
          $user = $username = $name = $email = $phone = $password = $repassword ="";
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($user=test_input($_POST["user"])){
                
            }
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            }
            else{
                $name = test_input($_POST["name"]);
            }
        
			if(empty($_POST["email"])){
				$emailErr = "Email is required";
			}
			else{
				$email = test_input($_POST["email"]);}
           if($phone=test_input($_POST["phone"])){
               
           }
			 
			if($password != $repassword){
				die("password didn\'t match ");
				
			}
			
			
             
			
		}/*
		if(isset($_POST["form"])){
			$password = $_POST["password"];
			$repassword = $_POST["repassword"];
			if(empty($password)){
				$error_msg["password"] = "password is required";
			}
			if(empty($repassword)){
				$error_msg["repassword"] = "confirm password is required" ;
			}
			else if($password != $repassword){
			$error_msg['pass3'] = "password donit match  ";
			}
			}*/
		function test_input($data){
			$data = trim($data);
			$data =stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
        ?>
        <h2>PHP Form Validation Example</h2>
        <p><span  class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            Username:<input type="text" name="user" Placeholder="Input your user name "/>
			
            <br>
            Fullname:<input type="text" name="name" placeholder="Your fullname "/>
			<span class="error">* <?php echo $nameErr;?>
            <br>
            Email:<input type="text" name="email" placeholder="email"/>
			<span class="error">* <?php echo $emailErr;?>
            <br>
            Phone: <input type="text" name="phone" placeholder="phone number "/>
            <br>
            Password:<input type="password" name="password" />
			<?php 
				if(isset($error_msg["password"])){
					echo "<div class= 'error'>" .$error_msg["password"];
				}
			?>
            <br>
            Re-password:<input type="password" name="repassword" />
			<?php 
				if(isset($error_msg["repassword"])){
					echo "<div class= 'error'>" .$error_msg["repassword"];
				}
			?>
			<br>
            <input type="submit" name="submit" value="submit"/>
            
        </form>
		<?php
		echo "<h2>Your input:  </h2>";
		echo "<br>";
		echo $user;
		echo "<br>";
		echo $name;
		echo "<br>";
		echo $phone;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $password;
		
		?>
    </body>
</html>