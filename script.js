$(document).ready(function(){

    let fileExplorer = function(pathValue){
        $.post(
            "functions.php", 
            {path : pathValue},
            function(data){
                $('#path').html(pathValue);
                $('#fileExplorer').html(data);
                $(".folder").click(function(){
                    let currentPath = $('#path').html();
                    let newPath = currentPath+this.id+"/";
                    $('#path').html(newPath);
                    fileExplorer(newPath);
                })
            }
        )
    }
    fileExplorer("/");
});

// let whatPath = $('#path').val();
//                     $.post(
//                         "functions.php",
//                         { path : newPath},
//                             function(data){
//                             $('#fileExplorer').html(data);
//                             }
//                     )