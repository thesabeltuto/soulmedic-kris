<?php
function call_soulmedic_kris() { ?>
        </div>
        <div id="home_widget" class="column dt-sc-one-fourth">
            <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(('home-page-area-sidebar')) ): endif; ?>
        </div>
    </div>
    <div class="home_wrap_full">
        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(('home-page-area-full-sidebar')) ): endif; ?>
    </div>
<?php } 
?>