<?php
/*
 Display Template Name: Career
*/
get_header();
?>
<?php 
 while(have_posts()): the_post();
 ?>
  <div class="career-header-section">
  	<div class="container">
  		<div class="header_heading">
  			<div class="icon i_career"></div>
  		<h1><?php the_title();?></h1>
  	</div>
  	</div>
  </div>
  <div class="container">
<div class="career_content">
	<p>Please see the current jobs available at Eklipse Architectural Lighting:</p>

</div>

</div>
 <?php endwhile;?>



<?php
get_footer();
?>