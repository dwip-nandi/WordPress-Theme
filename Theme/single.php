
<?php get_header();?>
<div class="container">
   <div class="row">
      <div class="col-md-8">
      <?php
 
       if(has_post_thumbnail()){
          the_post_thumbnail("large", array("class"=>"thamblil-image"));
       }

      the_excerpt();
      previous_post_link(); echo "<br>"; next_post_link(); 
      ?>
      </div>
      <div class="col-md-4">
         <?php
           if(is_active_sidebar("sidebar-1")){
            dynamic_sidebar("sidebar-1");
           }
         
         ?>
      </div>
   </div>
</div>
<?php
 get_footer();
 ?>