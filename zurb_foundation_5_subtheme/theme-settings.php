<?php
/**
 * @file
 * Theme settings for Zurb Foundation 5 sub theme
 *
*/

function zurb_foundation_5_subtheme_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['disclaimer01'] = array(
  '#markup' => '<p><strong>' . t('These settings for the subtheme do NOT extend into the parent theme.') . '</strong></p>',
);

$form['zurb_foundation_5_subtheme_sass'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Only load the your-custom.css sub-theme file and remove the parent theme styles.  Use caution:  this setting is for if you are trying to make a smaller download by compiling with Sass'),
    '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_sass', 'zurb_foundation_5_subtheme'),
  );

$form['zurb_foundation_5_subtheme_cdn_css'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> to serve the Zurb Foundation 5 CSS as one minified CSS file.  <br>Uncheck</b> to serve the CSS from your web server.'),
    '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_cdn_css', 'zurb_foundation_5_subtheme'),
  );

$form['zurb_foundation_5_subtheme_js_cdn_all'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Novice mode: <b>Use Cloudflare CDN</b> instead of this website to serve the whole Zurb Foundation 5 JS library as one minified Javascript file. <br>Uncheck</b> for the option to serve the JS files piece by piece.'),
    '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_js_cdn_all', 'zurb_foundation_5_subtheme'),
  );

$form['zurb_foundation_5_subtheme_js_local_all'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Novice mode: serve the whole Zurb Foundation 5 JS library as one minified Javascript file from this server. <br>Uncheck</b> for the option to serve the JS files piece by piece.'),
    '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_js_local_all', 'zurb_foundation_5_subtheme'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['zurb_foundation_5_subtheme_js_cdn_each'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Advanced mode: <b>Use Cloudflare CDN</b> instead of this website to serve the Zurb Foundation 5 JS components piece by piece. <br>Uncheck</b> to not serve these files.'),
    '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_js_cdn_each', 'zurb_foundation_5_subtheme'),
);

$form['zurb_foundation_5_subtheme_js_local_each'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Advanced mode: <b>Use your server</b> instead of a CDN to serve the Zurb Foundation 5 JS components piece by piece. <br>Uncheck</b> to not serve these files.'),
    '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_js_local_each', 'zurb_foundation_5_subtheme'),
);

$form['zurb_foundation_5_subtheme_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script abide.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script1', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script accordion.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script2', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script alert.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script3', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script clearing.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script4', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script5'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdown.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script5', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script6'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script equalizer.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script6', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script7'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script interchange.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script7', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script8'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script joyride.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script8', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script9'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script magellan.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script9', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script10'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script offcanvas.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script10', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_ssubtheme_script11'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script orbit.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_ssubtheme_script11', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script12'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script reveal.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script12', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script13'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script slider.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script13', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script14'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tab.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script14', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script15'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tooltip.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script15', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script16'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script topbar.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script16', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script17'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script17', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script18'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.cookie.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script18', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script19'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script19', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_script20'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script placeholder.js'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_script20', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_juiced_main_background', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_juiced_main_background_blurred', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_juiced_big_statement_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_juiced_big_statement_background', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_juiced_big_statement_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_juiced_big_statement_background_blurred', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a core layout.'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_body_main_background', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_body_main_background_blurred', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the footer area in a core layout.'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_footer_main_background', 'zurb_foundation_5_subtheme'),
    );

$form['zurb_foundation_5_subtheme_footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('zurb_foundation_5_subtheme_footer_main_background_blurred', 'zurb_foundation_5_subtheme'),
    );

}
