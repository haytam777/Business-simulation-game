$(document).ready(function(){
    $('#creance_form').on("submit", function(event){  
        event.preventDefault();
                $.ajax({  
                url:"creanceprocessing.php",  
                method:"POST",  
                data:$('#creance_form').serialize(),  
                success:function(data){  
                        //$('#insert_form')[0].reset();  
                        $('#creance_Modal').modal('close');
                        //location.reload();                       
                    }  
                });  
            }); 

});  