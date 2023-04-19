<!-- Begin Modal bargain-->
<div class="modal fade bargain" id="bargain">
    <div class="modal-dialog">
        <div class="modal-content"><a class="modal-close" href="#" data-dismiss="modal"></a>
            <!-- begin form-->
            <?php if (get_field('bargain_modal_title')) { ?>
                <div class="form__title"><span><?php the_field('bargain_modal_title'); ?></span></div>
            <?php } ?>

            <div class="form__subtitle"><span>Для заказа оборудования заполните форму обратной связи, и мы ответим Вам в
                    кратчайшее время. Наши специалисты помогут в оформлении заказа и, если необходимо, окажут помощь в
                    составлении аукционной (тендерной) документации.</span>
            </div>



            <form class="form form_grid2" action="<?php echo get_template_directory_uri() . '/send.php'; ?>">

                <?php if (get_field('bargain_modal_title')) { ?>
                    <input type="hidden" name="subject" value="<?php the_field('bargain_modal_title'); ?>" />
                <?php } ?>
                <input type="hidden" name="page" value="<?php echo home_url( $wp->request ) ?>" />
                <input type="hidden" name="notspam" value="" />

                <div class="form__row">
                    <div class="form__label"><span>Ваше имя*</span></div>
                    <input type="text" name="name" required="required" placeholder="Введите ваше имя" />
                </div>
                <div class="form__row">
                    <div class="form__label"><span>Телефон*</span></div>
                    <input class="tel" type="text" name="tel" required="required" placeholder="+7 000 000 000" />
                </div>
                <div class="form__row">
                    <div class="form__label"><span>Ваша почта*</span></div>
                    <input type="email" name="email" required="required" placeholder="Введите ваш email" />
                </div>
                <div class="form__row">
                    <div class="button">
                        <button class="btn" type="submit"><span>Отправить</span></button>
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__text">
                        <span>Нажимая кнопку "Отправить" Вы соглашаетесь с обработкой Ваших персональных данных и принимаете <a class="show_js" href="#policy">политику конфиденциальности.</a></span>
                    </div>
                </div>
            </form>
            <!-- end form-->
        </div>
    </div>
</div>
<!-- End modal bargain-->