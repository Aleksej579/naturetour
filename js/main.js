//selector-----------------------------------------------------
$(document).ready(function(){
    $("#category").attr("disabled", "disabled").css("color", "grey");
    $("#date").attr("disabled", "disabled").css("color", "grey");
    $("#price").attr("disabled", "disabled").css("color", "grey");

    $('#region').click(function(){
        $("#category").removeAttr("disabled").css("color", "#3f3b30");
    });
    $('#category').click(function(){
        $("#date").removeAttr("disabled").css("color", "#3f3b30");
    });
    $('#date').click(function(){
        $("#price").removeAttr("disabled").css("color", "#3f3b30");
    });
});

'use strict';
//loading article--------------------------------------------------
$(document).ready(function() {
    var hash = window.location.hash.substr(1);
    var href = $('nav  li a').each(function(){
        var href = $(this).attr('href');
        if(hash==href.substr(0,href.length-7)){
            var toLoad = hash+'.html article';
            $('#article_insert').load(toLoad)
        }
    });
    $('nav li a').click(function(){
        var toLoad = $(this).attr('href')+'#article_insert';
        $('article').hide('fast',loadContent);
        window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-7);
        function loadContent() {
            $('article').load(toLoad,'',showNewContent())
        }
        function showNewContent() {
            $('article').show('normal',hideLoader());
        }
        function hideLoader() {
            $('#load').fadeOut('normal');
        }
        return false;
    });
});



