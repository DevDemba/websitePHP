<?php


	$user = 'demba';
	
	$password = 'password';

 	$db = new PDO('mysql:host=db;dbname=ipssi', $user, $password);

	if(isset($_POST['title'], $_POST['content'], $_POST['image'], $_POST['author'])) {

		if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['image']) AND !empty($_POST['author'])) {


		 	$insert = $db->prepare('INSERT INTO article VALUES (NULL, :title, :content, :image, :author)');

		 	$insert->bindValue(':title', $_POST['title'],PDO::PARAM_STR);

		 	$insert->bindValue(':content', $_POST['content'],PDO::PARAM_STR);

		 	$insert->bindValue(':image', $_POST['image'],PDO::PARAM_STR);

		 	$insert->bindValue(':author', $_POST['author'],PDO::PARAM_STR);


		 	$insertIsOk = $insert->execute();

		 	if($insertIsOk){

			 	$message = 'The article is created !';

			 	echo '<div class="alert alert-success">$message</div>';
			}
			else{
			 	
			 	$message = 'Error to insert !';

		 	    echo "<div class='alert alert-danger'>$message</div>";
			}
    	}

	}
	else {

				$message = 'Complete all fields please !';
				echo "<div class='alert alert-danger'>$message</div>";
	
	}



function uploadFile(): void
{
    if (isset($_FILES['file'])) {
        $errors = array();
        [
            'name' => $file_name,
            'size' => $file_size,
            'tmp_name' => $file_tmp,
            'type' => $file_type
        ] = $_FILES['file'];
        $regex = '/^.*\.(jpg|jpeg|png)$/i';

        if (0 == preg_match($regex, $file_name, $ext)) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }

        // 2MB == default conf of upload_max_filesize == 2097152
        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "images/" . uniqid() . ".$ext[1]");
            echo "<div class='alert alert-success'>File uploaded</div>";
        } else {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        }
    }
}


	







/*<?php
			if(isset($_POST['title'], $_POST['content'], $_POST['image'], $_POST['author'])) {
				if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['image']) AND !empty($_POST['author'])) {
					$title = htmlspecialchars($_POST['title']);
					$content = htmlspecialchars($_POST['content']);
					$image = htmlspecialchars($_POST['image']);
					$author = htmlspecialchars($_POST['author']);

					$db->prepare("INSERT INTO article (:title, :content, :image, :author)
						VALUES ($title', '$content', '$image', '$author')");

					$db->execute();

					}else {

					echo 'Veuillez remplir tous les champs !';
				}
			}
 ?>*/
