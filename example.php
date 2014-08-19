<?php

include("php-mysqlimporter.php");
$mysqlImport = new MySQLImporter("localhost", "user", "password");
/* 
* You can specify the listen port
$newImport = new MySQLImport("localhost", "user", "password", "3306");
*/
$mysqlImport->doImport("./sqlfiles/test1.sql");

/* 
** 1) You can specify database. 
** NOTE: This doesn't override the clause USE in the file, but sets an initial database.
$mysqlImport->doImport($sqlFile, "initial_db_name");
** 
** 2) You can create the database (if it doesn't exist).
$mysqlImport->doImport($sqlFile, "initial_db_name", true);
** 
** 3) You can drop the database and then create it.
$mysqlImport->doImport($sqlFile, "initial_db_name", true, true);
** 
** 4) Or just drop it.
$mysqlImport->doImport($sqlFile, "initial_db_name", false, true);
*/

// Check for errors
if ($mysqlImport->hadErrors){
	// Display errors
	echo "<pre>\n";
	print_r($mysqlImport->errors);
	echo "\n</pre>";
} else {
	echo "<strong>File imported successfully</strong>";
}


?>
