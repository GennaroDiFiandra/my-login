<?php
namespace MyLogin\Customizer;
defined('WPINC') || die;


function register_customizer_controls($wp_customize) {
  // Add a section for current plugin in the default panel
  $wp_customize->add_section(
    'mylogin_controls',
    [
      'title' => __('My Login', 'mylogin'),
      'priority' => 201,
      'capability' => 'edit_theme_options'
    ]
  );
  // [END] Add a section for current plugin in the default panel

  // Add a control to setup background color
  $wp_customize->add_setting(
    'mylogin_settngs[background_color]',
    [
      'default' => '#fff',
      'type' => 'option',
      'sanitize_callback' => 'sanitize_hex_color'
    ]
  );

  $wp_customize->add_control(
    new \WP_Customize_Color_Control(
      $wp_customize,
      'mylogin_background_color',
      [
        'section' => 'mylogin_controls',
        'settings' => 'mylogin_settngs[background_color]',
        'label' => __('Background Color', 'mylogin')
      ]
    )
  );
  // [END] Add a control to setup background color

  // Add a control to setup color
  $wp_customize->add_setting(
    'mylogin_settngs[color]',
    [
      'default' => '#000',
      'type' => 'option',
      'sanitize_callback' => 'sanitize_hex_color'
    ]
  );

  $wp_customize->add_control(
    new \WP_Customize_Color_Control(
      $wp_customize,
      'mylogin_color',
      [
        'section' => 'mylogin_controls',
        'settings' => 'mylogin_settngs[color]',
        'label' => __('Background Color', 'mylogin')
      ]
    )
  );
  // [END] Add a control to setup color

  // Add a control to setup login logo
  $wp_customize->add_setting(
    'mylogin_settngs[logo]',
    [
      'default' => '',
      'type' => 'option',
      'sanitize_callback' => 'esc_url_raw'
    ]
  );

  $wp_customize->add_control(
    new \WP_Customize_Image_Control(
      $wp_customize,
      'mylogin_logo',
      [
        'section' => 'mylogin_controls',
        'settings' => 'mylogin_settngs[logo]',
        'label' => __('Logo', 'mylogin')
      ]
    )
  );
  // [END] Add a control to setup login logo

  // Add control to setup logo width
  $wp_customize->add_setting(
    'mylogin_settngs[logo_width]',
    [
      'default' => 'auto',
      'type' => 'option',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]
  );

  $wp_customize->add_control(
    'mylogin_logo_width',
    [
      'section' => 'mylogin_controls',
      'settings' => 'mylogin_settngs[logo_width]',
      'label' => __('Logo width in pixel', 'mylogin'),
      'type' => 'text'
    ]
  );
  // [END] Add control to setup logo width

    // Add control to setup logo height
    $wp_customize->add_setting(
      'mylogin_settngs[logo_height]',
      [
        'default' => 'auto',
        'type' => 'option',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
      ]
    );

    $wp_customize->add_control(
      'mylogin_logo_height',
      [
        'section' => 'mylogin_controls',
        'settings' => 'mylogin_settngs[logo_height]',
        'label' => __('Logo height in pixel', 'mylogin'),
        'type' => 'text'
      ]
    );
    // [END] Add control to setup logo height
}
