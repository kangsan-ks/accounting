$(function(){

    $('a.nav-link').click(function(){
        // console.log($(this).siblings());
        $(this).siblings().slideToggle();
    });

    $('a.nav-link.on.active').each(function(){
        $(this).siblings().slideToggle();
    });

    //리스트 체크박스 전체 toggle
    $('#all_check').click(function(){

        var input_chk = $(this).is(':checked');
        var child_input = $('input[name="list_idx_arr[]"]');
        if(input_chk == true){
            child_input.prop('checked', true);
        }else{
            child_input.prop('checked', false);
        }

    });

});