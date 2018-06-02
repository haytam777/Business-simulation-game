<div class="row justify-content-center">
	<div class="col-lg-4">
	    <div class="login-content card">
	        <div class="login-form">

				<h2><?= $session->mdp; ?> </h2>
				    <p><?= var_dump($session->getListJoueur($db)); ?></p>
				    <p><?= $joueur->id; ?></p>
					<input type="button" value="Commencer la partie" onclick="window.location.href='<?= $session->getStartURL() ?>'" />
			</div>
		</div>
	</div>
</div>


