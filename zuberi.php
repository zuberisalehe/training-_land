<?php

/*$host = 'localhost';
$dbname = 'school_db';
$user = 'root';
$pass = 'password';
try {
$pdo = new PDO(
"mysql:host=$host;dbname=$dbname;charset=utf8mb4",
$user, $pass,
[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
]
);
echo 'Connected successfully!';
} catch (PDOException $e) {
die('Connection failed: ' . $e->getMessage());
}*/
$t=date("H");
if ($t<20) {
    print "good day";
}
else{
    print "good night";
}

?>