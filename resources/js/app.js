require('./bootstrap');

$(document).ready(function(){
    $(".theme_btn").on("click", function(){

        if ($("body").attr("class") == "mode-dark") {
            $("body").attr("class", "mode-light");
        }else{
            $("body").attr("class", "mode-dark");
        }

    });
  });

