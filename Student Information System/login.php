<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(51, 250, 240);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #51cdd396;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 20px 19px 10px rgb(5 82 255 / 52%);
            width: 300px;
            max-width: 100%;
                    }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .register-link {
            text-align: center;
            margin-top: 10px;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post">
            <div class="form-group">
                <label for="email">username</label>
                <input type="text" id="email" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="btnlogin">
            </div>
            <div class="register-link">
                <p>Don't have an account? <a href="index.php">Register Now</a></p>
            </div>
        </form>
    </div>
</body>
</html>





<!-- other  -->

<?php

require "connect.php";


  if(isset($_POST['btnlogin']))
  {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $query="select * from commit where username = '$username' or password = '$password'";
      $result=mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($result);

      if (mysqli_num_rows($result) > 0) 
      {


          if ($password == $row["password"])
          {
            
            header("location:home.php");

          }
          else {
            echo "error";
          }
     
  }
}

  ?>