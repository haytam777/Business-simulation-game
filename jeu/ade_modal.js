$(document).ready(function(){
    $('#insert_form').on("submit", function(event){  
        event.preventDefault();  
            if($('#affaire').val() == "")  
            {  
                alert("Name is required");  
            }  
                else if($('#depense').val() == '')  
            {  
                alert("Address is required");  
            }  
                else if($('#epargne').val() == '')
            {  
                alert("Designation is required");  
            }
            else  
            {  
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
            }); 

});  