<script>
$(document).ready(function(){
    $('#loaders').hide();
    var limit = 5;
    var start = 0;
    var action = 'inactive';
    function load_data(limit,start)
    {
        $.ajax({
            url:"./database/fetch.php",
            method:"POST",
            data:{limit:limit, start:start},
            cache:false,
            success:function(data)
            {
                $('#test').append(data);
                if(data.trim() == ''){
                    action = 'active';
                    $('#loaders').hide();
                }else{
                    $('#loaders').show();
                    action = 'inactive';
                }
            }
        });
    }

    if(action == 'inactive'){
        action = 'active';
        load_data(limit, start);
    }
    $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height() > $("#test").height() && action == 'inactive')
        {
            action = 'active';
            start += limit;
            setTimeout(function(){
                load_data(limit, start);
            },2000);
        }
    });
});

</script>

<script>
$(document).ready(function(){
    $('#loader').hide();
    var page = 1;
    var action = 'inactive';
    function load_data(page)
    {
        $.ajax({
            url:"dev/fetch-donasi.php",
            method:"POST",
            data:{page:page},
            cache:false,
            success:function(data)
            {
                $('#load-data').append(data);
                if(data.trim() == ''){
                    action = 'active';
                    $('#loader').hide();
                }else{
                    $('#loader').show();
                    action = 'inactive';
                }
            }
        });
    }

    if(action == 'inactive'){
        action = 'active';
        load_data(page);
    }
    $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height() > $("#load-data").height() && action == 'inactive')
        {
            action = 'active';
            page += 1;
            setTimeout(function(){
                load_data(page);
            },0);
        }
    });
});


</script>