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
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/favicon/mannaz-12.png">
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
			<li><a href="<?php echo base_url('') ?>"><img style="height: 10px; width: 10px;"DX id="logotop" src="<?php echo base_url(); ?>assets/img/mannaz-11.png"></a></li>
			<li><a href="<?php echo base_url('') ?>"><img id="home" src="<?php echo base_url(); ?>assets/img/Home.svg"><img id="acc" src="<?php echo base_url(); ?>assets/img/Accueil.svg"></a></li>
			<li><a href="">Blog</a></li>
			<li><a href="">Qu'est ce que Mannaz ?</a></li>
			<li><a href="">Développement personnel</a></li>
			<li><a href="">Méthodologie</a></li>
			<li><a href="<?php echo base_url('') ?>"><img id="f" src="<?php echo base_url(); ?>assets/img/f.svg"><img id="i" src="<?php echo base_url(); ?>assets/img/i.svg"><img id="in" src="<?php echo base_url(); ?>assets/img/in.svg"></a></li>
			<li><a href="<?php echo base_url('') ?>"></a></li>
		</ul>
	</div>

	<!-- LA BARRE DE NAVIGATION FIN -->
</header>
<div id="video">
	<video controls>
    <source src="\assets\img\video.png"
            type="video/webm">
    <source src="\assets\img\video.png"
            type="video/mp4">
    Sorry, your browser doesn't support embedded videos.
</video>

<div id="exx">
	<div style="padding-left: 13%;">
		<p>
			<span style="font-size: 2em;">Votre coach </span>
			<span style="color: #FFCF4A;font-size: 2em;">Mannaz </span>
			<span style="font-size: 2em;">2.0</span>
		</p>
		<p>Emplacement de texte à remplir</p>
	</div>
	<div class="container">
 	 	<div class="row">
    		<div class="col-sm">
      			<img style="width: 300px;height: 300px;" src="\assets\img\Daniela_Verdier.png" alt="Daniela_Verdier">
   			</div>
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
</div>
<br>
</div>
<div id="thema">
	<p id="thema_1">Différentes thématiques que nous pourrions aborder ensemble</p>
	<p ip="thema_2">Survolez les illustrations</p>
	<div id="thema_img">
		<img id="i4"src="<?php echo base_url(); ?>assets/img/4.png" alt="homme qui baille">
		<p>Vos émotions vous submergent facilemnt...</p>
		<img id="i5"src="<?php echo base_url(); ?>assets/img/5.png" alt="homme qui baille">
		<p>Atteint d'une maladie vous avez besoin de parler...</p>
		<img id="i6"src="<?php echo base_url(); ?>assets/img/6.png" alt="homme qui baille">
		<p>Vous êtes bleu et c'est difficile dans la vie de tous les jours...</p>
		<img id="i7"src="<?php echo base_url(); ?>assets/img/7.png" alt="homme qui baille">
	</div>
</div>
<!-- Footer -->

			<!-- Grid row-->
			<div class="row py-4 d-flex align-items-center">
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-6 col-lg-7 text-center text-md-right">

					<!-- Facebook -->
					<a class="fb-ic" href="#"> <i class="fa fa-facebook whiteicon mr-4"> </i> </a>
					<!-- Twitter -->
					<a class="tw-ic" href="#"> <i class="fa fa-twitter whiteicon mr-4"> </i> </a>
					<!--Instagram-->
					<a class="ins-ic" href="#"> <i class="fa fa-instagram whiteicon mr-4"> </i> </a>

				</div>
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
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

				<!-- Content -->
				<h6 class="text-uppercase font-weight-bold">Pour plus d'informations, contactez nous</h6>
				<p><i class="fa fa-phone mr-3"></i>+33(0) 6 18  27 67 58</p>
				<p><i class="fa fa-envelope mr-3"></i>mannaz@gmail.com</p>
				<br>
				<br>
				<div class="footer-copyright text-center py-3 sec_footer">
				© 2019 Copyright: <a href="<?php echo base_url('') ?>"> Mannaz.fr</a>
				</div>


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
