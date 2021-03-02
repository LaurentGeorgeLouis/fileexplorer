$(document).ready(function(){
    // let getURL = window.location
    // console.log(getURL);
    $.post("functions.php", {
        folder : "/"
    },
        function(data){
            console.log(data)
            $("#fileExplorer").html(data)
        })
});