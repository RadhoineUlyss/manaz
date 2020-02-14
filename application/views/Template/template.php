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
	<link type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
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

<header>
	
	<!-- LA BARRE DE NAVIGATION DEBUT -->
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
<nav role="deroulant">
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
<body>


<!-- Footer -->

			<!-- Grid row-->
			
				<!-- Grid column -->

			</div>
			<!-- Grid row-->

		</div>
	</div>

	<!-- Footer Links -->
	<div class="container text-center text-md-left mt-5">

		<!-- Grid row -->
		<div class="row mt-3">

			<!-- Grid column -->
			
			<!-- Grid column -->


			</div>
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
			<br>
			<br>
			<br>
			<br>
			<input id="legal" type="button" value="Mentions légales">
			</div>
		</div>
	</div>
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
	echo "<script>$('#myModal2').modal('show');</script>";
} else {
	if ($this->session->flashdata('error_ident')) {
		echo "<script>$('#myModal').modal('show');</script>";
	}
}
?>
</body>
</html>
