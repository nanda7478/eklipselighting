<?php
/*
 Display Template Name: Latest Products
*/
get_header();
?>
<?php 
 while(have_posts()): the_post();
 ?>
  <div class="product-header-section">
  	<div class="container">
  		<div class="header_heading">
  			<div class="icon i_new_product_2015"></div>
  		<h1><?php the_title();?></h1>
  	</div>
  	</div>
  </div>
 <?php endwhile;?>

 <div class="latest_product_page">
 <div class="container">
 <div class="product-proxi-section spc_margin">
 	  <h2>PROXI TM</h2>
 		<div class="row">
 		   <?php
 		   while(have_rows('proxi_section')) : the_row();
 		   $image = get_sub_field('proxi_image');
 		   ?>
 			<div class="col-lg-12">
 				<a href="<?php the_sub_field('proxi_url');?>"><img src="<?php echo $image['url'];?>"></a>
 			</div>
 		  <?php endwhile;?>
 		</div>
 
 </div>

 <div class="product-lifeline-section spc_margin">
 	
 	  <h2>LIFELINE FAMILY</h2>
 		<div class="row">
 		   <?php
 		   while(have_rows('lifeline_family_section')) : the_row();
 		   $image1 = get_sub_field('life_image');
 		   ?>
 			<div class="col-lg-12">
 				<a href="<?php the_sub_field('lifeline_url');?>"><img src="<?php echo $image1['url'];?>"></a>
 			</div>
 		  <?php endwhile;?>
 		</div>
 
 </div>

 <div class="product-pixis-section spc_margin">
 	  <h2>PIXIS FAMILY</h2>
 		<div class="row">
 		   <?php
 		   while(have_rows('pixis_family_section')) : the_row();
 		   $image2 = get_sub_field('pixi_image');
 		   ?>
 			<div class="col-lg-12">
 				<a href="<?php the_sub_field('pixis_url');?>"><img src="<?php echo $image2['url'];?>"></a>
 			</div>
 		  <?php endwhile;?>
 		</div>
 	
 </div>

 <div class="product-nixe-section spc_margin">
 	  <h2>NIXE FAMILY</h2>
 		<div class="row">
 		   <?php
 		   while(have_rows('nixe_family_section')) : the_row();
 		   $image3 = get_sub_field('nixi_image');
 		   ?>
 			<div class="col-lg-12">
 				<a href="<?php the_sub_field('nixe_url');?>"><img src="<?php echo $image3['url'];?>"></a>
 			</div>
 		  <?php endwhile;?>
 		</div>

 </div>

 <div class="product-adena-section spc_margin">
 	  <h2>ADENA FAMILY</h2>
 		<div class="row">
 		   <?php
 		   while(have_rows('adena_family_section')) : the_row();
 		   $image = get_sub_field('adena_image');
 		   ?>
 			<div class="col-lg-12">
 				<a href="<?php the_sub_field('adena_url');?>"><img src="<?php echo $image['url'];?>"></a>
 			</div>
 		  <?php endwhile;?>
 		</div>
 </div>
</div>
</div>

<?php
get_footer();
?>