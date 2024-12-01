<?php

use MailPoet\NewsletterTemplates\ThumbnailSaver;


 /**
  * MY theme function
  */
 
  //theme bootstraping
  function newtheme_bootstraping(){
    load_theme_textdomain("newtheme");  
    //Theme title
     add_theme_support( 'title-tag');
     add_theme_support('custom-header');
     add_theme_support( 'post-thumbnails' );
  }
  add_action("init","newtheme_bootstraping");
  

  //Theme css and jQuery File calling
    function dwip_css_js_file_calling(){
       wp_enqueue_style( 'dwip_style', get_stylesheet_uri());
       
    }
    add_action( 'wp_enqueue_scripts', 'dwip_css_js_file_calling' );

    //sidebar or single page wizard register
    function newtheme_sidebar(){
         register_sidebar(
          array(
            'name'=>__("single_post_sidebar","newtheme"),
            "id"=>"sidebar-1",
            "description"=>__("IF you update a sidebar you can do it hera","newtheme"),
            "before_widget"=>'<section id="hgh" class="lghhgh" ',
            "afer_widget"=>'</section>',
            

          )
         );
    }
    add_action("widgets_init","newtheme_sidebar");

//slider image change option
function newtheme_customization_slider_register($wp_customize){
   $wp_customize->add_section('newtheme_slider_area',array(
     'title'=>__('Slider Area','newtheme'),
     'description'=> 'If you interested update your slider images. You can do it here',
   ));
   $wp_customize->add_setting('newtheme_slider_logo1',array(
     'default'=>get_bloginfo( 'template_directory').'/img/slider1.png',
   ));
   $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'newtheme_slider_logo1',array(
     'label'=>'Slider images Uplode',
     'section'=>'newtheme_slider_area',
     'setting'=>'newtheme_slider_logo1',
     'description'=> 'If you interested update or  change default slider images , you can do it here',

   ))); 
   $wp_customize->add_setting('newtheme_slider_logo2',array(
      'default'=>get_bloginfo( 'template_directory').'/img/slider2.png',
    ));
   $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'newtheme_slider_logo2',array(
      'label'=>'Slider images Uplode',
      'section'=>'newtheme_slider_area',
      'setting'=>'newtheme_slider_logo2',
      'description'=> 'If you interested update or  change default slider images , you can do it here',
 
    ))); 
    $wp_customize->add_setting('newtheme_slider_logo3',array(
      'default'=>get_bloginfo( 'template_directory').'/img/slider3.png',
    ));
   $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'newtheme_slider_logo3',array(
      'label'=>'Slider images Uplode',
      'section'=>'newtheme_slider_area',
      'setting'=>'newtheme_slider_logo3',
      'description'=> 'If you interested update or  change default slider images , you can do it here',
 
    ))); 


}
   add_action( 'customize_register','newtheme_customization_slider_register' );


   //add dynamic text edit
  function newtheme_customization_text(){
    $args = array(
      'public'=> true,
      'label' =>'Custom Text',
      "id"=>"notification-1",
      "description"=>__("IF you update Notification text you can do it hera","newtheme"),
    );
    register_post_type('custom_text',$args);
  }
  add_action('init','newtheme_customization_text');
    
 /* function dwip_css_js_file_calling(){
    wp_enqueue_style( 'dwip_style', get_stylesheet_uri());

    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'bootstrap');
    wp_enqueue_style( 'custom');

    //jQuery
    //wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri( ).'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri( ).'/js/main.js', array(), '1.0.0', 'true');

  }
  add_action( 'wp_enqueue_scripts', 'dwip_css_js_file_calling' );
*/

  //theme function
 /* function dwip_customizer_register($wp_customize){
    $wp_customize->add_section('dwip_header_area',array(
       'title' =>__('Header Area','newtheme'),
       'description' => 'If you interasted update your header ariea . You can do it.'
    ));

    $wp_customize->add_setting('dwip_logo',array(
      'default'=> get_bloginfo( 'template_directory') . '/img/logo.png',
    ));

    $wp_customize->add_control(new $WP_Customize_Image_Control($wp_customize, 'dwip_logo', array(
       'lable'=>'Logo Upload',
       'description'=>'If you interested you can change it',
       'section'=>'dwip_header_area',
       'setting'=>'dwip_logo',
    )));
  }

  add_action( 'customize_register','dwip_customizer_register' );*/



?>