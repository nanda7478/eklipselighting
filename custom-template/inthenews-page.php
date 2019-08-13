<?php
/*
 Display Template Name: Inthenews
*/
get_header();
?>

<?php 
 while(have_posts()): the_post();
 ?>
  <div class="inthe-header-section">
  	<div class="container">
  		<div class="header_heading">
  			<div class="icon i_projects_recent"></div>
  		<h1><?php the_title();?></h1>
  	</div>
  	</div>
  </div>
 <?php endwhile;?>

 <div class="inthe-section">
 	<div class="container">
 		
 		<?php
    	   while( have_rows('inthenews_repeater') ): the_row();
         $image = get_sub_field('news_image');
   		   ?>
   		   <div class="inthenews_row">
   		   <div class="row">
 			<div class="col-lg-6">
           <img src="<?php echo $image['url'];?>" />
 			</div>
 			<div class="col-lg-6">
 				<h2><?php the_sub_field('news_title');?></h2>
 				<?php the_sub_field('news_content');?>
 			</div>
 			</div>
 			</div>
 			<?php endwhile; ?>
 		
 	</div>
 </div>

<?php
get_footer();
?>