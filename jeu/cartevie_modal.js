$(document).ready(function(){
    $('#cartevie_form').on("submit", function(event){  
        event.preventDefault();  
           
                $.ajax({  
                url:"cartevieprocess.php",  
                method:"POST",  
                data:$('#cartevie_form').serialize(),  
                beforeSend:function(){  
                $('#cartevie_insert').val("Achat/Vente en cours");  
                },  
                success:function(data){  
                        //$('#insert_form')[0].reset();  
                        $('#cartevie_Modal').modal('close');
                        location.reload();                       
                    }  
                });  
              
            }); 

});  