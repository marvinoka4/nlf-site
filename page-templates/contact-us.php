<?php

// Template Name: Contact Us

get_header(); ?>


    <?php get_template_part('parts/header/page-header');?>


    <div class="grid-container">
        <div class="grid-x grid-padding-x padding-vertical-4">
            <div class="large-6 medium-6 cell">
                <div class="large-12 cell section-title">
                    <h6 class="copper-text">  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/scale_head.svg" alt="little-scale"> We are easy to reach</h6>
                    <h3>Get in Touch</h3>
                </div>
                <p>Nnabugwu Law Firm PLLC are highly professional experts in their legal work! With an impeccable reputation and an impressive breadth of knowledge, we are one of the best! We take your case very seriously and will work very hard to bring you RESULTS!</p>
            </div>

            <div class="large-6 medium-6 cell">
                <div class="grid-x grid-padding-x">
                    <div class="large-6 medium-6 cell align-middle">
                        <div class="primary callout">
                            <h4 class="margin-bottom-1"><img class="margin-right-1" width="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/mobile-phone.svg" alt="Structured Growth">Phone</h4>
                            <a href="tel:+1-281-501-1512" class="phone-no"><p class="p-phone">(281) 501-1512</p></a>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell">
                        <div class="primary callout">
                            <h4 class="margin-bottom-1"><img class="margin-right-1" width="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/fax.svg" alt="Structured Growth"> Fax</h4>
                            <a href="tel:+1-281-783-2998" class="phone-no"><p class="p-phone">(281) 783-2998</p></a>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell">
                        <div class="primary callout">
                            <h4 class="margin-bottom-1"><img class="margin-right-1" width="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/envelope-o.svg" alt="Structured Growth"> Email</h4>
                            <p>info@nnabugwulawfirm.com</p>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell">
                        <div class="primary callout">
                            <h4 class="margin-bottom-1"><img class="margin-right-1" width="30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/building-o.svg" alt="Structured Growth"> Office</h4>
                            <p>9900 Westpark dr suite 305, Houston, TX 77063</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />

    </div>


    <div class="grid-container">
        <div class="grid-x grid-padding-x padding-vertical-4 align-middle">
            <div class="large-6 medium-6 cell">
                <div class="large-12 cell section-title">
                    <h6 class="copper-text">  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/scale_head.svg" alt="little-scale"> You can fill the form to</h6>
                    <h3>Reach Us</h3>
                </div>


                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">

                        <?php get_template_part('parts/content/contact-form');?>

                    </div>
                </div>


            </div>

            <div class="large-6 medium-6 cell">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3464.95285603036!2d-95.53844205852107!3d29.721124833918232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c31e72dc9ccf%3A0x418e7ec87e2646a4!2s9900%20Westpark%20Dr%2C%20Houston%2C%20TX%2077063%2C%20USA!5e0!3m2!1sen!2suk!4v1687544141254!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>


<?php get_footer(); ?>
