<?PHP
include "C:/wamp64/www/galaxy/core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["idclient"])){
	$livraisonC->supprimerlivraison($_POST["idclient"]);
	header('Location: livraison.php');
}

?>