<?php
/*
 Display Template Name: Tailormade Lighting
*/
 get_header();
 ?>
 <div class="tailormade-lighting-section">
 	<div class="container">

 		<div class="row">
 		<?php
 	   if(have_rows('tailor_made_lighting_flexible')):
 	   	while(have_rows('tailor_made_lighting_flexible')): the_row();
 	   if(get_row_layout() == 'tailor_made_lighting_section'):
 	   	?>
 			<div class="col-lg-12">
                            <div class="header_heading">
                            <div class="icon i_tailormade"></div>
 				<h1><?php the_sub_field('tailor_made_title');?></h1>
                            </div>
 				<div class="tailormade-content">
 					<?php the_sub_field('tailor_made_content');?>
 				</div>
 			</div>
 		<?php
 		endif;
 		endwhile;
 		endif;
 		?>
 		</div>
       
       <div class="tailormade-other-content">
       	<?php
 	   if(have_rows('tailor_made_lighting_flexible')):
 	   	while(have_rows('tailor_made_lighting_flexible')): the_row();
 	   if(get_row_layout() == 'tailor_alterations_section'):
 	   	?>
 			<div class="header_heading">
                            <div class="icon i_tailoralteration"></div>
 				<h1><?php the_sub_field('tailor_alterations_title');?></h1>
                     </div>
 				<div class="tailormade-content">
 					<?php the_sub_field('tailor_alterations_content');?>
 				</div>
 			
 		<?php
 		endif;
 		endwhile;
 		endif;
 		?>
       </div>

       <div class="tailormade-other-content">
       	<?php
 	   if(have_rows('tailor_made_lighting_flexible')):
 	   	while(have_rows('tailor_made_lighting_flexible')): the_row();
 	   if(get_row_layout() == 'tailor_white_section'):
 	   	?>
 			<div class="header_heading">
                            <div class="icon i_tailorwhite"></div>
 				<h1><?php the_sub_field('tailor_white_title');?></h1>
                     </div>
 				<div class="tailormade-content">
 					<?php the_sub_field('tailor_white_content');?>
 				</div>
 			
 		<?php
 		endif;
 		endwhile;
 		endif;
 		?>
       </div>

       <div class="tailormade-other-content">
       	<?php
 	   if(have_rows('tailor_made_lighting_flexible')):
 	   	while(have_rows('tailor_made_lighting_flexible')): the_row();
 	   if(get_row_layout() == 'extras_matter_section'):
 	   	?>
 			<div class="header_heading">
                            <div class="icon i_tailormade_center"></div>
 				<h1><?php the_sub_field('extras_matter_title');?></h1>
                     </div>

 				<div class="tailormade-content">
 					<?php the_sub_field('extras_matter_content');?>
 				</div>
 			
 		<?php
 		endif;
 		endwhile;
 		endif;
 		?>
       </div>

       <div class="tailormade-other-content">
       	<?php
 	   if(have_rows('tailor_made_lighting_flexible')):
 	   	while(have_rows('tailor_made_lighting_flexible')): the_row();
 	   if(get_row_layout() == 'about_eklipse_section'):
 	   	?>
 			<div class="header_heading">
                            <div class="icon i_aboutus"></div>
 				<h1><?php the_sub_field('about_eklipse_title');?></h1>
                     </div>
 				<div class="tailormade-content">
 					<?php the_sub_field('about_eklipse_content');?>
 				</div>
 			
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