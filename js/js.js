$(document).ready(function() {
    $(".show_lead_form").click(function(){
        $(".contact-overlay").show("fadein");
        $(".overlay").show();
    });
    $(".overlay-close").click(function(){
        $(".contact-overlay").hide("fadein");

    });

    $(".ecp-btn").click(function(){
        $(".ecp_leadgen").show("fadeOut");
        $(".overlay").show();
    });
    $(".ac_popap_close").click(function(){
        $(".ecp_leadgen").hide("fadein");

    });

    $(".top-btn").click(function(){
        $(".ac_popap").show("fadeOut");
        $(".overlay").show();
    });

    $('.ecp-jacarta').click(function() {
        $('.ecp_jacarta').show('fadeIn');
        $(".overlay").show();
    });
    $(".ac_popap_close").click(function(){
        $(".ecp_jacarta").hide("fadein");
        $(".ecp_prolongacia").hide("fadein");
    });
    //no scroll href
    $('.the-feature a').on('click', function(e){
        e.preventDefault();
    });
    $('.ecp-btn').on('click', function(e){
        e.preventDefault();
    });
    $('.show_lead_form').on('click', function(e){
        e.preventDefault();
    });

    $('.overlay').on('click', function(e){
        $(this).hide('fadeIn');
        $(".overlay").hide();
        e.preventDefault();
    });

    //universal close
    $('.ac_popap_close').on('click', function(e){
        $('.ac_popap_close').parent().hide('fadeIn');
        $(".overlay").hide();
        e.preventDefault();
    });

//* Как сделать ссылку на всплывашку (обяазтельно display) https://astralm.ru/esignature/#etsp *//
        if(location.hash == '#top-btn')
        $('#exit_content').show();
        if(location.hash == '#prolongacia')
        $('.ecp_prolongacia').show();
        if(location.hash == '#ecp-btn')
        $('.ecp_leadgen').show();




    var $teamClone = $("#team_grid").clone();
    $(".filter a").click(function(e){
        $(".filter li").removeClass("current");

        var $filterClass = $(this).parent().attr("class");

        if ($filterClass == "all") {
            var $filteredTeam = $teamClone.find("li");
        } else {
            var $filteredTeam = $teamClone.find("li[data-type~="+$filterClass+"]");
        }

        $("#team_grid").quicksand( $filteredTeam, {
            easing: "easeOutSine",
            adjustHeight: "dynamic",
            duration: 500,
            useScaling: true
        });

        $(this).parent().addClass("current");

        e.preventDefault();
    });
    $(".type_news").click(function(){
        $('.type_news').removeClass('active');
        $(this).addClass('active');
    });
    $(".filter a").click(function(){
        $('.filter a').removeClass('active');
        $(this).addClass('active');
    });

    $( ".ecp-opisanie" ).on( "click",function() {
        if ($(this).find(".hide").css("display") != "block")
        {
            $(".hide").hide("slow");
            $(this).find(".hide").show("slow");
        }
        else {
            $(".hide").hide("slow");
        }
    });


        $(".fz").click(function(e) {
            $(".fz-span-zag").toggle("slow");
            $(".fz-text").toggle();

        });
    $(".centegory_news").click(function(){
        $('.centegory_news').removeClass('active');
        $(this).addClass('active');
    });
    $(".about_cat").click(function(){
        $('.about_cat').removeClass('active_about');
        $(this).addClass('active_about');
    });
    $(".vacancy").click(function(){
        $(".vacancy_hide").toggle("fadeOut");
    });
    $('a[data-desc]').on('click',
        function(e){
            e.preventDefault();
            var desc = $(this).attr('data-desc');
            $('.otzv_modal').fadeIn(150);
            $('.modal_content p').html(desc);
        }
    );
    $('.overlay-close').on('click',
        function(){
            $('.otzv_modal').fadeOut(150);
        }
    );



    //fixed menu при прокрутке
    var $menu = $("#menu");
    $(window).scroll(function(){
        if ( $(this).scrollTop() > 100 && $menu.hasClass("navbar") ){
            $menu.removeClass("navbar").addClass("fixed-menu");
        } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed-menu")) {
            $menu.removeClass("fixed-menu").addClass("navbar");
        }
    });//scroll



//fixed arrow при прокрутке

    var $arrow = $("#arrow_up");
    $(window).scroll(function(){
        if ( $(this).scrollTop() > 200 && $arrow.hasClass("arrow_up_fix_none") ){
            $arrow.removeClass("arrow_up_fix_none").addClass("arrow_up_fix_block");
        } else if($(this).scrollTop() <= 200 && $arrow.hasClass("arrow_up_fix_block")) {
            $arrow.removeClass("arrow_up_fix_block").addClass("arrow_up_fix_none");
        }
    });
    $('#arrow_up').click(function() {
        $('html, body').animate({scrollTop: 0},500);
        return false;
    })



    //СЧЕТЧИК НА ГЛАВНОЙ
    $.Tween.propHooks.number = {
        get: function ( tween ){
            var num = tween.elem.innerHTML.replace(/^[^\d-]+/, '');
            return  parseFloat(num) || 0;
        },

        set: function( tween ) {
            var opts = tween.options;
            tween.elem.innerHTML = (opts.prefix || '')
                + tween.now.toFixed(opts.fixed || 0)
                + (opts.postfix || '');
        }
    };

    $('#num1')
        .animate({ number: 550000 }, {
            duration: 5000
        });
    $('#num2')
        .animate({ number: 3500 }, {
            duration: 5000
        });
    $('#num3')
        .animate({ number: 10 }, {
            duration: 5000
        });
    $('#num4')
        .animate({ number: 85 }, {
            duration: 5000
        });


    $('#exit_content').submit(function(e){
        $('.sendok').show('fadeOut');
        $('#exit_content').hide('fadeIn');
        $("#exit_content").trigger('reset');//id_form - ID вашей формы
    });
    //senk ok после отправки
    $('form').submit(function(e){
        var f = $(this).attr("name") ;
        if ( f === "search" || f === "REPLIERZZUp" ){

        } else {
            $('.sendok').show('fadeOut');
            $(this).closest('.overlay-scale').hide('fadeIn');
            $(this).trigger('reset');
        }
    });
    $('#h-search-form').submit(function(e){
        $('.sendok').hide();
    });
    $('#leadgen').submit(function(e){
        $('.ecp_leadgen').hide();
    });

    // menu mobile (ECP)
    $('.open_menu').click(function(){
        $('.open_menu').hide('slow');
        $('#aside-ecp').show('slow');
        var x = $('#aside-ecp').css('display');
        if (x === 'block') {
            $('.open_menu').addClass('block_menu');
        }
        if ( screen.width >= '768') {
            $('.open_menu').hasClass('block_menu').css('display','none');
        }
    });
    $('form').submit(function(e){
        var f = $(this).attr("name") ;
        if ( f === "sout" ){
            $('.sendok').show('fadeOut');
        }
    });



});



