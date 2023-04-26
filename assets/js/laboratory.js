
$(document).ready(function() {

    function initLabThermodynamics() {
        let preview1 = bodymovin.loadAnimation({
            container: document.getElementById('preview1'), // Required
            path: '/wp-content/themes/robiclab/assets/json/preview1.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "preview1",
        })
        let preview2 = bodymovin.loadAnimation({
            container: document.getElementById('preview2'), // Required
            path: '/wp-content/themes/robiclab/assets/json/preview2.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            autoplay: false, // Optional
            name: "preview2",
        })
        let preview3 = bodymovin.loadAnimation({
            container: document.getElementById('preview3'), // Required
            path: '/wp-content/themes/robiclab/assets/json/preview3.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            autoplay: false, // Optional
            name: "preview3",
        })
        let preview4 = bodymovin.loadAnimation({
            container: document.getElementById('preview4'), // Required
            path: '/wp-content/themes/robiclab/assets/json/preview4.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            autoplay: false, // Optional
            name: "preview4",
        })
        let preview5 = bodymovin.loadAnimation({
            container: document.getElementById('preview5'), // Required
            path: '/wp-content/themes/robiclab/assets/json/preview5.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            autoplay: false, // Optional
            name: "preview5",
        })
        let preview6 = bodymovin.loadAnimation({
            container: document.getElementById('preview6'), // Required
            path: '/wp-content/themes/robiclab/assets/json/preview6.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            autoplay: false, // Optional
            name: "preview6",
        })
        let preview7 = bodymovin.loadAnimation({
            container: document.getElementById('preview7'), // Required
            path: '/wp-content/themes/robiclab/assets/json/preview7.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            autoplay: false, // Optional
            name: "preview7",
        })
    }
    function initLabMechanics() {
        let mechanics1 = bodymovin.loadAnimation({
            container: document.getElementById('mechanics1'), // Required
            path: '/wp-content/themes/robiclab/assets/json/mechanics/mechanics1.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "mechanics1",
        })
        let mechanics2 = bodymovin.loadAnimation({
            container: document.getElementById('mechanics2'), // Required
            path: '/wp-content/themes/robiclab/assets/json/mechanics/mechanics2.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "mechanics2",
        })
        let mechanics3 = bodymovin.loadAnimation({
            container: document.getElementById('mechanics3'), // Required
            path: '/wp-content/themes/robiclab/assets/json/mechanics/mechanics3.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "mechanics3",
        })
        let mechanics4 = bodymovin.loadAnimation({
            container: document.getElementById('mechanics4'), // Required
            path: '/wp-content/themes/robiclab/assets/json/mechanics/mechanics4.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "mechanics4",
        })
        let mechanics5 = bodymovin.loadAnimation({
            container: document.getElementById('mechanics5'), // Required
            path: '/wp-content/themes/robiclab/assets/json/mechanics/mechanics5.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "mechanics5",
        })
        let mechanics6 = bodymovin.loadAnimation({
            container: document.getElementById('mechanics6'), // Required
            path: '/wp-content/themes/robiclab/assets/json/mechanics/mechanics6.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "mechanics6",
        })
        let mechanics7 = bodymovin.loadAnimation({
            container: document.getElementById('mechanics7'), // Required
            path: '/wp-content/themes/robiclab/assets/json/mechanics/mechanics7.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "mechanics7",
        })
    }
    function initLabElectrodynamics() {
        let electrodynamics1 = bodymovin.loadAnimation({
            container: document.getElementById('electrodynamics1'), // Required
            path: '/wp-content/themes/robiclab/assets/json/electrodynamics/electrodynamics1.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "electrodynamics1",
        })
        let electrodynamics2 = bodymovin.loadAnimation({
            container: document.getElementById('electrodynamics2'), // Required
            path: '/wp-content/themes/robiclab/assets/json/electrodynamics/electrodynamics2.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "electrodynamics2",
        })
        let electrodynamics3 = bodymovin.loadAnimation({
            container: document.getElementById('electrodynamics3'), // Required
            path: '/wp-content/themes/robiclab/assets/json/electrodynamics/electrodynamics3.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "electrodynamics3",
        })
        let electrodynamics4 = bodymovin.loadAnimation({
            container: document.getElementById('electrodynamics4'), // Required
            path: '/wp-content/themes/robiclab/assets/json/electrodynamics/electrodynamics4.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "electrodynamics4",
        })
        let electrodynamics5 = bodymovin.loadAnimation({
            container: document.getElementById('electrodynamics5'), // Required
            path: '/wp-content/themes/robiclab/assets/json/electrodynamics/electrodynamics5.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "electrodynamics5",
        })
        let electrodynamics6 = bodymovin.loadAnimation({
            container: document.getElementById('electrodynamics6'), // Required
            path: '/wp-content/themes/robiclab/assets/json/electrodynamics/electrodynamics6.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "electrodynamics6",
        })
    }
    function initLabOptics() {
        let optics1 = bodymovin.loadAnimation({
            container: document.getElementById('optics1'), // Required
            path: '/wp-content/themes/robiclab/assets/json/optics/optics1.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "optics1",
        })
        let optics2 = bodymovin.loadAnimation({
            container: document.getElementById('optics2'), // Required
            path: '/wp-content/themes/robiclab/assets/json/optics/optics2.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "optics2",
        })
        let optics3 = bodymovin.loadAnimation({
            container: document.getElementById('optics3'), // Required
            path: '/wp-content/themes/robiclab/assets/json/optics/optics3.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "optics3",
        })
        let optics4 = bodymovin.loadAnimation({
            container: document.getElementById('optics4'), // Required
            path: '/wp-content/themes/robiclab/assets/json/optics/optics4.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "optics4",
        })
        let optics5 = bodymovin.loadAnimation({
            container: document.getElementById('optics5'), // Required
            path: '/wp-content/themes/robiclab/assets/json/optics/optics5.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "optics5",
        })
        let optics6 = bodymovin.loadAnimation({
            container: document.getElementById('optics6'), // Required
            path: '/wp-content/themes/robiclab/assets/json/optics/optics6.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "optics6",
        })
    }
    function initLabQuantum() {
        let quantum1 = bodymovin.loadAnimation({
            container: document.getElementById('quantum1'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum1.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum1",
        })
        let quantum2 = bodymovin.loadAnimation({
            container: document.getElementById('quantum2'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum2.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum2",
        })
        let quantum3 = bodymovin.loadAnimation({
            container: document.getElementById('quantum3'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum3.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum3",
        })
        let quantum4 = bodymovin.loadAnimation({
            container: document.getElementById('quantum4'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum4.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum4",
        })
        let quantum5 = bodymovin.loadAnimation({
            container: document.getElementById('quantum5'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum5.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum5",
        })
        let quantum6 = bodymovin.loadAnimation({
            container: document.getElementById('quantum6'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum6.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum6",
        })
        let quantum7 = bodymovin.loadAnimation({
            container: document.getElementById('quantum7'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum7.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum7",
        })
        let quantum8 = bodymovin.loadAnimation({
            container: document.getElementById('quantum8'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum8.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum8",
        })
        let quantum9 = bodymovin.loadAnimation({
            container: document.getElementById('quantum9'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum9.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum9",
        })
        let quantum10 = bodymovin.loadAnimation({
            container: document.getElementById('quantum10'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum10.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum10",
        })
        let quantum11 = bodymovin.loadAnimation({
            container: document.getElementById('quantum11'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum11.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum11",
        })
        let quantum12 = bodymovin.loadAnimation({
            container: document.getElementById('quantum12'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum12.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum12",
        })
        let quantum13 = bodymovin.loadAnimation({
            container: document.getElementById('quantum13'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum13.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum13",
        })
        let quantum14 = bodymovin.loadAnimation({
            container: document.getElementById('quantum14'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum14.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum14",
        })
        let quantum15 = bodymovin.loadAnimation({
            container: document.getElementById('quantum15'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum15.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum15",
        })
        let quantum16 = bodymovin.loadAnimation({
            container: document.getElementById('quantum16'), // Required
            path: '/wp-content/themes/robiclab/assets/json/quantum/quantum16.json', // Required
            renderer: 'svg', // Required
            loop: false, // Optional
            // autoplay: false, // Optional
            autoplay: false, // Optional
            name: "quantum16",
        })
    }

    let = nameLab = $('#example').attr('data-example');

    if (nameLab == 'thermodynamics') {
        initLabThermodynamics();
    } else if (nameLab == 'electrodynamics') {
        initLabElectrodynamics();
    } else if (nameLab == 'optics') {
        initLabOptics();
    } else if (nameLab == 'quantum') {
        initLabQuantum();
    } else if (nameLab == 'mechanics') {
        initLabMechanics();
    }

    let total = 0;

    $('.laboratory__page').each(function(indexInArray, valueOfElement) {
        let questionBlock = indexInArray + 1
        $(this).attr('data-p', questionBlock);
        total = total + 1;
        $('.laboratory__step_total').text(total);
    });

    let lineStep = 100 / total;
    let line;
    let pageNumber = 1;

    $('.laboratory__arrow_next').click(function() {

        $('.laboratory__arrow_prew').css('display', 'flex');

        if (pageNumber < total) {
            pageNumber++;
            changeActivePage();
            playLottie();
            lineWidth();
            changeButtonNext();
        }
    });

    $('.laboratory__arrow_prew').click(function() {
        if (pageNumber > 2) {
            pageNumber--;

            changeActivePage();
            changeButtonNext();


        } else if (pageNumber == 2) {
            pageNumber--;
            changeActivePage();
            $('.laboratory__arrow_prew').hide();
        }
        playLottie();
        lineWidth()
    });

    function changeActivePage() {
        $('.laboratory__page.active').hide();
        $('.laboratory__page.active').removeClass('active');
        $('.laboratory__page[data-p=' + pageNumber + ']').fadeIn('slow')
        $('.laboratory__page[data-p=' + pageNumber + ']').addClass('active');
    }


    function lineWidth() {
        $('.laboratory__step_current').text(pageNumber);
        line = lineStep * (pageNumber);
        line = 'calc(' + line + '% )';
        $('.laboratory__line_bg').css('width', line)
    }

    function playLottie() {
        let id = $('.laboratory__page[data-p=' + pageNumber + ']').find('.preview').attr('id');
        // console.log(id);
        lottie.stop();
        setTimeout(() => {
            lottie.play(id);
        }, 500);
    }

    function changeButtonNext() {
        if (pageNumber == total) {
            $('.laboratory__arrow_next').removeClass('active');
        } else {
            $('.laboratory__arrow_next').addClass('active')
        }
    }


});
