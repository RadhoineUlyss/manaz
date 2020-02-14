<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mannaz Conseils - Page d'accueil</title>
	<!-- Bootstrap CSS-->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Font -->
	<link type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,700"/>
	<!-- FavIcon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/favicon/logo-mannaz1.png">
	<link rel="manifest" href="<?php echo base_url(); ?>assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<?php
	if ($style != '') {
		echo "<link rel=\"stylesheet\" href=" . base_url() . "assets/custom/css/" . $style . ".css>";
	}
	?>
</head>
<!-- NE PAS TOUCHER EN HAUT -->
<body>
<header>
	
	<!-- LA BARRE DE NAVIGATION DEBUT -->
	<nav class="navbar navbar-expand-sm justify-content-center">
		<div class="d-flex flex-row-reverse">
			<form class="form-inline md-form form-sm mt-0">
				<span onclick="DisplaySearchBar()"><i id="searchicon" class="fa fa-search fa-lg" aria-hidden="true"></i></span>
				<input id="searchbar" class="form-control-sm" type="text" placeholder="Search" aria-label="Search">
			</form>
		</div>
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url('') ?>"><img id="logotop" src="<?php echo base_url(); ?>assets/img/logo_mannaz_conseils.png"></a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="d-flex flex-row-reverse">
				<?php echo $navbar ?> <!-- $navbar correspond aux boutons présents à droite de la barre (ex : Se connecter ) -->
			</div>
		</div>
	</nav>
	<div id="navigation">
		
        <ul>
			<li><a href="<?php echo base_url('') ?>"><a style="margin-top:10%;" href="">L'equilibre naît de l'action.</a></li>
			<li><a style="margin-right:9px; margin-top:10%;"href="">Qu'est ce que Mannaz ?</a></li>
			<li><a href="<?php echo base_url('') ?>"><img id="logomid" src="<?php echo base_url(); ?>assets/img/logo-mannaz1.png"></a></li>	
			<li><a style="margin-right:9px; margin-top:15%;"href="">Suivez-nous</a></li>
			<li><a href="<?php echo base_url('') ?>"><img style="margin-top:10%; height: 15px; width: 15px;"id="i" src="<?php echo base_url(); ?>assets/img/i.svg"><img style="margin-top:10%;height: 15px; width: 15px; margin-left: 18px" id="f" src="<?php echo base_url(); ?>assets/img/f.svg"><img style="margin-top:10%;height: 23px; width: 25px; margin-left: 18px"id="in" src="<?php echo base_url(); ?>assets/img/in.svg"></a></li>
			<li><input style="margin-top:15%;margin-left:25%;" id="connexion" type="button" value="Connexion">

		</ul>
		
	
	
	<!-- LA BARRE DE NAVIGATION FIN -->

</header>
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />

    <span></span>
    <span></span>
    <span></span>

    <ul id="menu">
	  <a href="#"><li>Accueil</li> </a>
	  <br> </br>
      <a href="#"><li>Développement personnel & professionnel</li></a>
      <a href="#"><li>Qu'est ce que Mannaz ?</li></a>
      <a href="#"><li>Mon approche</li></a>
     </ul>
	</div>
   </nav>
   <div style="padding-left: 13%;">
		<p>
			<span style="font-size: 2em;">Votre coach </span>
			<span style="color: blue;font-size: 2em;">Mannaz </span>
			<span style="color: #FFCF4A;font-size: 2em;">Mannaz </span>
			<span style="font-size: 2em;">2.0</span>
		</p>
		<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
		<p>Emplacement de texte à remplir</p>
	</div>
	<div class="container">
 	 	<div class="row">
    		<div class="col-sm">
      			<img style="width: 300px;height: 300px;" src="\assets\img\Daniela_Verdier.png" alt="Daniela_Verdier">
   			</div>
   		 	<div class="col-sm">
      			One of three columns
   		 	<div style="margin-top: 8%; margin-right: 25%;" class="col-sm">
				<span style="color: #FFCF4A;font-size: 2em;">Daniella Verdier  </span>
				<br>
				<br>
				<p>
				  	Fondateur de Mannaz et coach en aide à la personne, <br>
				  	Devellopement personnel et professionnel
				</p> 
				<input id="qui" type="button" value="Qui suis-je?">
    		</div>
  		</div>
	</div>
<body>


<!-- Footer -->

			<!-- Grid row-->
			
				<!-- Grid column -->

			</div>
			<!-- Grid row-->

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark prem_footer">

	<!-- Footer Links -->
	<div class="container text-center text-md-left mt-4">

		<!-- Grid row -->
		<div class="row mt-3">

			<!-- Grid column -->
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

				<!-- Copyright -->
				<p>
					© 2018 <a href="<?php echo base_url('') ?>"> Mannaz.fr</a> par Seasons
				</p>
				<!-- Copyright -->

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-2 col-lg-4 col-xl-3 mx-auto mb-4">
				<p>
					<i class="fa fa-phone mr-3"></i>+33(0)6 18 24 67 58
				</p>
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

				<p>
					<i class="fa fa-envelope mr-3"></i> hello@mannaz.com
				</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4">
				

				<!-- Links -->
				<p>
					<button id="legal">Mentions légales</button>
				</p>
				
				

			</div>
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Footer Links -->



</footer>
<!-- Footer -->
<!-- NE PAS TOUCHER EN BAS -->
<!-- jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/custom/js/display_searchbar.js"></script>
<?php
if ($script != '') {
	echo "<script src=\"" . base_url() . "assets/custom/js/" . $script . ".js\"></script>";
}
?>

<?php
if ($this->session->flashdata('error_ins')) {
	echo "<script>$('#inscriptionModal').modal('show');</script>";
} else {
	if ($this->session->flashdata('error_ident')) {
		echo "<script>$('#myModal').modal('show');</script>";
	}
}
?>
</body>
</html>
