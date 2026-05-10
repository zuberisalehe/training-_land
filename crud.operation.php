<?php
//step1: to connect the server 
$servername="localhost";
$username= "root";
$password= "";
try {
    $conn=new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "<h1>connection created succesfully</h1>";

      // step2: create database zuberi
      $sql= "CREATE DATABASE zuberi";
      $conn->exec($sql);
      echo "<h1>database is successfully connected<h1>";
} 
catch (PDOException $e) {
    echo "connection failed". $e->getMessage();
    //step3: create table mjomba
    $sql= "CREATE TABLE  zuberi.mjomba(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    age INT(3) NOT NULL,
    grade VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT  CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    echo "<h1>table is succesfully created</h1>";
    //step4 insert data into the table
    $sql= "INSERT INTO zuberi.mjomba(name,age,grade)values('zuberi salehe mussa',28,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('karimu salehe mussa',17,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('rukeba salehe mussa',30,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('rahma salehe mussa',25,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('salimu salehe mussa',23,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('baraka salehe mussa',17,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('salehe salehe mussa',17,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('mustafa salehe mussa',17,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('bahati salehe mussa',17,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('omari salehe mussa',17,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)values('nuriat salehe mussa',17,'A')";
    $conn->exec($sql);
    $sql="INSERT INTO zuberi.mjomba(name,age,grade)value('rashma salehe mussa',17,'A')";
    $conn->exec($sql);
    echo"<h1>data inserted succesfully</h1>";
    // step5 update data into a databases
    $sql= "UPDATE zuberi.mjomba SET age=6 WHERE name='bahati salehe mussa'";
    $conn->exec($sql);
    echo "<h1>successfully updated<h1>";
    //step6 delete from the table
    $sql= "DELETE FROM zuberi.mjomba WHERE name='bahati salehe mussa'";
    $conn->exec($sql);
    echo "<h1>succesfully deleted</h1>";
    //step7 to select some of the atrribute
    $sql= "SELECT name,age FROM zuberi.mjomba";
    $conn->exec($sql);
    echo "<h1>name and age is succefully selected</h1>";
}
?>