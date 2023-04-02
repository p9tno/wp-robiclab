<div class="helpcenter__main">
    <div class="tabs-wrapper">

        <div class="container_center">
            <div class="tabs">
                <?php if (get_field('offline_boolean')) { ?>
                    <div class="tab-masc"><span>Офлайн версия на ПК</span></div>
                <?php } ?>
                <?php if (get_field('onnline_boolean')) { ?>
                    <div class="tab-masc"><span>Онлайн версия на ПК</span></div>
                <?php } ?>
                <?php if (get_field('tablet_and_phone_boolean')) { ?>
                    <div class="tab-masc"><span>Планшет и телефон</span></div>
                <?php } ?>
            </div>
        </div>

        <div class="tabs-content">

            <?php if (get_field('offline_boolean')) { ?>
                <?php include 'offline.php'; ?>
            <?php } ?>

            <?php if (get_field('onnline_boolean')) { ?>
                <?php include 'onnline.php'; ?>
            <?php } ?>

            <?php if (get_field('tablet_and_phone_boolean')) { ?>
                <?php include 'tabletPhone.php'; ?>
            <?php } ?>

        </div>

    </div>
</div>