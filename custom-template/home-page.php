<?php
/*
 Display Template Name: Home Page
*/
get_header();
?>

<div class="slider-section">
<div class="container">
   <div class="header_heading">
  <div class="icon i_projects_recent"></div> <h1><?php the_field('slider_title');?></h1>
</div>
	<div class="row">
		<div class="slider_tab">
		<div class="col-lg-12">
			<div id="tabs">
        	<!-- <a class="backward">prev</a><a class="forward">next</a>-->
            <a href="<?php echo site_url();?>/inthenews/">
            <div class="images">
            <?php
            while(have_rows('home_slider')): the_row();
            $image = get_sub_field('slider_image');
            ?>
			 <div>
			 <img src="<?php echo $image['url'];?>">
			 </div>
             <?php
             endwhile;
             ?>
			
            </div>
            </a>
            <!-- the tabs -->
            <div class="slidetabs">
			 <a href="#" class="current"></a>
			<a href="#" class=""></a>
		</div>

		</div>
		<div class="shadow">
			<img src="<?php echo site_url();?>/wp-content/uploads/2018/12/shadow.jpg">
		</div>

		</div>
	</div>
	</div>
</div>
</div>

<div class="home-content-section">
	<div class="container">
		<div class="row">
           <?php
           if(have_rows('about_light_award_section')):
           	while(have_rows('about_light_award_section')): the_row();
           if(get_row_layout() == 'about_section'):
           	?>
			<div class="col-lg-4 col-md-4">
				<div class="triple_div">
				<div class="icon i_history"></div>
				<h1><?php the_sub_field('about_title');?></h1>
				<div class="about-content">
					<?php the_sub_field('about_content');?>
				</div>
			</div></div>
            <?php 
            elseif(get_row_layout() == 'lighting_section'):
			?>
			<div class="col-lg-4 col-md-4">
			<div class="triple_div middle">
				<div class="icon i_lightselector"></div>
				<h1><?php the_sub_field('lighting_title');?></h1>
				<div class="lighting-content">
					<?php the_sub_field('lighting_content');?>
					<div class="btnsss">
					<a class="bouton" href="<?php the_sub_field('lighting_button_url');?>"><?php the_sub_field('lighting_button_title');?></a>
				</div>
				 Or you can always visit our <a href="<?php echo site_url();?>/luminaire/" alt="Products">products page</a>
				</div>
			</div>
			</div>
			<?php
			elseif(get_row_layout() == 'award_section'):
			?>
			<div class="col-lg-4 col-md-4">
				<div class="triple_div">
				<div class="icon i_awards"></div>
				<h1><?php the_sub_field('award_title');?></h1>
				<div class="award-content">
					<?php the_sub_field('award_content');?>
				</div>
			</div></div>
			<?php
			endif;
            endwhile;
            endif;
            ?>
		</div>
	</div>
</div>




<?php
get_footer();
?>