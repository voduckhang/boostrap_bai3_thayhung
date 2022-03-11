<?php
$conn = new PDO('mysql:host=localhost;dbname=fake_db','root','');
$data = $conn->query("select id, name, email, phone from user_fake");
$d = $data->fetchAll();
$rows=array();
foreach ($d as $row) {
	$rows[]=array(
		"id"=>$row['id'],
		"name"=>$row['name'],
		"email"=>$row['email'],
		"phone"=>$row['phone'],
	);
}
echo json_encode($rows);
?>