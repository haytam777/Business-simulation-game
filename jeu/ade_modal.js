$(document).ready(function(){
    $('#insert_form').on("submit", function(event){  
        
        event.preventDefault();
            if($('#affaire').val() == "")  
            {  
                alert("Affaire à spécifier");  
            }  
                else if($('#depense').val() == '')  
            {  
                alert("Dépense à spécifier");  
            }  
                else if($('#epargne').val() == '')
            {  
                alert("Epargne à spécifier");  
            }
            
            else  
            {  
                a= parseInt($('#affaire').val());
                d =parseInt($('#depense').val());
                e =parseInt($('#epargne').val());
                somme = (a+d+e)
                if(somme > parseInt($('#caisseh').val())){
                    alert("Vous avez dépassée votre caisse");  
                }else{
                    $.ajax({  
                    url:"insert.php",  
                    method:"POST",  
                    data:$('#insert_form').serialize(),  
                    beforeSend:function(){  
                    $('#insert').val("Inserting");  
                    },  
                    success:function(data){  
                            //$('#insert_form')[0].reset();  
                            $('#add_data_Modal').modal('close');
                            location.reload();                       
                        }  
                    });
                }  
            }  
        }); 

});  