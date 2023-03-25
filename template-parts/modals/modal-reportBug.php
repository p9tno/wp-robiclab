<!-- Begin Modal reportBug-->
<div class="modal fade reportBug" id="reportBug">
    <div class="modal-dialog">
        <div class="modal-content"><a class="modal-close" href="#" data-dismiss="modal"></a>
            <!-- begin form-->
            <div class="form__title"><span>Сообщить об ошибке</span></div>
            <div class="form__subtitle"><span>Раскажите нам подробнее об ошибке и мы её исправим</span></div>
            <form class="form form_grid" action="send.php">
                <input type="hidden" name="subject" value="форма в футоре" />
                <input type="hidden" name="notspam" value="" />
                <div class="form__row">
                    <div class="form__label"><span>Ваше имя*</span></div>
                    <input type="text" required="required" placeholder="Ввведите ваше имя" />
                </div>
                <div class="form__row">
                    <div class="form__label"><span>Телефон*</span></div>
                    <input class="tel" type="text" required="required" placeholder="+7 000 000 000" />
                </div>
                <div class="form__row">
                    <div class="form__label"><span>Ваша почта*</span></div>
                    <input type="email" required="required" placeholder="Ввведите ваш email" />
                </div>
                <div class="form__row form__row_textarea">
                    <div class="form__label"><span>Ваше сообщение</span></div>
                    <textarea type="text" placeholder="Ввведите ваше сообщение"></textarea>
                </div>
                <div class="form__row">
                    <div class="button">
                        <button class="btn" type="submit"><span>Отправить</span></button>
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__text"><span>Нажимая кнопку «Отправить» вы соглашаетесь с обработой ваших
                            персональных данных и принимаете <a href="#">политику конфендициальности</a></span></div>
                </div>
            </form>
            <!-- end form-->
        </div>
    </div>
</div>
<!-- End modal reportBug-->