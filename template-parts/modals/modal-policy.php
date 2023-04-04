<!-- Begin Modal policy-->
<div class="modal fade policy" id="policy">
    <div class="modal-dialog">
        <div class="modal-content"><a class="modal-close" href="#" data-dismiss="modal"></a>
            <?php if (get_field('privacy_title', 'option')) { ?>
                <div class="modal-title"><span><?php the_field('privacy_title', 'option'); ?></span></div>
            <?php } ?>
            <?php if (get_field('privacy_content', 'option')) { ?>
                <div class="modal-body"><?php the_field('privacy_content', 'option'); ?></div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- End modal policy-->