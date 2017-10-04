<header class="site-header">
    <div class="site-branding">
        <div class="site-logo">
            <a href="<?php print $front_page; ?>" id="logo" rel="home" title="<?php print t('Home'); ?>">
                <?php include('logo-svg.php'); ?>
            </a>
        </div>
        <?php // Warning signal to prevent confusion in DTAP streets
              if(!in_array($_SERVER['SERVER_NAME'], array('www.spnet.nl','spnet.nl'))):  ?>
                <div class="dev-name"><?php print $_SERVER['SERVER_NAME']; ?></div>
        <?php endif; ?>
    </div>
    <nav class="site-navigation">
      <?php print render(menu_tree('main-menu', 1)); ?>
    </nav>
    <div class="search-toggle">
        <?php if ($page['search']): ?>
        <a class="button btn-search" href="#search">
            <span class="text">
                <?php print t('Search'); ?>
            </span>
        </a>
        <?php endif; ?>
    </div>
</header>
