$(document).ready(function(){
    $('#insertClara_form').on("submit", function(event){  
        event.preventDefault();  
            //lert("La valeur disponible est ="+parseInt($('#a').val())+"et la valeur total est="+parseInt($('#total').val()));
            if($('#quantite').val() == "" )  
            {  
                alert("quantite is required");  
            }  
            else if(parseInt($('#total').val()) > parseInt($('#disponible').val()))
                alert("Vous n'avez pas le montant suffisant pour acheter cette quantité!");
            else  
            {  
                $.ajax({  
                url:"insertClara.php",  
                method:"POST",  
                data:$('#insertClara_form').serialize(),  
                beforeSend:function(){  
                $('#insertClara').val("Achat en cours");  
                //alert("Here");
                },  
                success:function(data){  
                        //$('#insert_form')[0].reset();  
                        $('#add_data_ModalClara').modal('close');
                        location.reload();                       
                    }  
                });  
            }  
            }); 

});  