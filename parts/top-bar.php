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
      </ul>
      <div class="logo">
        <a href="http://zurb.com/stickers/images/intro-foundation.png"><img src="http://zurb.com/stickers/images/intro-foundation.png" /></a>
      </div>
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="center-buttons">
            <?php foundationpress_top_bar_l(); ?>
        </ul>
      </section>
    </nav>
</div>
