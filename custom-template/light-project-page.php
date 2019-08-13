<?php
/*
 Display Template Name: Light Project
*/
get_header();
?>
 <?php 
 while(have_posts()): the_post();
 ?>
  <div class="project-header-section">
  	<div class="container">
  		<div class="header_heading">
  			<div class="icon i_projects"></div>
  		<h1><?php the_title();?></h1>
  	</div>
  	</div>
  </div>
 <?php endwhile;?>
 
<div class="ligting-project-section">
	<div class="container">
		<div class="ligting-project">
			<div class="ligting-project-gallery">
			<?php
			while(have_rows('lighting_project_repeater')) : the_row();
			$images = get_sub_field('lighting_project_image');
			$images1 = get_sub_field('lighting_large_image');
			?>
			
           <div class='projects'>
           <div class="projects_anchor">
           <a class='grouped_elements' rel='group1' href='<?php echo $images1['url'];?>' title='<?php the_sub_field('lighting_project_title');?>'>
           <img style='width: 225px;' alt='<?php the_sub_field('lighting_content');?>' src='<?php echo $images['url'];?>' />
           <div class="project_content">
           <p>
           <?php the_sub_field('lighting_project_title');?>
           </p>
           </div>
           </a>
           </div>
           </div>
			<?php
			endwhile;
			?>

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>
<style type="text/css">
  .fancybox-title-over {
  max-width: 100%;
}
</style>
<script src="<?php bloginfo('template_url');?>/script/jquery.tools.min.js" type="text/javascript" ></script>
<!-- FANCYBOX -->
<script src="<?php bloginfo('template_url');?>/script/jquery.mousewheel-3.0.4.pack.js" type="text/javascript" ></script>

<script src="<?php bloginfo('template_url');?>/script/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/script/jquery.fancybox-1.3.4.css" media="screen" />

<script src="<?php bloginfo('template_url');?>/script/jquery.starter.js"></script>