$(document).ready(function(){
    $('#creerpdt_form').on("submit", function(event){  
        
        event.preventDefault();
            if($('#qtepdt').val() == "")  
            {  
                alert("Quantité à spécifier");  
            }
            else  
            {  
                qte= parseInt($('#qtepdt').val());
                mp = qte*2;
                if(mp > parseInt($('#mp').val())){
                    alert("Vous n'avez pas assez de matière première");  
                }else{
                    $.ajax({  
                    url:"pdtprocessing.php",
                    method:"POST",  
                    data:$('#creerpdt_form').serialize(),  
                    beforeSend:function(){  
                    $('#insertpdt').val("Inserting");  
                    },  
                    success:function(data){  
                            //$('#insert_form')[0].reset();  
                            $('#creerpdt_Modal').modal('close');
                            location.reload();                       
                        }  
                    });
                }  
            }  
        }); 

}); 