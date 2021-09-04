$(document).ready(function() {

    $("#save").click(() => { //$("#save") == document.selectElementById('save')

        let data = $("#addUser").serialize(); //serialize seleciona os inputs e seus valores em String
        
        //Requisição AJAX
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: './../scripts/save.php', //para onde vai apontar
            async: true, 
            data: data,
            success: function(response) { //Sucesso
                location.reload();
            },                                          
            error: function(response) {//Error 
                console.log(response);
            }
        });

    });


    $("a[rel=modal]").click(function(ev) {
        ev.preventDefault();
    
        var id = $(this).attr("href");
    
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
    
        $('#mask').css({'width': larguraTela, 'height': alturaTela});
        $('#mask').fadeIn(1000);
        $('#mask').fadeTo("slow", 0.8);
    
        var left = ($(window).width() / 2) - ($(id).width() / 2);
        var top = ($(window).height() / 2) - ($(id).height() / 2);
    
        $(id).css({'top': top, 'left': left});
        $(id).show();
    });
    
    $("#mask").click(function() {
        $(this).hide();
        $(".window").hide();
    });
    
    $('.close').click(function(ev) {
        ev.preventDefault();
        $("#mask").hide();
        $(".window").hide();
    });

});









