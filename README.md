PHP Mysql Importer
=================

PHP class for importing big SQL files into MySQL server.

## How to Use:

### Initialization

```php
$mysqlImport = new MySQLImporter($host, $user, $password, $port);
```

| Parameter | Description          |
| ------------- | ----------- |
|$host | Host (or IP) of the MySQL server.|
|$user | Username to login into the server.|
|$password | Password of the user.|
|$port | _Optional_. Listen port of the MySQL server.<br>It uses the value in _mysqli.default_port_ as default.|

### Basic Importing

```php
$mysqlImport->doImport("./sqlfiles/test1.sql");
```

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
