<div class="search-form__inner">

    <form class="search-form">

        <input 
            class="search-form__input" 
            type="text" 
            placeholder="Введите для поиска"
            value="<?php echo get_search_query() ?>"
            name="s"
            autocomplete="off"
        />
        <!-- <input type="hidden" value="post" name="post_type"> -->

        <!-- <button class="btn_search"><i class="icon_loop"></i></button> -->
        <span class="btn_search"><i class="icon_loop"></i></span>
        <ul class="ajax-search"></ul>

    </form>

</div>




