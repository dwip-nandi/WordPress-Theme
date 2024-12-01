<?php
get_header();
?>
<body <?php body_class(); ?> >
<div class="notification_area">
    <div class="container">
        <div class="row">
            <div id="">
                <h2>there are some text.</h2>
            </div>
            
            <?php $dynamic_text=get_post_meta(get_the_ID(),'dynamic_text',true) ;
               if($dynamic_text){
                    echo '<p>'.$dynamic_text.'</p>';
               }
               else echo "There are no text here";
            
            ?>
            
        </div>
    </div>
</div>

<div id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href=""><img src="<?php echo get_theme_mod('dwip_logo' ); ?>" alt=""></a>
            </div>
            <div class="col-md-9">Menu</div>
        </div>
    </div>
</div>
<section id="post_body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                     <h2> <a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a> </h2>                
            </div>
        </div>
    </div>
</section>
<section id="post_thumbnails">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                     <h3><?php the_author(); ?></h3>
                     <h4><?php the_time(); ?> </h4>
            </div>
            <div class="col-md-8">   
            <?php 
                  while(have_posts()){
                    the_post();
                    the_content();
                  }
                ?>         
                <?php
                   if(has_post_thumbnail()){
                    
                    the_post_thumbnail(array('1000','500'));                    
                 } 
                 ?>  
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
            <?php the_posts_pagination(array(
                    //"screen_reader_text"=>" ",
                    "prev_text"=>'<--',
                    "next_text"=>'-->',
                 ));
                 ?>
            </div>
        </div>
    </div>
</section>
<!-- -----------slider image----------- -->
<section class="slider">
            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_theme_mod( 'newtheme_slider_logo1'); ?>" alt="Image is not found">
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_theme_mod( 'newtheme_slider_logo2'); ?>" alt="Image is not found">
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_theme_mod( 'newtheme_slider_logo3'); ?>" alt="Image is not found">
            </div>

        </div>
    </div>
</section>


<?php
get_footer();
?>