<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 */
?>

<div class="off-canvas-content" data-off-canvas-content>
    <header class="header" role="banner">
        <div class="grid-container fluid mw1400">
            <div class="grid-x align-middle top-bar">
                <div class="medium-6 show-for-medium cell ">
                    <a class="header-promo" href="mailto:info@nnabugwulawfirm.com"> <i class="uil uil-envelope-alt"></i> info@nnabugwulawfirm.com </a>
                </div>
                <div class="medium-6 cell text-right">
                    <a href="tel:+1-281-501-1512" class="phone-no"><p class="margin-bottom-0 p-prime"><i class="uil uil-mobile-android"></i> (281) 501-1512</p></a>
                </div>
            </div>
            <div class="grid-x align-middle header-bar">
                <div class="large-2 medium-6 small-8 cell">
                    <a href="/" >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/logo-lateral.svg" width="150" alt="Nnabugwu Law Firm"/>
                    </a>
                </div>
                <div class="large-10 medium-6 small-4 cell flex-container align-right align-middle">
                    <?php
                        wp_nav_menu(
                                array(
                                        'theme_location' => 'main-menu',
                                        'container' => '',
                                        'items_wrap' => '<ul class="dropdown menu show-for-large" data-dropdown-menu>%3$s</ul>',
                                        'walker' => new nav_walker(),
                                )
                        )
                    ?>
                    <div class="menu show-for-large">
                        <a href="#" id="cta-nav" class="nav-cta primary button margin-bottom-0 margin-horizontal-1 click-tracker">Free Consultation</a>
                    </div>
                    <div class="padding-horizontal-1">
                        <button class="hamburger hamburger--collapse" type="button" data-toggle="off-canvas" aria-label="Mobile Menu" title="Mobile Menu">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- end .header -->