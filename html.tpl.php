<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php print $language->language; ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php print $language->language; ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php print $language->language; ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php print $language->language; ?>"> <!--<![endif]-->

  <head profile="<?php print $grddl_profile; ?>">
    <meta charset="utf-8"/>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=9"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" href="<?php print base_path() . drupal_get_path('theme', 'piratenkleider'); ?>/apple-touch-icon.png">
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <?php print $styles; ?>
    <?php print $scripts; ?>

  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>

    <script type="text/javascript">
    /* <![CDATA[ */
      var $htmlOnSwitch = '<div class="switchoff"><a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'piratenkleider'); ?>/images/ausblenden.png" width="18" height="18" alt="<?php print t('Leiste ausblenden'); ?>"></a></div>';
      var $htmlOffSwitch = '<div class="switchon" ><a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'piratenkleider'); ?>/images/einblenden.png" width="18" height="18" alt="<?php print t('Leiste anzeigen'); ?>"></a></div>';
    /* ]]> */
    </script>

  </body>

</html>
