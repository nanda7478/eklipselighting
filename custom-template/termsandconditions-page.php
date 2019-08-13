<?php
/*
 Display Template Name: Terms & Conditions
*/
get_header();
?>
<?php
while(have_posts()): the_post();
?>
<div class="terms-condition-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="header_heading">
					<div class="icon i_terms"></div>
				<h1><?php the_title();?></h1>
			</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile;?>

<div class="terma-content-section">
	<div class="container">
		<div class="row">
		<?php
       while(have_posts()): the_post();
         ?>
			<div class="col-lg-12">
				<?php the_content();?>
			</div>
			<?php endwhile;?>
		</div>
	</div>
</div>

<?php
get_footer();
?>