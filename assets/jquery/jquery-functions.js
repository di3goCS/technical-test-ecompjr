$(document).ready(function(){
    $(".btn").click(function(){
        if($(".input-box").val() == ""){
            $(".input-box").css("background-color", "red");
        }
    });
 });