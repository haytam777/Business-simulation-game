$(document).ready(function(){
    $('#insertMP_form').on("submit", function(event){  
        event.preventDefault();  
            if($('#achat').val() == "" )  
            {  
                alert("Name is required");  
            }  
                else if($('#vente').val() == '')  
            {  
                alert("Address is required");  
            }  
            else  
            {  
                $.ajax({  
                url:"insertMP.php",  
                method:"POST",  
                data:$('#insertMP_form').serialize(),  
                beforeSend:function(){  
                $('#insertMP').val("Achat/Vente en cours");  
                },  
                success:function(data){  
                        //$('#insert_form')[0].reset();  
                        $('#add_data_ModalMP').modal('close');
                        location.reload();                       
                    }  
                });  
            }  
            }); 

});  