<!-- PDT MODAL -->
<div id="creance_Modal" class="modal">

<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Créances</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class ="modal-body">
                <label>Récuperer vos créances</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Jour actuel : <?=$idjour?></label>
                <br/><br/>
                    <form method="post" id="creance_form">
                        <?php 
                            foreach($joueur->getCreancesFromDB($db) as $creance): ?>

                            <h4>Somme : <?= $creance->creance; ?>  - jour :<?= $creance->id_jour; ?> </h4>

                            <?php endforeach; ?>
                        <input type="submit" name="recup" id="recup" value="Récuperer" class="btn btn-success"/>
                        <input id="idjour" name="idjour" type="hidden" value="<?= $idjour ?>"/> 
                    </form>
                    <div class="modal-footer">
                        <button id="btn" type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
