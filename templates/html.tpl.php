<?php

/**
 * @file
 * Basic html structure of a page.
 */
?><!doctype html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="nl-NL"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="nl-NL"> <!--<![endif]-->
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <nav class="skip-link invisible">
      <a href="#primary-content"><?php print t('Skip to content'); ?></a>
    </nav>
    <!--[if lt IE 9]>
      <p class="browser-upgrade">Je gebruikt <strong>oude browser</strong>. Dat is niet veilig. Op <a href="http://browsehappy.com/">browsehappy.com</a> vind je veilige en moderne browsers.</p>
    <![endif]-->
    <?php print $page_top; ?>
    <div class="page-wrapper">
      <?php print $page; ?>
    </div>
    <?php print $page_bottom; ?>
  </body>
</html>
