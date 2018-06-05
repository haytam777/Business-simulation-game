$(document).ready(function(){
    $('#vendrec_form').on("submit", function(event){  
        event.preventDefault();
            if( ($('#qtevc').val()) == '') 
                alert("veuillez spécifier la quantité")
            else  
            {  
                $.ajax({  
                url:"vendrecprocessing.php",  
                method:"POST",  
                data:$('#vendrec_form').serialize(),  
                success:function(data){  
                        //$('#insert_form')[0].reset();  
                        $('#vendrec_Modal').modal('close');
                        location.reload();                       
                    }  
                });  
            }  
            }); 

});  