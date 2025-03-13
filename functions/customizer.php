<?php
function theme_31w_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
      'title' => __('Hero Section', 'theme_31w'),
      'priority' => 30,
    ));
    // auteur
    $wp_customize->add_setting('hero_auteur', array(
      'default' => __('Nouhou Bah', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('hero_auteur', array(
      'label' => __('Auteur', 'theme_31w'),
      'section' => 'hero_section',
      'type' => 'text',
    ));
    // background
    $wp_customize->add_setting('hero_background', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Image en background', 'theme_31w'),
        'section' => 'hero_section',
    )));
    // couleur hero
    $wp_customize->add_setting('hero_couleur_texte', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
  
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur_texte', array(
        'label' => __('couleur du texte', 'theme_31w'),
        'section' => 'hero_section',
    )));
    // couleur hero icones
    $wp_customize->add_setting('hero_couleur_icones', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
  
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur_icones', array(
        'label' => __('couleur des icones', 'theme_31w'),
        'section' => 'hero_section',
    )));
      // footer
    $wp_customize->add_section('footer_section', array(
      'title' => __('Section pied de page', 'theme_31w'),
      'priority' => 30,
    ));
    // mission
    $wp_customize->add_setting('footer_mission', array(
      'default' => __('mission du club', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('footer_mission', array(
      'label' => __('mission', 'theme_31w'),
      'section' => 'footer_section',
      'type' => 'textarea',
    ));
  }
  add_action('customize_register', 'theme_31w_customize_register');