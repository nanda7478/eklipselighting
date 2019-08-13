<?php
/*
 Display Template Name: Award Page
*/
get_header();
?>

<?php 
 while(have_posts()): the_post();
 ?>
  <div class="award-header-section">
  	<div class="container">
      <div class="header_heading">
        <div class="icon i_awards"></div>
  		<h1><?php the_title();?></h1>
    </div>
  		<?php the_content();?>
  	</div>
  </div>
 <?php endwhile;?>

  <div class="container">
 <div class="award-section">

 		
 		<?php
           $args = array('post_type'=>'awards-distinctions','posts_per_page'=>-1, 'order'=>'ASC');
    	   $query = new WP_Query($args);
    	   if($query->have_posts()):
    	   while( $query->have_posts() ): $query->the_post();
   		   ?>
         <div class="award_row">
         <div class="row">
 			<div class="col-lg-6">
 				<?php
    		if ( has_post_thumbnail() ) {
    		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    		if ( ! empty( $large_image_url[0] ) ) {
       
            // echo get_the_post_thumbnail( $post->ID, 'full' ); 
      		?>
           <img class="img-responsive flsd"  src="<?php echo esc_url( $large_image_url[0] );?>" />
    
          <?php  
             }
            }
           ?>
 			</div>
 			<div class="col-lg-6">
        <div class="news_date"><?php the_date(' Y-m-d');?></div>
       
 				<h5><?php the_title();?></h5>
 				<?php the_content();?>
 			</div>
          </div>
          </div>
 			<?php endwhile; ?>
          <?php endif; ?>
 
 	</div>
 </div>

<?php
get_footer();
?>