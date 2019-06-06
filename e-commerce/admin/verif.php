<?php
session_start();
//initialisation
$nom = "";
$prix = "";
$image="";
$quantite="";
$categorie="";
$marque="";
$couleur="";
$id= 0;
$editer_state=false;

//connect to database
$db = mysqli_connect('localhost', 'root','', 'ecommerce');
//if ajouter button is clicked

if(isset($_POST['ok']))
{
$nom = $_POST['nom'];
$prix = $_POST['Prix'];
$image = $_POST['image'];
$quantite = $_POST['quantite'];
$categorie=$_POST['categorie'];
$marque= print_r ($_POST['marque']);
$couleur= print_r ($_POST['couleur']);
$query = "INSERT INTO produit(nom_produit, prix_produit, image_1_produit, quantite, categorie, marque, couleur) VALUES('$nom', '$prix', '$image', '$quantite', '$categorie', '$marque', '$couleur')";
mysqli_query($db, $query);
$_SESSION['Msg']=" Le produit est ajouté avec succés";
header('location: Produits.php'); //redirect to Produits page after inserting
}
//update records
if(isset($_POST['update']))
{ 
$id=$_POST['id'];
$nom=$_POST['nom'];
$image=$_POST['image'];
$prix=$_POST['Prix'];
$quantite=$_POST['quantite'];
$categorie=$_POST['categorie'];
$marque=print_r($_POST['marque']);
$couleur=print_r($_POST['couleur']);
$update=true;
mysqli_query($db, "UPDATE produit SET nom_produit='$nom', prix_produit='$prix', quantite='$quantite', image_1_produit='$image' WHERE id_produit=$id ");
$_SESSION['Msg']= " Le produit est modifié avec succés";
header('location: Produits.php');

}
//delete record
if (isset($_GET['del']))
{
$id= $_GET['del'];
mysqli_query($db, "DELETE FROM produit WHERE id_produit=$id");
$_SESSION['Msg']= " Le produit est supprimé avec succés";
header('location: Produits.php');
}


//retrieve records
$resultat= mysqli_query($db, "SELECT * FROM produit");

?>