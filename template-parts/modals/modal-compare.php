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

                                <?php if (get_field('base_sensors_list') || get_field('standard_sensors_list') || get_field('profile_sensors_list')) { ?>
                                    <div class="table__col"><span>Одиночные датчики</span></div>
                                <?php } ?>

                                <?php if (get_field('base_multisensor_list') || get_field('standard_multisensor_list') || get_field('profile_multisensor_list')) { ?>
                                    <div class="table__col"><span>Мультидатчики</span></div>
                                <?php } ?>

                                <?php if (get_field('base_included_list') || get_field('standard_included_list') || get_field('profile_included_list')) { ?>
                                    <div class="table__col"><span>В комплекте</span></div>
                                <?php } ?>


                                <?php if (get_field('base_list') || get_field('standard_list') || get_field('profile_list')) { ?>
                                    <div class="table__col"><span>Дополнительная комплектация</span></div>
                                <?php } ?>

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