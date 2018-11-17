<?php
$user = 'demba';
$password = 'password';

try {
    $db = new PDO('mysql:host=db;dbname=ipssi', $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->query('SELECT * from user WHERE id');
    $data = $stmt->fetchAll();

    if(isset($_POST['createUser'])){
    	if(!empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['login']) AND !empty($_POST['password'])){

			$lastname = htmlspecialchars($_POST['lastname']);
			$firstname = htmlspecialchars($_POST['firstname']);
			$login = htmlspecialchars($_POST['login']);
			$password = htmlspecialchars($_POST['password']);
            $password = crypt($password);

		}
		$sql = "INSERT INTO user(firstname, lastname, login, password) VALUES ('$lastname','$firstname', '$login', '$password')";
	    $db->exec($sql);
	    echo "New record created successfully !";
    }

	foreach($data as $row) {

    	echo ' Hello ' .$row['firstname']. ':) ';

    }
    

    $db = null;

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}




