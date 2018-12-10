<header class="site-header">
    <div class="site-branding">
        <div class="site-logo">
            <a href="<?php print $front_page; ?>" id="logo" rel="home" title="<?php print t('Home'); ?>">
                <img alt="<?php print t('Home'); ?>" src="<?php print $logo; ?>"/>
            </a>
        </div>
        <?php // Prevent confusion in DTAP streets
              if(!in_array($_SERVER['SERVER_NAME'], array('www.spnet.nl','spnet.nl'))):  ?>
                <div class="dev-name"><?php print $_SERVER['SERVER_NAME']; ?></div>
        <?php endif; ?>
    </div>
    <nav class="site-navigation">
      <ul>
        <li><a href="/form/mijn-gegevens">Persoonlijke gegevens</a></li>
        <li><a href="/mijn/financiele-gegevens">Financiele gegevens</a></li>
        <li><a href="/user/edit">Wachtwoord aanpassen</a></li>

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
