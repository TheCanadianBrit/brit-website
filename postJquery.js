$(document).ready(function() {
    $("#sub").click(function(){
        var name=$("#name").val();
    });
    $.post("addUser.php",{postname:name}),function(data,status){$("#result").html(data);
        
    };
});
