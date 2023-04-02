<?php if ( 
    
    is_page_template(['template-laboratory.php']) ||
    is_page_template(['template-helpcenter.php']) 

) { ?>
    <ul class="figure__list">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li class="desktop"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li class="desktop"></li>
    </ul>
<?php } else { ?>
    <ul class="figure__list desktop">
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
<?php } ?>
