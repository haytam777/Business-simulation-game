
<?php 

foreach(Session::getSessions($db) as $session): ?>

    <h2><a href="<?php $session->getJoinUrl() ?>"><?= $session->id; ?></a> <?= $session->mdp; ?> </h2>

<?php endforeach; ?>