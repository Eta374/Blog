<?php
 $pdo = new PDO('mysql:host=localhost;dbname=blog;port=3306','root','',
 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
 if ($_POST) {
 $nonCategorie = $_POST['titre'];
 $nonContenu = $_POST['contenu'];
 if (($nonCategorie != "") && ($nonContenu != "")) {
 $req1 = $pdo->prepare("
 INSERT INTO posts(titre, contenu)
 VALUES (:titre, :contenu)");


 $req1->execute(array(
 ':titre' => $nonCategorie,
 ':contenu' => $nonContenu
));
 }
 }
//  header('location:admin.php');
?>