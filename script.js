$(document).ready(function(){

    // $.post("functions.php", {
    //     folder : "/"
    // },
    //     function(data){
    //         console.log(data)
    //         $("#fileExplorer").html(data)
    //     })

    $.post(
        "functions.php", 
        { path : "/"},
        function(data){
            $('#main').html(data);
        }
    )

});