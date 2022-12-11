<div class="colored_line">
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
</div>
<footer class="site_footer <?php if(empty(ale_get_option('footer_info')) && empty(ale_get_option('footer_info')) && empty(ale_get_option('footer_navigation_title')) && empty(ale_get_option('footer_contacts_title'))){ echo 'no_content'; } ?>">
    
    <div class="alekids_footer_ic1"></div>
    <div class="alekids_footer_ic2"></div>
    <div class="alekids_footer_ic3"></div>
    <div class="alekids_footer_ic4"></div>
    <div class="alekids_footer_ic5"></div>
    <div class="alekids_footer_ic6"></div>
    <div class="alekids_footer_ic"></div>

    <div class="wrapper top_line">
        <?php if(!empty(ale_get_option('footer_info'))){ ?>
            <div class="info_box">
                <div class="inner_footer_widget">
                <a href="<?php echo esc_url(home_url("/")); ?>">
                    <?php if(ale_get_option('footerlogo')){?>
                        <img src="<?php echo esc_url(ale_get_option('footerlogo')); ?>" <?php if(!empty(ale_get_option('footerlogoretina'))){ ?>srcset="<?php echo esc_url(ale_get_option('footerlogoretina')); ?> 2x"<?php } ?> alt="<?php esc_attr_e('logo','alekids'); ?>" />
                    <?php } ?>
                </a>

                <?php if(ale_get_option('footer_info')){ ?><div class="footer_info"><?php echo wp_kses_post(ale_get_option('footer_info')); ?></div><?php } ?>
                </div>
            </div>
        <?php } 
        
        if(!empty(ale_get_option('footer_openning_title'))){ ?>
            <div class="openning_box">
                <div class="inner_footer_widget">
                <?php if(ale_get_option('footer_openning_title')){ ?><h4><?php echo esc_html(ale_get_option('footer_openning_title')); ?></h4><?php } ?>
                <?php if(ale_get_option('footer_openning_info')){ ?><div class="footer_openning_info"><?php echo wp_kses_post(ale_get_option('footer_openning_info')); ?></div><?php } ?>
                </div>
            </div>
        <?php }
        
        if(!empty(ale_get_option('footer_navigation_title'))){ ?>
            <div class="navigation_box">
                <div class="inner_footer_widget">
                <?php if(ale_get_option('footer_navigation_title')){ ?><h4><?php echo esc_html(ale_get_option('footer_navigation_title')); ?></h4><?php } ?>
                <nav>
                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) { 
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu_class'	=> 'menu footer-menu',
                            'container'		=> '',
                        ));
                    } ?>
                </nav>
                </div>
            </div>
        <?php } if(!empty(ale_get_option('footer_contacts_title'))){ ?>
            <div class="contact_box">
                <div class="inner_footer_widget">
                <?php if(ale_get_option('footer_contacts_title')){ ?><h4><?php echo esc_html(ale_get_option('footer_contacts_title')); ?></h4><?php } ?>
                
                <?php if(ale_get_option('footer_address')){?>
                    <div class="alekids_address">
                        <?php echo esc_html(ale_get_option('footer_address')); ?>
                    </div>
                <?php } ?>
                <?php if(ale_get_option('footer_phone1') or ale_get_option('footer_phone1')){?>
                    <div class="alekids_phone">
                        <?php if(ale_get_option('footer_phone1')) { echo '<strong>' . esc_html(ale_get_option('footer_phone1')) . '</strong>'; } ?>
                        <?php if(ale_get_option('footer_phone2')) { echo '<strong>' . esc_html(ale_get_option('footer_phone2')) . '</strong>'; } ?>
                    </div>
                <?php } ?>
                <?php if(ale_get_option('footer_email')){?>
                    <div class="alekids_email">
                        <a href="mailto:<?php echo esc_html(ale_get_option('footer_email')); ?>"><?php echo esc_html(ale_get_option('footer_email')); ?></a>
                    </div>
                <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="scroll_top_line">
        <div class="scroll_top_container">
            <a href="#" class="alekids_button alekids_scroll_top">
                <div class="container">
                    <span><?php esc_html_e('Scroll to Top','alekids'); ?></span>
                    <svg class="alekids_dashed"><rect x="5px" y="5px" rx="26px" ry="26px" width="0" height="0"></rect></svg>
                </div>
            </a>
        </div>
    </div>

    <div class="wrapper bottom_line">
        <?php if(ale_get_option('copyrights')){ ?><div class="copyrights"><?php echo wp_kses_post(ale_get_option('copyrights')); ?></div><?php } ?>
        
        <div class="social">
            <?php get_template_part('partials/social_profiles'); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>