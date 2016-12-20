<?php
// additem.php - добавление товара

$request_object = file_get_contents('php://input');
$db_connection = new mysqli("localhost", "root", "dactorstrnge28", "dbname");
$db_connection->set_charset("utf8");

$upload_dir = getcwd() . '/var/www/html/playgroundsaid';
$uploadfile = md5(time()) . basename($_FILES['photo']['input']);
move_uploaded_file($_FILES['photo']['tmp_name'], $upload_dir . $uploadfile);

/*// Получение данных о товаре
$item_photo = $uploadfile;
$item_name = $_POST['TextArea'];

$query = "
	INSERT INTO items 
	(
		textarea
	)
	VALUES
	(
		\"{$item_name}\", 
	)
";
print($query);
$db_response = $db_connection->query($query);*/

unset($db_connection);

?>
