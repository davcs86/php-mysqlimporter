PHP Mysql Importer
=================

PHP class for importing big SQL files into MySQL server.

This class comes to overpass the problem in phpMyAdmin (and others) , when you can't upload files of decent size through the browser upload. 

With this class you get the same function, just by uploading the file via FTP and doing the importing with 3 simple commands, e.g.

```php
include("php-mysqlimporter.php");
$mysqlImport = new MySQLImporter("localhost", "user", "password");
$mysqlImport->doImport("yourfile.sql");
```

## Links

* Homepage: <http://d-castillo.info/projects/php-mysqlimporter>
* Source: <https://github.com/davcs86/php-mysqlimporter>
* Bugs:   <https://github.com/davcs86/php-mysqlimporter/issues>

## Requirements:

1. PHP 5.0+
2. MySQLi extension

## Download

* As zip from this repository: <https://github.com/davcs86/php-mysqlimporter/archive/master.zip>

* With git from a terminal:

```
git clone https://github.com/davcs86/php-mysqlimporter.git
```

* Using Composer, add "davcs86/php-mysqimporter" as a dependency in your project's _composer.json_ file:

```
{
    "require": {
		"davcs86/php-mysqlimporter": "dev-master"
    }
}
```

## How to Use:

### Initialization

```php
$mysqlImport = new MySQLImporter($host, $user, $password, $port);
```

| Parameter | Description |
| ------------- | ----------- |
|$host | Host (or IP) of the MySQL server.|
|$user | Username to login into the server.|
|$password | Password of the user.|
|$port | Listen port of the MySQL server.<br>_Optional_. It uses the value in _mysqli.default_port_ as default.|

### Basic Importing

```php
$mysqlImport->doImport("./sqlfiles/test1.sql");
```

### Error Reporting

```php
if ($mysqlImport->hadErrors){
	// Display errors
	echo "<pre>\n";
	print_r($mysqlImport->errors);
	echo "\n</pre>";
} else {
	echo "<strong>File imported successfully</strong>";
}
```

### Advanced Importing

1) You can specify database.<br><b>NOTE:</b> This doesn't override the clause _USE_ in the file, but sets an initial database.

    ```php
    $mysqlImport->doImport("./sqlfiles/test1.sql", "initial_db_name");
    ```

2) You can create the database (if it doesn't exist).

    ```php
    $mysqlImport->doImport("./sqlfiles/test1.sql", "initial_db_name", true);
    ```

3) You can drop the database and then create it.

    ```php
    $mysqlImport->doImport("./sqlfiles/test1.sql", "initial_db_name", true, true);
    ```

4) Or just drop it. Particularly useful if you already got a CREATE statement in your SQL file.

    ```php
    $mysqlImport->doImport("./sqlfiles/test1.sql", "initial_db_name", false, true);
    ```

## Support

Drop me line on: <http://d-castillo.info/contactme/> or to: davcs86@gmail.com

## Donations

Did this project help you to save (or earn) some money?<br>
Please, support to the author by making a small donation.

<a href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2PK29ZFPUZ5WL' target='_blank'><img width="150" style='border:0px;width:150px' src='http://ko-fi.com/img/button-4.png' border='0' alt='Buy Me A Coffee :) @ PayPal' /></a>



