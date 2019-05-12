<?php
 /* File: dbconfig.php
 * Define the four constants with all
 * the db information.
 */
 define('DB_NAME', 'Realty');
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PWD', '');
 define('BASEURL', '/Realty/');

/* Define the PDO connection string.
 */
 define('MYSQL_CONNECTION_STRING',
 'mysql:host=' . DB_HOST .
 ';dbname=' . DB_NAME);

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}

?> 