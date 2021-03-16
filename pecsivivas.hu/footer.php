<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pecsivivas
 */

?>

<footer id="colophon" class="site-footer">

    <!-- Start Middle Top -->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="f-about single-footer">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/footer-logo.svg" alt="Logo"></a>
                        </div>
                        <p>Some test.</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- First menu column -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <?php if (has_nav_menu('footer-menu-1', 'pecsivivas')) { ?>
                        <h3>
                        <?php $menu = get_menu_by_location('footer-menu-1'); echo $menu->name; ?>
                        </h3>
                        <nav role="navigation">
                        <?php wp_nav_menu(array(
                          'container'       => '',
                          'menu_class'      => 'footer-menu-1',
                          'theme_location'  => 'footer-menu-1')
                        ); 
                        ?>
                        </nav>
                        <?php } ?>
                    </div>
                </div>

                <!-- Second menu column -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <?php if (has_nav_menu('footer-menu-2', 'pecsivivas')) { ?>
                        <h3>
                        <?php $menu = get_menu_by_location('footer-menu-2'); echo $menu->name; ?>
                        </h3>
                        <nav role="navigation">
                        <?php wp_nav_menu(array(
                          'container'       => '',
                          'menu_class'      => 'footer-menu-2',
                          'theme_location'  => 'footer-menu-2')
                        ); 
                        ?>
                        </nav>
                        <?php } ?>
                    </div>
                </div>

                <!-- Third menu column -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <?php if (has_nav_menu('footer-menu-3', 'pecsivivas')) { ?>
                        <h3>
                        <?php $menu = get_menu_by_location('footer-menu-3'); echo $menu->name; ?>
                        </h3>
                        <nav role="navigation">
                        <?php wp_nav_menu(array(
                          'container'       => '',
                          'menu_class'      => 'footer-menu-3',
                          'theme_location'  => 'footer-menu-3')
                        ); 
                        ?>
                        </nav>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Middle -->

    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-12">
                        <div class="left">
                            <p><b>pecsivivas.hu</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
