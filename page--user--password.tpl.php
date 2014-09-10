<div id="auth_box" class="password">
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

    <?php if (variable_get('user_register')): ?>
    <div class="register_link">
      <?php print l('Registrieren', 'user/register'); ?>
    </div>
    <?php endif; ?>  </div>

  <div id="bottom_part">
  </div>
</div>
