<style>
    .pop_layer{position: fixed; z-index: 10; font-size: 14px;}
    
    .pop_layer img{vertical-align: bottom;}
    .pop_layer .close_box{padding: 5px; background-color: #ddd; color: #333; display: flex; justify-content: space-between; align-items: center;}
    .pop_layer .close_box label{display: inline-block;}
    .pop_layer .close_box a{}

    @media screen and (max-width: 768px){
        .pop_layer{position: fixed; z-index: 10; font-size: 14px; top: 50% !important; left: 50% !important; transform: translate(-50%, -50%); max-width: 320px; max-height: 600px; width: 100%;}
        .pop_layer img{width: 100% !important; height: auto !important;}
    }
</style>
@foreach ($popup as $key => $value)
    
        @php
            $data_chk = 'N';

            if($value->date_status == 'Y' && (substr($value->start_date,0,10) <= date('Y-m-d') && substr($value->end_date,0,10) >= date('Y-m-d'))){
                $data_chk = 'Y';
            }elseif($value->date_status == 'N' || $value->date_status == NULL){
                $data_chk = 'Y';
            }

            switch ($value->position_status) {
                case 'LT':
                    $css_position = 'left: '.$value->position_x.'px; top: '.$value->position_y.'px;';
                    break;
                case 'RT':
                    $css_position = 'right: '.$value->position_x.'px; top: '.$value->position_y.'px;';
                    break;
                case 'LB':
                    $css_position = 'left: '.$value->position_x.'px; bottom: '.$value->position_y.'px;';
                    break;
                case 'RB':
                    $css_position = 'right: '.$value->position_x.'px; bottom: '.$value->position_y.'px;';
                    break;
            }
        @endphp
        @if ($data_chk == 'Y')
        <div class="pop_layer" id="pop_layer{{$value->idx}}" style="{{$css_position}}">
            <div class="pop_img">
                <img src="/storage/app/images/{{$value->real_file_name}}" alt="{{$value->subject}}" style="width: {{$value->img_width}}; height: {{$value->img_height}};">
            </div>
            <div class="close_box">
                <label>
                    <input type="checkbox" name="close_24_pop_layer{{$value->idx}}">
                    24시간동안 보지않기
                </label>
                <a href="#none" onclick="close_pop('pop_layer{{$value->idx}}')">닫기</a>
            </div>
        </div>
        @endif
        
        
@endforeach
<script type="text/javascript">

    function close_pop(id){
        $('#'+id).hide();
        if($('input[name=close_24_'+id+']').is(':checked')){
            setCookie(id, "done", 1);
        }
    }

    function setCookie( name, value, expiredays ) {   
        var todayDate = new Date();   
        todayDate.setDate( todayDate.getDate() + expiredays );   
        document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"   
    }

    function getCookie( name ) {
        var nameOfCookie = name + "=";
        var x = 0;  
        while ( x <= document.cookie.length )  
        {  
            var y = (x+nameOfCookie.length);  
            if ( document.cookie.substring( x, y ) == nameOfCookie ) {  
                if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )  
                    endOfCookie = document.cookie.length;  
                return unescape( document.cookie.substring( y, endOfCookie ) );  
            }  
            x = document.cookie.indexOf( " ", x ) + 1;  
            if ( x == 0 )  
                break;  
        }  
        return "";  
    }

    $('.pop_layer').each(function(idx, el){
        var p_name = $(this).attr('id');
        if(getCookie(p_name) == 'done'){
            $(this).hide();
        }
    });
</script>