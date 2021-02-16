$(function(){
    $('a.nav-link').click(function(){
        console.log($(this).siblings());
        $(this).siblings().slideToggle();
    });
});