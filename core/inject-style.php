<?php
namespace MyLogin;
defined('WPINC') || die;


function inject_style() {
  $mylogin_settngs = get_option('mylogin_settngs');

  $background_color = $mylogin_settngs['background_color'];
  $color = $mylogin_settngs['color'];
  $logo = (!empty($mylogin_settngs['logo']) ? $mylogin_settngs['logo'] : get_bloginfo('url').'/wp-admin/images/wordpress-logo.svg');
  $logo_width = (!empty($mylogin_settngs['logo_width']) ? $mylogin_settngs['logo_width'].'px' : 'auto');
  $logo_height = (!empty($mylogin_settngs['logo_height']) ? $mylogin_settngs['logo_height'].'px' : 'auto');

$style = <<<CODE
  <style>
    body.login {
      background-color: $background_color;
    }
    body.login #login h1 a {
      background-image: url($logo);
      background-size: contain;
      width: $logo_width;
      height: $logo_height;
      display: block;
    }
    body.login #login #nav a,
    body.login #login #backtoblog a,
    body.login #login .privacy-policy-page-link a {
      color: $color;
    }
  </style>
CODE;

  echo $style;
  return true;
}
