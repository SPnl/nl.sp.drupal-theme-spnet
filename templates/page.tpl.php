<?php

/**
 * @file
 * Display a single Drupal page.
 */
?>
<div class="page-wrapper">
    <div class="page">
        <?php 
		include('inc/site-header.php'); 
		if ($page['search']) { 
		  include('inc/site-search.php');
		}?>
        <main>
            <?php if ($page['highlight']): ?>
            <div class="highlight-content">
                <?php print render($page['highlight']); ?>
            </div>
            <?php endif; ?>
            <?php print $messages; ?>
            <div class="main-top-wrapper">
                <?php if ($page['quicklinks_top']): ?>
                <div class="quicklinks-content">
                    <?php print render($page['quicklinks_top']); ?>
                </div>
                <?php endif; ?>
                <?php if ($breadcrumb): ?>
                <nav class="breadcrumb">
                    <?php print $breadcrumb; ?>
                </nav>
                <?php endif; ?>
                <div class="clear">
                </div>
            </div>
            <div class="primary-content">
                <?php if ($title): ?>
                <header class="content-header">
                    <?php print render($title_prefix); ?>
                    <h1 class="title">
                        <?php print $title; ?>
                    </h1>
                    <?php print render($title_suffix); ?>
                </header>
                <?php endif; ?>
                <?php print render($tabs); ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                <ul class="action-links">
                    <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
                <a id="primary-content">
                </a>
                <?php print render($page['content']); ?>
            </div>
            <?php if ($page['secondary']): ?>
            <div class="secondary-content">
                <?php print render($page['secondary']); ?>
            </div>
            <?php endif; ?>
        </main>
        <footer class="site-footer">
            <?php print render($page['footer']); ?>
        </footer>
    </div>
</div>
