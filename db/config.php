<?php
 /* File: dbconfig.php
 * Define the four constants with all
 * the db information.
 */
 define('DB_NAME', 'Realty');
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PWD', '');
 define('BASEURL', 'localhost/Realty/');

/* Define the PDO connection string.
 */
 define('MYSQL_CONNECTION_STRING',
 'mysql:host=' . DB_HOST .
 ';dbname=' . DB_NAME);

try{
 $pdo = new PDO(MYSQL_CONNECTION_STRING, DB_USER,DB_PWD);
} catch (PDOException $e){
    die();
}

    
?> 