<?php

/**
 *  page--user.tpl.php - beta 2.0
 *  Show a nice clean login box when logging in..
 */

if ( ! user_is_logged_in()): ?>

	<div class="page-wrapper login-page">
      <div class="page">
      <?php include('inc/site-header.php'); ?>

			<main>
				<?php print $messages; ?>

				<div class="primary-content">
					<header class="content-header">
						<h1 class="title">Inloggen op <?php print variable_get('site_name'); ?></h1>
					</header>

					<?php
					if (current_path() == 'user' && module_exists('splogin')):
						$tabs['#primary'][] = array(
							'#theme' => 'menu_local_task',
							'#link'  => array(
								'path'              => 'user/new',
								'href'              => 'user/new',
								'title'             => 'Nieuw account aanmaken',
								'localized_options' => array(),
							)
						);
					endif; ?>

					<?php print render($tabs); ?>
					<?php print render($page['help']); ?>

					<a id="primary-content"></a>
					<?php print render($page['content']); ?>
				</div>

			</main>
			<footer class="site-footer">
				<?php print render($page['footer']); ?>
			</footer>
		</div>
	</div>

<?php else: ?>

	<?php include 'page.tpl.php'; ?>

<?php endif; ?>