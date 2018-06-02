<div class="row justify-content-center">


<?php 

foreach(Session::getSessions($db) as $session): ?>
	<div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">

    <h2><a href="<?= $session->getJoinUrl() ?>">Entrez</a> <?= $session->mdp; ?> </h2>
    <p><?= var_dump($session->getListJoueur($db)); ?></p>
    <p><?= $joueur->id; ?></p>
    <input type="button" value="<?= $session->mdp; ?>" onclick="window.location.href='<?= $session->getJoinUrl() ?>'" />
    </div>
    </div></div>

<?php endforeach; ?>

</div>