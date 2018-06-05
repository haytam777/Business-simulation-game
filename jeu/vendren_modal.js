$(document).ready(function(){
    $('#vendren_form').on("submit", function(event){  
        event.preventDefault();
            if( ($('#qtev').val()) == '') 
                 alert('Vous avez vendu ' + $('#de').val() +' produits')
            if(parseInt($('#pdt').val()) < parseInt($('#qtev').val()))
                alert("Vous n'avez pas cette quantité de produit");
            else  
            {  
                $.ajax({  
                url:"vendrenprocessing.php",  
                method:"POST",  
                data:$('#vendren_form').serialize(),  
                success:function(data){  
                        //$('#insert_form')[0].reset();  
                        $('#vendren_Modal').modal('close');
                        location.reload();                       
                    }  
                });  
            }  
            }); 

});  