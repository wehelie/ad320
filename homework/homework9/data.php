<?php
include 'db/db.php';

if (isset($_POST['search'])) {
	$q = $_POST['q'];
	$stmt = $pdo->prepare("SELECT email, phone, address FROM info WHERE email LIKE '%$q%'");
	$stmt->execute();
	$count = $stmt->rowCount();
	$result = $stmt->fetchAll();

	if ($count > 0) {
		foreach ($result as $row) {
			echo json_encode($row);
		}
	}
}

?>
