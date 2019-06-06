
<?php

session_start();
//initialisation
$nom = "";
$prix = "";
$image="";
$quanite="";
$categorie="";
$marque="";
$couleur="";
$id= 0;
$edit_state=false;
//connect to database
$db = mysqli_connect('localhost', 'root','', 'e-commerce');
//if ajouter button is clicked
if(isset($_POST['save']))
{
$nom = $_POST['Nom'];
$prix = $_POST['prix'];
if($nom !=null || $prix !=null)
{
$query= "INSERT INTO data_produit(Nom, prix) VALUES('".$nom."', '".$prix."')";
mysqli_query($db, $query);
$_SESSION['msg']=" Le produit est ajouté avec succés";
header('location: Produits.php'); //redirect to Produits page after inserting
}
else {
$_SESSION['msg2']= " Echec";
header('location: Produits.php');
}
}
//update records
if(isset($_POST['update']))
{ 
$nom=mysql_real_escape_string($_POST['Nom']);
$prix=mysqli_real_escape_string($_POST['prix']);
$id=mysqli_real_escape_string($_POST['id']);

mysqli_query($db, "UPDATE data_produit SET Nom='$nom', prix='$prix' WHERE id=$id");
$_SESSION['msg']=" Le produit est modifié avec succés";
header('location: Produits.php');

}
//delete records
if (isset($_GET['del']))
{
	$id= $_GET['del'];
	mysqli_query($db, "DELETE FROM data_produit WHERE id=$id");
$_SESSION['msg']= " Le produit est supprimé avec succés";
header('location: Produits.php');
}

//retrieve records
$results= mysqli_query($db, "SELECT * FROM data_produit");
//if valider button is clicked

if(isset($_GET['update']))
{ 
$nom=mysql_real_escape_string($_GET['Nom']);
$prix=mysqli_real_escape_string($_GET['prix']);
$image=mysql_real_escape_string($_GET['image']);
$quantite=mysql_real_escape_string($_GET['quanite']);
$categorie=mysql_real_escape_string($_GET['categorie']);
$marque=mysql_real_escape_string($_GET['marque']);
$couleur=mysql_real_escape_string($_GET['couleur']);
$id=mysqli_real_escape_string($_GET['id']);
mysqli_query($db, "UPDATE data_produit SET Nom='$nom', prix='$prix' , 
image='$image' , quantite='$quantite',
categorie='$categorie', marque='$marque', couleur='$couleur' WHERE id=$id");

$_SESSION['msg']=" Le produit est modifié avec succés";
header('location: Produits.php');
}

?>