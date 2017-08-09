<header class="site-header">
    <div class="site-branding">
        <?php if ($logo): ?>
        <div class="site-logo">
            <a href="<?php print $front_page; ?>" id="logo" rel="home" title="<?php print t('Home'); ?>">
                <img alt="<?php print t('Home'); ?>" src="<?php print $logo; ?>"/>
            </a>
        </div>
        <?php endif; ?>
        <?php if ($site_name): ?>
        <h1 class="site-name">
            <a href="<?php print $front_page; ?>" rel="home" title="<?php print t('Home'); ?>"></a>
        </h1>
        <?php endif; ?>
    </div>
    <?php if ($main_menu): ?>
    <nav class="site-navigation">
        <?php print render(menu_tree('main-menu', 1)); ?>
    </nav>
    <?php endif; ?>
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