
<?php
//connection ya server

$servername="localhost";
$username= "root";
$password= "";
$dbname= "form";
//connect databases
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
}
$messege= "";

if(isset($_POST["submit"])){
    $full_name = trim($_POST["full_name"]);
    $username =trim($_POST["username"]);
    $password_plain =trim( $_POST["password"]);
    $email = trim($_POST["email"]);
    $gender = $_POST['gender']??'';
    $current_residence = $_POST['region'];

if(empty($full_name) || empty($username) || empty($password_plain) || empty($email) || empty($gender) || empty($current_residance)){
    $messege = "<p style='color:red;>ERROR:jaza sehemu zilizo zote</p>";
}else{
    $password=password_hash($password_plain,PASSWORD_DEFAULT);
    //ingiza data
    $stmt = $conn->prepare("INSERT INTO form(full_name,username,password,email,gender,current_residence)values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $full_name,$username,$password,$email,$gender,$current_residence);
    if( $stmt->execute()){ 
        $messege="<p style='color:green'>SUCESS:data imehifadhiwa!</P>";
    }else{
        $messege="<p style='color:red;'>ERROR:".$stmt->error."</p>";
    }
    $stmt->close();
    }
  }    
  $conn->close();
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        placeholder:hover{
            color: #769;
            

        }
        input{

            padding-right: 20%;
            margin-bottom:2px;
            border-radius: 10%;  

        }
        input,button,select:hover{
            cursor: pointer;
        }
        body{
            margin: auto;
            margin-left: 20%;
            margin-bottom: 10%;
            background-color: #4599;
          
        }
    label{
        color: darkslategray;
    }
    </style>
</head>
<body>
  

    <form action="" method="post">
        <h1>INSERT YOUR CREDENTIALS</h1>
        <label for="fullname"> INSERT YOUR FULL NAME:</label>
        <input type="text" name="full_name" placeholder="enter your full name"><br><br>
        <label for="username">ENTER YOUR USERNAME:</label>
        <input type="text" name="username" id="16" placeholder="enter your username"><br><br>
        <label for="password">ENTER YOUR PASSWORD:</label>
        <input type="password" name="password" id="16" placeholder="enter correct password"><br><br>
        <label for="email">ENTER YOUR EMAIL;</label>
         <input type="text" name="email" placeholder="enter your email"><br><br>
        <label for="select your gender">SELECT YOUR GENDER:</label>
        MALE:<input type="radio" value="male">
       FEMALE: <input type="radio" value="female">
       BISEXUAL: <input type="radio" value="bisexual"><br><br>
        <label for="select region">SELECT YOUR CURRENT RESIDENCE</label>
        <select name="region" id="5">
            <option value="northward">north</option>
            <option value="western">west</option>
            <option value="east">east</option>
            <option value="central">central</option>
            <option value="south">south</option>
        </select>
        <button type="submit" name="submit">upload</button>
    </form>
    
</body>
</html>