<div class="navbar__bottom">
    <div class="container_center">
        <div class="navbar__row">
            <div class="navbar__links">
                
                <span>© ООО"робиклаб" 2011 - <script type="text/javascript">document.write(new Date().getFullYear());</script> Все права защищены.</span>

                <?php if (get_field('boolean_footer_policy', 'option')) { ?>
                    <a class="show_js" href="#policy">Политика конфиденциальности</a>
                <?php } ?>

                <?php if (get_field('footer_link_map', 'option')) { ?>
                    <?php 
                    $link = get_field('footer_link_map', 'option');
                    $title = $link['title'];
                    $url = $link['url'];
                    $target = $link['target'];
                    ?>
                
                    <a href="<?php echo $url; ?>"  <?php if ($target) { echo 'target="_blank"'; } ?> ><?php echo $title; ?></a>

                <?php } ?>

                <?php if (get_field('boolean_footer_links', 'option')) { ?>
                    <a class="show_js" href="#reportBug">Сообщить об ошибке</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
