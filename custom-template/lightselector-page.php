<?php
/*
  Display Template Name: Light Selector
*/
get_header();
?>

<?php 
 while(have_posts()): the_post();
 ?>
 <div class="container">
  <div class="light-header-section">
    <div class="header_heading">
  	<div class="icon i_lightselector"></div>
  		<h1><?php the_title();?></h1>
  	</div>
  </div>
  </div>
 <?php endwhile;?>
  <div class="container">
 <div class="light-selector-section">
 
 		<div class="light-selector-items">
 			<ul>
 			 <?php
           $args = array('post_type'=>'light-selector','posts_per_page'=>-1, 'order'=>'ASC');
    	   $query = new WP_Query($args);
    	   if($query->have_posts()):
    	   while( $query->have_posts() ): $query->the_post();
   		   ?>
 		  <li>
        <div class="light_selector_li">
 			<?php
    		if ( has_post_thumbnail() ) {
    		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    		if ( ! empty( $large_image_url[0] ) ) {
       
            // echo get_the_post_thumbnail( $post->ID, 'full' ); 
      		?>
          <div class="light_selector_img">
            <a class="image-link" href="<?php the_permalink();?>">
           <img class="img-responsive flsd"  src="<?php echo esc_url( $large_image_url[0] );?>" />
           </a>
         </div>
    
          <?php  
             }
            }
         ?>
    <div class="light_title"><a href="<?php the_permalink();?>"><?php the_title();?></a>
    </div>
 				</li>
 	      <?php endwhile; ?>
          <?php endif; ?>
 			</ul>
 		</div>
 	</div>
 </div>


<?php
get_footer();
?>