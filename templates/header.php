<header class="banner">
  <div class="row">
    <div class="columns text-center">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <a class="hambi" data-open="floatingside">Jump To</a>
      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
