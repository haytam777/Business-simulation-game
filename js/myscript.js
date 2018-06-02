jQuery(function($){
    $('#datepicker').datepicker({
        
    altFormat: "yy-mm-dd"
    });
})



  jQuery(function($){
        var selBox = document.getElementById('Domaine');
        selBox.onchange = function(){
            if(this.value == 'Autres'){
                document.getElementById('autdom').style.display = 'block';
            }
            else{
                document.getElementById('autdom').style.display = 'none';
            }
        }
    });
 

  jQuery(function($){
        var selBox = document.getElementById('ville');
        selBox.onchange = function(){
            if(this.value == 'Autres'){
                document.getElementById('autvil').style.display = 'block';
            }
            else{
                document.getElementById('autvil').style.display = 'none';
            }
        }
    });
 

