$(document).ready(function(){
    $('#banque_form').on("submit", function(event){  
        
        event.preventDefault();
            if($('#retirera').val() == "")  
            {  
                alert("Affaire à spécifier");  
            }  
                else if($('#retirerd').val() == '')  
            {  
                alert("Dépense à spécifier");  
            }  
                else if($('#ajoutere').val() == '')
            {  
                alert("Epargne à spécifier");  
            }
            
            else  
            {  
                a= parseInt($('#retirera').val());
                d =parseInt($('#retirerd').val());
                e =parseInt($('#ajoutere').val());
                somme = a + d - e;
                if(somme != 0){
                    alert("Veuillez balancer la somme");  
                }else{
                    $.ajax({  
                    url:"banqueprocessing.php",
                    method:"POST",  
                    data:$('#banque_form').serialize(),  
                    beforeSend:function(){  
                    $('#insertb').val("Inserting");  
                    },  
                    success:function(data){  
                            //$('#insert_form')[0].reset();  
                            $('#banque_form').modal('close');
                            //location.reload();                       
                        }  
                    });
                }  
            }  
        }); 

});  