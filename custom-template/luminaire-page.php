<?php
/*
 Display Template Name: Luminaire
*/
get_header();
?>


 	<div class="container">
     <div class="luminaire-light-selector">
 		<?php
 		while(have_rows('light_selector_section')) : the_row();
 		?>
 		
            <div class="header_heading">
              <div class="icon i_lightselector"></div>
              <h1><?php the_sub_field('light_title');?></h1>
            </div>
              <?php the_sub_field('light_content');?>
              <div class="light_slector_btn"><a class="bouton" href="<?php the_sub_field('light_button_url');?>"><?php the_sub_field('light_button_title');?></a></div>
  	
  		<?php endwhile;?>

 	</div>
 </div>



 	<div class="container">
 		 <div class="luminaire-download-section">
      <div class="header_heading">
        <div class="icon i_specs_download"></div>
              <h1><?php the_field('luminaire_portfolio_title');?></h1>
            </div>
            <div class="light_slector_btn">
              <a class="bouton" href="<?php bloginfo('template_url');?>/pdf/Eklipse Architectural Lighting - Luminaires Catalog.pdf"><?php the_field('luminaire_download_button');?></a>
              </div>
  		
 	
 	</div>
 </div>

  <div class="container">
 <div class="sort-section">
 		<div class="row">
 			<div class="col-lg-4 col-md-4">
 				<div class="sort-by-image">
          <div class="header_heading">
            <div class="icon i_sort_image"></div>
 					<h1><?php the_field('sort_by_image_title');?></h1>
        </div>
 					<ul>
 					<?php
          		while(have_rows('sort_by_image_section')): the_row();
          		?>
          		<?php
                $posts = get_sub_field('image_content');

                if( $posts ): ?>
                <?php foreach( $posts as $post): ?>
           <?php setup_postdata($post); ?>
 					<li>
 					 <?php
    		         if ( has_post_thumbnail() ) {
    		         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    		         if ( ! empty( $large_image_url[0] ) ) {
       
                     // echo get_the_post_thumbnail( $post->ID, 'full' ); 
      		         ?>
      		         <a href="<?php the_permalink(); ?>">
                    <img class="img-responsive flsd"  src="<?php echo esc_url( $large_image_url[0] );?>" />
                     </a>
                   <?php  
                      }
                     }
                    ?>
 					</li>
 					<?php endforeach; ?>
 					<?php wp_reset_postdata();?>
            <?php endif; ?>
 				    <?php
          		    endwhile;
          		     ?>
            <li><a href="http://proxilighting.com/"><img src="<?php echo site_url();?>/wp-content/uploads/2018/12/proxi_luminaire.jpg"></a></li>
 					</ul>
 				</div>
 			</div>

          <div class="col-lg-4 col-md-4">
          	<div class="sort-by-source">
              <div class="header_heading">
                <div class="icon i_sort_source"></div>
          		<h1><?php the_field('sort_by_source_title');?></h1>
            </div>
                <?php
          		while(have_rows('sort_by_source_section')): the_row();
          		?>
          		<div class="sort-list-item">
          			<h2><?php the_sub_field('source_title');?></h2>
                <?php
                $posts = get_sub_field('source_content');

                if( $posts ): ?>
                <ul>
            <?php foreach( $posts as $post): ?>
           <?php setup_postdata($post); ?>
             <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
           <?php endforeach; ?>
             </ul>
           <?php wp_reset_postdata();?>
            <?php endif; ?>
          	</div>
          		<?php
          		endwhile;
          		?>
              <div class="sort-list-item">
              <h2>PROXI TM - SHELF LIGHTING</h2>
              <ul>
                <li><a href="http://proxilighting.com/">Proxi</a></li>
              </ul>
              </div>

          	</div>
          </div>

          <div class="col-lg-4 col-md-4">
          	<div class="latest-product-section">
              <div class="header_heading">
                <div class="icon i_new_product_2015"></div>
          		<h1><?php the_field('latest_product_title');?></h1>
            </div>
               <?php
          		while(have_rows('latest_product_section')): the_row();
          		?>
          		<div class="sort-list-item">
          			<h2><?php the_sub_field('product_title');?></h2>
                <?php
                $posts = get_sub_field('product_content');

                if( $posts ): ?>
                <ul>
            <?php foreach( $posts as $post): ?>
           <?php setup_postdata($post); ?>
             <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
           <?php endforeach; ?>
             </ul>
           <?php wp_reset_postdata();?>
            <?php endif; ?>
          	</div>
          		<?php
          		endwhile;
          		?>
          		 <div class="sort-list-item">
              <h2>PROXI TM - SHELF LIGHTING</h2>
              <ul>
                <li><a href="http://proxilighting.com/">Proxi</a></li>
              </ul>
              </div>
          	</div>
          </div>


 		</div>
 	</div>
 </div>

<?php
get_footer();
?>