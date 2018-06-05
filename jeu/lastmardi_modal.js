$(document).ready(function(){
    $('#lastmardi_form').on("submit", function(event){  
        event.preventDefault();  
                $.ajax({  
                url:"lastmardiprocessing.php",  
                method:"POST",  
                data:$('#lastmardi_form').serialize(),  
                success:function(data){  
                        //$('#insert_form')[0].reset();  
                        $('#lastmardi_Modal').modal('close');
                        location.reload();                       
                    }  
                });   
            }); 

});  