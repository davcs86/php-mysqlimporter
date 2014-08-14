<?php

include ("ClassMySQLImport.php"); 

$host = "localhost"; // database host (required)
$port = 3306; // database port (optional)
$dbUser = "root"; //database user (required)
$dbPassword = "mysql"; // database password (required)
$sqlFile = "SQLFileTest2.sql"; // Path to SQL file (required)

/* -------------------------------
**    Initialize (basic usage):
** ------------------------------- */

$newImport = new MySQLImport($host, $dbUser, $dbPassword); 
/* 
* And you can specify port
$newImport = new MySQLImport($host, $dbUser, $dbPassword, $port);
*/

/* -------------------------------
**   Start import (basic usage):
** ------------------------------- */
$newImport->doImport($sqlFile); 
/* 
** 1) You can specify database. 
** NOTE: This doesn't override the clause USE in the file, but sets an initial database.
$newImport->doImport($sqlFile, "initial_db_name");
** 
** 2) You can create the database (if it doesn't exist).
$newImport->doImport($sqlFile, "initial_db_name", true);
** 
** 3) You can drop the database and then create it.
$newImport->doImport($sqlFile, "initial_db_name", true, true);
** 
** 4) Or just drop it.
$newImport->doImport($sqlFile, "initial_db_name", false, true);
*/

// Check for errors
if ($newImport->hadErrors){
	// Display errors
	echo "<pre>\n";
	print_r($newImport->errors);
	echo "\n</pre>";
} else {
	echo "<strong>File imported successfully</strong>";
}


?>