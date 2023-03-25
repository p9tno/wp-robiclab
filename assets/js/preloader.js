window.onload = function() {
    // console.log('wonload');
    function preloader() {
        $(()=>{
            setTimeout( () => {
                let p = $('#preloader');
                p.addClass('hide');

                setTimeout( () => {
                    p.remove()
                },1000);

            },1000);
        });
    }
    preloader();
    // setTimeout( ()=> preloader(),15000 )
}