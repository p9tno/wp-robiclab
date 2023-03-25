<?php get_header(); ?>


<!-- begin notfound-->
<section class="notfound section bg" id="notfound">
    <div class="container_center">
        <div class="notfound__content">
            <h1 class="first-four">4</h1>
            <div class="cog-wheel1">
                <div class="cog1">
                    <div class="top"></div>
                    <div class="down"></div>
                    <div class="left-top"></div>
                    <div class="left-down"></div>
                    <div class="right-top"></div>
                    <div class="right-down"></div>
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="cog-wheel2">
                <div class="cog2">
                    <div class="top"></div>
                    <div class="down"></div>
                    <div class="left-top"></div>
                    <div class="left-down"></div>
                    <div class="right-top"></div>
                    <div class="right-down"></div>
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <h1 class="second-four">4</h1>
        </div>
        <div class="notfound__text"><span>Такой<br> страницы нет</span></div>
        <div class="notfound__button"><a class="btn" href="<?php echo esc_url(home_url("/")); ?>">Вернуться на главную страницу</a></div>
    </div>
</section>
<!-- end notfound-->


<?php get_footer();