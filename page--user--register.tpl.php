<div id="auth_box" class="register">
  <div id="top_part">
  </div>

  <div id="middle_part">
    <img src="<?php print $logo; ?>" alt='<?php print $site_name; ?>'>
    <h2 class="title"><?php print $title; ?></h2>

    <?php print $messages; ?>
    
    <?php print render($page['content']); ?>

    <div class="login_link">
      <?php print l(t('Login'), 'user/login'); ?>
    </div>

    <div class="password_link">
      <?php print l('Passwort vergessen?', 'user/password'); ?>
    </div>
  </div>

  <div id="bottom_part">
  </div>
</div>
