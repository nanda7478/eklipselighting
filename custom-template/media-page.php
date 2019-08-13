<?php
/*
 Display Template Name: Media Page
*/
 get_header();
 ?>
 <?php 
 while(have_posts()): the_post();
 ?>
  <div class="media-header-section">
  	<div class="container">
  		<div class="header_heading margin_zero">
  		<h1><?php the_title();?></h1>
  	</div>
  	</div>
  </div>
 <?php endwhile;?>

	<div class="container">
 <div class="media-page-section">
 
 	<div class="press-kits">Available press kits to download can be found below:</div>
 		<div class="row">
 			<div class="col-lg-12">
 			 <ul class="media_lsiting">
 			 <?php
 			 while(have_rows('media_download')): the_row();
 			 ?>
 			 	<li>
 			 		<a href="<?php the_sub_field('media_link');?>" download><?php the_sub_field('media_title');?></a>
 			 	</li>
 			 <?php endwhile;?>
 			 </ul>	
 			</div>
 		</div>
 	</div>
 </div>

 <?php
 get_footer();
 ?>