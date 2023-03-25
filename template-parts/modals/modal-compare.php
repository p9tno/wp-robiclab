<!-- Begin Modal compare-->
<div class="modal fade compare" id="compare">
    <div class="modal-dialog">
        <div class="modal-content"><a class="modal-close" href="#" data-dismiss="modal"></a>

            <?php if (get_field('compare_modal_title')) { ?>
                <div class="modal-title"><span><?php the_field('compare_modal_title'); ?></span></div>
            <?php } ?>

            <div class="modal-body">
                <div class="modal-table">

                    <div class="table">

                        <div class="table__head">
                            <div class="table__row">
                                <div class="table__col"><span>Комплектация</span></div>
                                <div class="table__col"><span>Набор цифровых датчиков</span></div>
                                <div class="table__col"><span>В комплекте</span></div>
                                <div class="table__col"><span>Дополнительная комплектация</span></div>
                            </div>
                        </div>

                        <div class="table__body">
                            <?php include 'row/base.php'; ?>
                            <?php include 'row/standard.php'; ?>
                            <?php include 'row/profile.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-button"><a class="btn" href="#" data-dismiss="modal">Закрыть</a></div>
        </div>
    </div>
</div>
<!-- End modal compare-->