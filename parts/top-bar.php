<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="top-bar-container contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        
        <?php if( get_theme_mod( 'basement_logo') ) : ?>
        <div class="logo">
            <a href='/'>
            <img src='<?php echo esc_url( get_theme_mod( 'basement_logo' ) ); ?> 'alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
            </a>
        </div>
        <?php else: ?>
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
        <?php endif; ?>
        
      </ul>
  
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="center-buttons">
            <?php foundationpress_top_bar_l(); ?>
        </ul>
      </section>
    </nav>
</div>
