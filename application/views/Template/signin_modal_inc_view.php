<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Connexion</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<?php if ($this->session->flashdata('error_ident')) {
						echo '<div class="alert alert-danger" id="danger-alert"><strong>' . $this->session->flashdata('error_ident') . '</strong></div>';
					} ?>
					<?php echo form_open('Test/connection'); ?> <!-- FORMULAIRE CONNECTION DEBUT  -->
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('username'); ?>" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Se connecter</button>
					</div>
					<?php echo form_close(); ?> <!-- FORMULAIRE CONNECTION FIN  -->
				</div>
				<div class="modal-footer">
					<a href="#">Mot de passe oublié ?</a>
				</div>
				<br>
				<div class="modal-footer">
					<a href="#inscriptionModal" data-toggle="modal">Pas encore inscrit ?</a>
				</div>
			</div>
		</div>
	</div>
	<div id="inscriptionModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<i style="cursor: pointer;" data-dismiss="modal" aria-label="Close" class="fas fa-chevron-left"></i>
				<div class="modal-header">
					<h4 class="modal-title">Inscription</h4>
				</div>
				<div class="modal-body">
					<?php if ($this->session->flashdata('error_ins')) {
						echo '<div class="alert alert-danger" id="danger-alert">' . $this->session->flashdata('error_ins') . '</div>';
					} ?>
					<?php echo form_open('Test/inscription'); ?> <!-- FORMULAIRE INSCRIPTION DEBUT  -->
					<div class="form-group">
						<select class="form-control" id="SelectType" name="type_compte" required>
							<option value="" <?php echo set_value('type_compte') == '' ? "SELECTED" : "" ?>>Vous êtes ?</option>
							<option value="1" <?php echo set_value('type_compte') == 1 ? "SELECTED" : "" ?>>Je suis un particulier</option>
							<option value="2" <?php echo set_value('type_compte') == 2 ? "SELECTED" : "" ?>>Je suis un professionnel</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nom" placeholder="Nom" value="<?php echo set_value('nom'); ?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="prenom" placeholder="Prénom" value="<?php echo set_value('prenom'); ?>" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" value="<?php echo set_value('tel'); ?>" name="tel" placeholder="Tel" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo set_value('adresse'); ?>" name="adresse" placeholder="Adresse" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo set_value('postal_code'); ?>" name="postal_code" placeholder="Code postal" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo set_value('ville'); ?>" name="ville" placeholder="Ville" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password_confirm" placeholder="Mot de passe verification" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">S'inscrire</button>
					</div>
					<?php echo form_close(); ?> <!-- FORMULAIRE INSCRIPTION FIN  -->
				</div>
			</div>
		</div>
	</div>
</div>
</div>

