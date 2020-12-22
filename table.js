$(document).ready(function() {
    var selValue=$("[type='radio']:checked").val();
        switch(selValue) {
            case "5.45x39":
                $('#545').show();
                $('#545').siblings().hide();
 
                break;
            case "5.56x45":
                $('#556').show();
                $('#556').siblings().hide();
                break;
            case "7.62x39":
                $('#762').show();
                $('#762').siblings().hide();
                break;
            case "12GuageSlug":
                $('#12GuageSlug').show();
                $('#12GuageSlug').siblings().hide();
                break;
            case "9x19":
                $('#919').show();
                $('#919').siblings().hide();
                break;
        }
    
    
    $('#myForm').on('change',function (){
        var selValue=$("[type='radio']:checked").val();
        switch(selValue) {
            case "5.45x39":
                $('#545').show();
                $('#545').siblings().hide();
 
                break;
            case "5.56x45":
                $('#556').show();
                $('#556').siblings().hide();
                break;
            case "7.62x39":
                $('#762').show();
                $('#762').siblings().hide();
                break;
            case "12GuageSlug":
                $('#12GuageSlug').show();
                $('#12GuageSlug').siblings().hide();
                break;
            case "9x19":
                $('#919').show();
                $('#919').siblings().hide();
                break;
        }
    });
});