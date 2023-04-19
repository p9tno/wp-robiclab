<div class="form__content bg figure">

    <ul class="figure__list figure__list_form-grid">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <div class="form__title"><span>Форма обратной связи</span></div>
    <div class="form__subtitle"><span>Заполните форму обратной связи и задайте нам свой вопрос. Наши менеджеры свяжутся с вами в ближайшее время.</span></div>

    <form class="form form_grid" action="<?php echo get_template_directory_uri() . '/send.php'; ?>">
        <input type="hidden" name="subject" value="Форма обратной связи" />
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

        <div class="form__row form__row_textarea">
            <div class="form__label"><span>Ваше сообщение</span></div>
            <textarea type="text" name="message" placeholder="Введите ваше сообщение"></textarea>
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
</div>
