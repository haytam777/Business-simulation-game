<!-- PDT MODAL -->
<div id="vendre_Modal" class="modal">

<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Vendre vos produits à Sally</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class ="modal-body">
                    <form method="post" id="vendre_form">
                        <label>Méthode de vente</label><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;
                        <img <?= $ctrlVendren ?> src="../images/Sally.png" style="width:80px;height:80px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img <?= $ctrlVendrec ?> src="../images/Sally.png" style="width:80px;height:80px;">
                    </form>
                    <div class="modal-footer">
                        <button id="btn" type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
/*function change(obj) {


    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    
    if(selected === '1'){
        alert(selected)
        $('btn').hide();
    }
    
}*/


$(document).ready(function(){
        $("#choose").change(function(){
            selected = $("#choose option:selected").index()
            if(selected === 2){
                $("#btn").css('diplay','block');
            }
        })
})
</script>

 