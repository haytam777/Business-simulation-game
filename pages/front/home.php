<div class="row justify-content-center">
	<?php 
		foreach(Session::getSessions($db) as $session): ?>
			<div class="col-lg-4">
				<div class="login-content card">
				    <div class="login-form">
					    <center><h1> <?= $session->mdp; ?> </h1></center>
					    <center><p>Nombre de places vacantes : <?=$session->getEmptyPlace($db); ?></p></center>
					    <!--<p><?= $joueur->id; ?></p>-->
					    <!--<p><?= var_dump($joueur); ?></p>-->
					    <center><input type="button" value="Accéder à la session" onclick="window.location.href='<?= $session->getJoinUrl() ?>'" /></center>
				    </div>
				</div>
			</div>
		<?php endforeach; ?>
</div>