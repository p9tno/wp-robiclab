$(document).ready(function() {

    //Запуск фильтра
    $(".filter_list_js :radio").click(function() {
        // console.log('radio change');
        my_filter_get_posts();
    });

    $(document).on("click",".page-numbers",function(e){
        e.preventDefault();
        let top = $('#experiments').offset().top;
        $('body,html').animate({scrollTop: top}, 700);

        var url = $(this).attr('href'); //Grab the URL destination as a string
        var paged = url.split('&paged='); //Split the string at the occurance of &paged=

        if(~url.indexOf('&paged=')){
            paged = url.split('&paged=');
        } else {
            paged = url.split('/page/');
        }

        my_filter_get_posts(paged[1]); //Load Posts (feed in paged value)
    });


    //Получаем данные
    function getLab()
    {
        let lab = []; //Setup empty array

        $(".filter-video-lab-js input:checked").each(function() {
            let val = $(this).val();
            lab.push(val); //Push value onto array
        });
       
        // console.log(lab);
        return lab; //Return all of the selected genres in an array
    }
  
    function my_filter_get_posts(paged)
    {
        // console.log('get_posts');
        var paged_value = paged; //Store the paged value if it's being sent through when the function is called
        let ajax_url = '/wp-admin/admin-ajax.php';

        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'my_custom_filter',
                lab: getLab,
                paged: paged_value, //If paged value is being sent through with function call, store here
            },

            beforeSend: function ()
            {
                initPreloder();
                // console.log('init loader');
            },
            complete: function(){
                destroyPreloder();
                // console.log('destroy loader');
            },
            success: function(data)
            {
                $('.experiments__grid').html(data);
                showModal();
                // console.log(data);

            },
            error: function()
            {
                $(".portfolio__grid").html('<p>There has been an error</p>');
            }
        });
    }




    function initPreloder() {
        $('.preloaderFilter-js').show();
    }

    function destroyPreloder() {
        setTimeout( () => {
            $('.preloaderFilter-js').hide();
        },1200);
    }

    function showModal() {
        if ( $( ".videoModal_js" ) ) {

            $( '.videoModal_js' ).on( 'click', function () {
                $('#modalVideo').modal('show');
                console.log('click');

                let src = $(this).attr('data-src');
                console.log(src);


                // https://videojs.com/
                let video = $(`<video id="my-video" class="video-js" autoplay controls preload="auto"><source src="${src}" type="video/mp4" /></video>`)

                $(".modalVideo__wraper").append(video);

                $("#modalVideo").on('hide.bs.modal', function () {
                    $(".modalVideo__wraper").html('');
                });

            } );
        }
    }
    showModal();

});

