<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="Aut.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form  method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
               
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
               
				<input type="submit" value="Login" name="submit">
			</form>
            <div class="cre">
                <p>Create <a href="">ccount here</a></p>
            </div>
		</div>
    <?php
    require_once("conect.php");

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $check_username;
        

        $user = mysqli_query($con, "SELECT username, password FROM auth WHERE username = '$username' AND password = '$password'");

        while ($row = mysqli_fetch_array($user)) {
            
            $check_username = $row['username'];
            $check_password = $row['password'];
        }
        $check_username;
        if($username == $check_username && $password == $check_password) {
                session_start();
                $_SESSION['logged_in'] = true;

        
            
                // echo "<script type='text/javascript'>alert('$message');</script>";
                header("Location:  ./index.php");
            } else {
                
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        
           
           
    }


?>



  

    
	</body>
</html>