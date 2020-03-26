<?php
/*
Template Name : Connexion
*/
?>
<?php get_header();?>
	<div class="single">
		<div class="post">
			<h1>Se connecter</h1>

			<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method='post'>
				<label for="user_email">Votre email</label>
				<input type="email" name="user_email" id="user_email">

				<label for="user_password">Votre mot de passe</label>
				<input type="passwrd" name="password" id="user_password">

				<input type="checkbox" name="remenber" id="remenber">
				<label for="remember">Votre email</label>

				<input type="submit" value="Se connecter">
			</form>
		</div>
	</div>

<?php get_footer();?>