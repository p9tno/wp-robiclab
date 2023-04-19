window.onload = function() {
    // console.log('wonload');
    function preloader() {
        $(()=>{
            setTimeout( () => {
                let p = $('#preloader');
                p.addClass('hide');
                // console.log('hide');

                setTimeout( () => {
                    p.remove()
                },1000);

            },1000);
        });
    }
    // preloader();
    // setTimeout( ()=> preloader(),15000 );
}


$(document).ready(function() {
    function preloader() {
        $(()=>{
            setTimeout( () => {
                let p = $('#preloader');
                p.addClass('hide');
                // console.log('hide');

                setTimeout( () => {
                    p.remove()
                },1000);

            },1000);
        });
    }
    preloader();
});