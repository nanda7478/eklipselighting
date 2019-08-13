<?php
/*
  Display Template Name: Adena
*/
get_header();
?>
<?php
while(have_posts()): the_post();
?>
<div class="container">
<div class="back_btn">
<i class="fa fa-angle-double-left" aria-hidden="true"></i> <a href="<?php echo site_url();?>/luminaire/">Back to  Portfolio</a> 
	
</div>
</div>

	<div class="container">
<div class="portfolio-subpage-section">
		<div class="row">
			<div class="col-lg-9">
				<div class="protofolio_page_top_content">
				<?php the_content();?>
			</div>
		</div>
			<div class="col-lg-3">
		     <div class="protofolio_page_top_img">
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
		</div>
	</div>
</div>
</div>
<?php endwhile;?>


<div class="container">
 <div class="context-application-section">
 	<div class="header_heading">
 	<div class="icon i_specs_context"></div>
	<h1><?php the_field('context_title');?></h1>
    </div>
		<div class="row">
			<div class="col-lg-12">
				<div class="accordian">
				<h3 class="current">Overview</h3>
				<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</div>
				<?php $image = get_field('context_section');?>
				<img src="<?php echo $image['url'];?>">
			</div>
		</div>
	</div>
</div>


	<div class="container">
	<div class="specifications-section">
	<div class="header_heading">
	<div class="icon i_specs_specs"></div>
	<h1><?php the_field('specifications_title');?></h1>
</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="squad_div">
			<?php the_field('electrical_section');?>
		</div>
			</div>
			<div class="col-lg-3">
				<div class="squad_div">
			<?php the_field('physical_section');?>
		</div>
			</div>
			<div class="col-lg-3">
				<div class="squad_div">
			<?php the_field('warranty_section');?>
		</div>
			</div>
			<div class="col-lg-3">
				<div class="squad_div">
			<?php the_field('nominal_dimensions');?>
		</div>
			</div>
		</div>
	</div>
</div>



	<div class="container">
		<div class="download-section">
<div class="header_heading">
	<div class="icon i_specs_download"></div>
	<h1><?php the_field('download_title');?></h1>
</div>
		<div class="downlds_btns">
			<ul>
				<li>
				 <?php $pdf_files = get_field('download_pdf_file');?>
				 <?php if($pdf_files){ ?>
					<div class="dwndld"><a target="_blank" href="<?php echo $pdf_files['url'];?>" id="dwndld_pdf"><span class="dwndld_span">Download PDF file</span></a></div>
					<?php } else { ?>
                     <div id="dwndld_empty_dwg"><span class="dwndld_span">Download PDF file</span></div>
					<?php } ?>
				</li>
				<li>
				 <?php $dwg_files = get_field('download_dwg_file');?>
				 <?php if($dwg_files){ ?>
				 <div class="dwndld"><a target="_blank" href="<?php echo $dwg_files['url'];?>" id="dwndld_pdf"><span class="dwndld_span">Download DWG file</span></a></div>
				 <?php } else { ?>
					<div id="dwndld_empty_dwg"><span class="dwndld_span">Download DWG file</span></div>
					<?php } ?>
				</li>
				<li>
                   <?php $install_files = get_field('installation_drawings');?>
                   <?php if($install_files){ ?>
					<div class="dwndld"><a target="_blank" href="<?php echo $install_files['url'];?>" id="dwndld_install"><span class="dwndld_span">Installation Drawings</span></a></div>
					<?php } else { ?>
					<div id="dwndld_empty_install"><span class="dwndld_span">Installation Drawings</span></div>
					<?php } ?>
				</li>
				<li>
				     <?php $diagram_files = get_field('wiring_diagrams');?>
				     <?php if($diagram_files){ ?>
					<div id="dwndld"><a target="_blank" href="<?php echo $diagram_files['url'];?>" id="dwndld_wiring"><span class="dwndld_span">Wiring Diagrams</span></a></div>
                    <?php } else { ?>
					<div id="dwndld_empty_wiring"><span class="dwndld_span">Wiring Diagrams</span></div>
					<?php } ?>
				</li>
				<li>
				<?php $ies_files = get_field('download_ies_file');?>
				 <?php if($diagram_files){ ?>
					<div class="dwndld"><a target="_blank" href="<?php echo $ies_files['url'];?>" id="dwndld_ies"><span class="dwndld_span">Download IES file</span></a></div>
					 <?php } else { ?>
					<div id="dwndld_empty_ies"><span class="dwndld_span">Download IES file</span></div>
					<?php } ?>
				</li>

			</ul>
		</div>
	</div>
</div>

<div class="ordering-form-section">
	<div class="container">
		<div class="header_heading">
	<div class="icon i_specs_order"></div>
	<h1><?php the_field('ordering_code_title');?></h1>
</div>
<div class="order_code">
		<div class="row">
			<div class="col-lg-12">
<form action="" method="POST" id="order_form">   
<div class="order_option" id="Model">
<label>Model
</label>
<div class="order_option_second">
<input checked="checked" name="Model" value="A" type="radio">Adena
</div>
</div>

<div class="order_option" id="Voltage">
<label>Voltage</label>
<a href="#" class="ordering_moreinfo"><span><div class="arr"></div>Voltage is a measure of the energy of electricity, specifically, it is the energy per unit charge. It is calculated in Volts.</span></a>
<div class="order_option_second">
<input name="Voltage" value="12V" type="radio">12 volts
</div>
<div class="order_option_second">
<input name="Voltage" value="24V" type="radio">24 volts
</div>
</div>

<div class="order_option" id="WattageFoot">
<label>Wattage / Foot
</label>
<div class="order_option_second">
<input name="WattageFoot" value="3W" type="radio">3 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="3.5W" type="radio">3.5 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="4W" type="radio">4 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="4.5W" type="radio">4.5 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="5W" type="radio">5 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="5.5W" type="radio">5.5 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="6W" type="radio">6 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="6.5W" type="radio">6.5 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="7W" type="radio">7 W / foot
</div>
<div class="order_option_second">
<input name="WattageFoot" value="7.5W" type="radio">7.5 W / foot
</div>
</div>

<div class="order_option" id="Length">
<label>Length</label>
<a href="#" class="ordering_moreinfo"><span><div class="arr"></div>The length of a linear lighting fixture is always calculated in inches. Please refer to the multiple scale to order the appropriate multiple length for your project.</span></a>
<br>
<select name="Length">
<option value="10">10 inches</option>
<option value="10.125">10.125 in</option>
<option value="10.250">10.250 in</option>
<option value="10.375">10.375 in</option>
<option value="10.500">10.500 in</option>
<option value="10.625">10.625 in</option>
<option value="10.750">10.750 in</option>
<option value="10.875">10.875 in</option>
<option value="11">11 inches</option>
<option value="11.125">11.125 in</option>
<option value="11.250">11.250 in</option>
<option value="11.375">11.375 in</option>
<option value="11.500">11.500 in</option>
<option value="11.625">11.625 in</option>
<option value="11.750">11.750 in</option>
<option value="11.875">11.875 in</option>
<option value="12">12 inches</option>
<option value="12.125">12.125 in</option>
<option value="12.250">12.250 in</option>
<option value="12.375">12.375 in</option>
<option value="12.500">12.500 in</option>
<option value="12.625">12.625 in</option>
<option value="12.750">12.750 in</option>
<option value="12.875">12.875 in</option>
<option value="13">13 inches</option>
<option value="13.125">13.125 in</option>
<option value="13.250">13.250 in</option>
<option value="13.375">13.375 in</option>
<option value="13.500">13.500 in</option>
<option value="13.625">13.625 in</option>
<option value="13.750">13.750 in</option>
<option value="13.875">13.875 in</option>
<option value="14">14 inches</option>
<option value="14.125">14.125 in</option>
<option value="14.250">14.250 in</option>
<option value="14.375">14.375 in</option>
<option value="14.500">14.500 in</option>
<option value="14.625">14.625 in</option>
<option value="14.750">14.750 in</option>
<option value="14.875">14.875 in</option>
<option value="15">15 inches</option>
<option value="15.125">15.125 in</option>
<option value="15.250">15.250 in</option>
<option value="15.375">15.375 in</option>
<option value="15.500">15.500 in</option>
<option value="15.625">15.625 in</option>
<option value="15.750">15.750 in</option>
<option value="15.875">15.875 in</option>
<option value="16">16 inches</option>
<option value="16.125">16.125 in</option>
<option value="16.250">16.250 in</option>
<option value="16.375">16.375 in</option>
<option value="16.500">16.500 in</option>
<option value="16.625">16.625 in</option>
<option value="16.750">16.750 in</option>
<option value="16.875">16.875 in</option>
<option value="17">17 inches</option>
<option value="17.125">17.125 in</option>
<option value="17.250">17.250 in</option>
<option value="17.375">17.375 in</option>
<option value="17.500">17.500 in</option>
<option value="17.625">17.625 in</option>
<option value="17.750">17.750 in</option>
<option value="17.875">17.875 in</option>
<option value="18">18 inches</option>
<option value="18.125">18.125 in</option>
<option value="18.250">18.250 in</option>
<option value="18.375">18.375 in</option>
<option value="18.500">18.500 in</option>
<option value="18.625">18.625 in</option>
<option value="18.750">18.750 in</option>
<option value="18.875">18.875 in</option>
<option value="19">19 inches</option>
<option value="19.125">19.125 in</option>
<option value="19.250">19.250 in</option>
<option value="19.375">19.375 in</option>
<option value="19.500">19.500 in</option>
<option value="19.625">19.625 in</option>
<option value="19.750">19.750 in</option>
<option value="19.875">19.875 in</option>
<option value="20">20 inches</option>
<option value="20.125">20.125 in</option>
<option value="20.250">20.250 in</option>
<option value="20.375">20.375 in</option>
<option value="20.500">20.500 in</option>
<option value="20.625">20.625 in</option>
<option value="20.750">20.750 in</option>
<option value="20.875">20.875 in</option>
<option value="21">21 inches</option>
<option value="21.125">21.125 in</option>
<option value="21.250">21.250 in</option>
<option value="21.375">21.375 in</option>
<option value="21.500">21.500 in</option>
<option value="21.625">21.625 in</option>
<option value="21.750">21.750 in</option>
<option value="21.875">21.875 in</option>
<option value="22">22 inches</option>
<option value="22.125">22.125 in</option>
<option value="22.250">22.250 in</option>
<option value="22.375">22.375 in</option>
<option value="22.500">22.500 in</option>
<option value="22.625">22.625 in</option>
<option value="22.750">22.750 in</option>
<option value="22.875">22.875 in</option>
<option value="23">23 inches</option>
<option value="23.125">23.125 in</option>
<option value="23.250">23.250 in</option>
<option value="23.375">23.375 in</option>
<option value="23.500">23.500 in</option>
<option value="23.625">23.625 in</option>
<option value="23.750">23.750 in</option>
<option value="23.875">23.875 in</option>
<option value="24">24 inches</option>
<option value="24.125">24.125 in</option>
<option value="24.250">24.250 in</option>
<option value="24.375">24.375 in</option>
<option value="24.500">24.500 in</option>
<option value="24.625">24.625 in</option>
<option value="24.750">24.750 in</option>
<option value="24.875">24.875 in</option>
<option value="25">25 inches</option>
<option value="25.125">25.125 in</option>
<option value="25.250">25.250 in</option>
<option value="25.375">25.375 in</option>
<option value="25.500">25.500 in</option>
<option value="25.625">25.625 in</option>
<option value="25.750">25.750 in</option>
<option value="25.875">25.875 in</option>
<option value="26">26 inches</option>
<option value="26.125">26.125 in</option>
<option value="26.250">26.250 in</option>
<option value="26.375">26.375 in</option>
<option value="26.500">26.500 in</option>
<option value="26.625">26.625 in</option>
<option value="26.750">26.750 in</option>
<option value="26.875">26.875 in</option>
<option value="27">27 inches</option>
<option value="27.125">27.125 in</option>
<option value="27.250">27.250 in</option>
<option value="27.375">27.375 in</option>
<option value="27.500">27.500 in</option>
<option value="27.625">27.625 in</option>
<option value="27.750">27.750 in</option>
<option value="27.875">27.875 in</option>
<option value="28">28 inches</option>
<option value="28.125">28.125 in</option>
<option value="28.250">28.250 in</option>
<option value="28.375">28.375 in</option>
<option value="28.500">28.500 in</option>
<option value="28.625">28.625 in</option>
<option value="28.750">28.750 in</option>
<option value="28.875">28.875 in</option>
<option value="29">29 inches</option>
<option value="29.125">29.125 in</option>
<option value="29.250">29.250 in</option>
<option value="29.375">29.375 in</option>
<option value="29.500">29.500 in</option>
<option value="29.625">29.625 in</option>
<option value="29.750">29.750 in</option>
<option value="29.875">29.875 in</option>
<option value="30">30 inches</option>
<option value="30.125">30.125 in</option>
<option value="30.250">30.250 in</option>
<option value="30.375">30.375 in</option>
<option value="30.500">30.500 in</option>
<option value="30.625">30.625 in</option>
<option value="30.750">30.750 in</option>
<option value="30.875">30.875 in</option>
<option value="31">31 inches</option>
<option value="31.125">31.125 in</option>
<option value="31.250">31.250 in</option>
<option value="31.375">31.375 in</option>
<option value="31.500">31.500 in</option>
<option value="31.625">31.625 in</option>
<option value="31.750">31.750 in</option>
<option value="31.875">31.875 in</option>
<option value="32">32 inches</option>
<option value="32.125">32.125 in</option>
<option value="32.250">32.250 in</option>
<option value="32.375">32.375 in</option>
<option value="32.500">32.500 in</option>
<option value="32.625">32.625 in</option>
<option value="32.750">32.750 in</option>
<option value="32.875">32.875 in</option>
<option value="33">33 inches</option>
<option value="33.125">33.125 in</option>
<option value="33.250">33.250 in</option>
<option value="33.375">33.375 in</option>
<option value="33.500">33.500 in</option>
<option value="33.625">33.625 in</option>
<option value="33.750">33.750 in</option>
<option value="33.875">33.875 in</option>
<option value="34">34 inches</option>
<option value="34.125">34.125 in</option>
<option value="34.250">34.250 in</option>
<option value="34.375">34.375 in</option>
<option value="34.500">34.500 in</option>
<option value="34.625">34.625 in</option>
<option value="34.750">34.750 in</option>
<option value="34.875">34.875 in</option>
<option value="35">35 inches</option>
<option value="35.125">35.125 in</option>
<option value="35.250">35.250 in</option>
<option value="35.375">35.375 in</option>
<option value="35.500">35.500 in</option>
<option value="35.625">35.625 in</option>
<option value="35.750">35.750 in</option>
<option value="35.875">35.875 in</option>
<option value="36">36 inches</option>
<option value="36.125">36.125 in</option>
<option value="36.250">36.250 in</option>
<option value="36.375">36.375 in</option>
<option value="36.500">36.500 in</option>
<option value="36.625">36.625 in</option>
<option value="36.750">36.750 in</option>
<option value="36.875">36.875 in</option>
<option value="37">37 inches</option>
<option value="37.125">37.125 in</option>
<option value="37.250">37.250 in</option>
<option value="37.375">37.375 in</option>
<option value="37.500">37.500 in</option>
<option value="37.625">37.625 in</option>
<option value="37.750">37.750 in</option>
<option value="37.875">37.875 in</option>
<option value="38">38 inches</option>
<option value="38.125">38.125 in</option>
<option value="38.250">38.250 in</option>
<option value="38.375">38.375 in</option>
<option value="38.500">38.500 in</option>
<option value="38.625">38.625 in</option>
<option value="38.750">38.750 in</option>
<option value="38.875">38.875 in</option>
<option value="39">39 inches</option>
<option value="39.125">39.125 in</option>
<option value="39.250">39.250 in</option>
<option value="39.375">39.375 in</option>
<option value="39.500">39.500 in</option>
<option value="39.625">39.625 in</option>
<option value="39.750">39.750 in</option>
<option value="39.875">39.875 in</option>
<option value="40">40 inches</option>
<option value="40.125">40.125 in</option>
<option value="40.250">40.250 in</option>
<option value="40.375">40.375 in</option>
<option value="40.500">40.500 in</option>
<option value="40.625">40.625 in</option>
<option value="40.750">40.750 in</option>
<option value="40.875">40.875 in</option>
<option value="41">41 inches</option>
<option value="41.125">41.125 in</option>
<option value="41.250">41.250 in</option>
<option value="41.375">41.375 in</option>
<option value="41.500">41.500 in</option>
<option value="41.625">41.625 in</option>
<option value="41.750">41.750 in</option>
<option value="41.875">41.875 in</option>
<option value="42">42 inches</option>
<option value="42.125">42.125 in</option>
<option value="42.250">42.250 in</option>
<option value="42.375">42.375 in</option>
<option value="42.500">42.500 in</option>
<option value="42.625">42.625 in</option>
<option value="42.750">42.750 in</option>
<option value="42.875">42.875 in</option>
<option value="43">43 inches</option>
<option value="43.125">43.125 in</option>
<option value="43.250">43.250 in</option>
<option value="43.375">43.375 in</option>
<option value="43.500">43.500 in</option>
<option value="43.625">43.625 in</option>
<option value="43.750">43.750 in</option>
<option value="43.875">43.875 in</option>
<option value="44">44 inches</option>
<option value="44.125">44.125 in</option>
<option value="44.250">44.250 in</option>
<option value="44.375">44.375 in</option>
<option value="44.500">44.500 in</option>
<option value="44.625">44.625 in</option>
<option value="44.750">44.750 in</option>
<option value="44.875">44.875 in</option>
<option value="45">45 inches</option>
<option value="45.125">45.125 in</option>
<option value="45.250">45.250 in</option>
<option value="45.375">45.375 in</option>
<option value="45.500">45.500 in</option>
<option value="45.625">45.625 in</option>
<option value="45.750">45.750 in</option>
<option value="45.875">45.875 in</option>
<option value="46">46 inches</option>
<option value="46.125">46.125 in</option>
<option value="46.250">46.250 in</option>
<option value="46.375">46.375 in</option>
<option value="46.500">46.500 in</option>
<option value="46.625">46.625 in</option>
<option value="46.750">46.750 in</option>
<option value="46.875">46.875 in</option>
<option value="47">47 inches</option>
<option value="47.125">47.125 in</option>
<option value="47.250">47.250 in</option>
<option value="47.375">47.375 in</option>
<option value="47.500">47.500 in</option>
<option value="47.625">47.625 in</option>
<option value="47.750">47.750 in</option>
<option value="47.875">47.875 in</option>
<option value="48">48 inches</option>
<option value="48.125">48.125 in</option>
<option value="48.250">48.250 in</option>
<option value="48.375">48.375 in</option>
<option value="48.500">48.500 in</option>
<option value="48.625">48.625 in</option>
<option value="48.750">48.750 in</option>
<option value="48.875">48.875 in</option>
<option value="49">49 inches</option>
<option value="49.125">49.125 in</option>
<option value="49.250">49.250 in</option>
<option value="49.375">49.375 in</option>
<option value="49.500">49.500 in</option>
<option value="49.625">49.625 in</option>
<option value="49.750">49.750 in</option>
<option value="49.875">49.875 in</option>
<option value="50">50 inches</option>
<option value="50.125">50.125 in</option>
<option value="50.250">50.250 in</option>
<option value="50.375">50.375 in</option>
<option value="50.500">50.500 in</option>
<option value="50.625">50.625 in</option>
<option value="50.750">50.750 in</option>
<option value="50.875">50.875 in</option>
<option value="51">51 inches</option>
<option value="51.125">51.125 in</option>
<option value="51.250">51.250 in</option>
<option value="51.375">51.375 in</option>
<option value="51.500">51.500 in</option>
<option value="51.625">51.625 in</option>
<option value="51.750">51.750 in</option>
<option value="51.875">51.875 in</option>
<option value="52">52 inches</option>
<option value="52.125">52.125 in</option>
<option value="52.250">52.250 in</option>
<option value="52.375">52.375 in</option>
<option value="52.500">52.500 in</option>
<option value="52.625">52.625 in</option>
<option value="52.750">52.750 in</option>
<option value="52.875">52.875 in</option>
<option value="53">53 inches</option>
<option value="53.125">53.125 in</option>
<option value="53.250">53.250 in</option>
<option value="53.375">53.375 in</option>
<option value="53.500">53.500 in</option>
<option value="53.625">53.625 in</option>
<option value="53.750">53.750 in</option>
<option value="53.875">53.875 in</option>
<option value="54">54 inches</option>
<option value="54.125">54.125 in</option>
<option value="54.250">54.250 in</option>
<option value="54.375">54.375 in</option>
<option value="54.500">54.500 in</option>
<option value="54.625">54.625 in</option>
<option value="54.750">54.750 in</option>
<option value="54.875">54.875 in</option>
<option value="55">55 inches</option>
<option value="55.125">55.125 in</option>
<option value="55.250">55.250 in</option>
<option value="55.375">55.375 in</option>
<option value="55.500">55.500 in</option>
<option value="55.625">55.625 in</option>
<option value="55.750">55.750 in</option>
<option value="55.875">55.875 in</option>
<option value="56">56 inches</option>
<option value="56.125">56.125 in</option>
<option value="56.250">56.250 in</option>
<option value="56.375">56.375 in</option>
<option value="56.500">56.500 in</option>
<option value="56.625">56.625 in</option>
<option value="56.750">56.750 in</option>
<option value="56.875">56.875 in</option>
<option value="57">57 inches</option>
<option value="57.125">57.125 in</option>
<option value="57.250">57.250 in</option>
<option value="57.375">57.375 in</option>
<option value="57.500">57.500 in</option>
<option value="57.625">57.625 in</option>
<option value="57.750">57.750 in</option>
<option value="57.875">57.875 in</option>
<option value="58">58 inches</option>
<option value="58.125">58.125 in</option>
<option value="58.250">58.250 in</option>
<option value="58.375">58.375 in</option>
<option value="58.500">58.500 in</option>
<option value="58.625">58.625 in</option>
<option value="58.750">58.750 in</option>
<option value="58.875">58.875 in</option>
<option value="59">59 inches</option>
<option value="59.125">59.125 in</option>
<option value="59.250">59.250 in</option>
<option value="59.375">59.375 in</option>
<option value="59.500">59.500 in</option>
<option value="59.625">59.625 in</option>
<option value="59.750">59.750 in</option>
<option value="59.875">59.875 in</option>
<option value="60">60 inches</option>
<option value="60.125">60.125 in</option>
<option value="60.250">60.250 in</option>
<option value="60.375">60.375 in</option>
<option value="60.500">60.500 in</option>
<option value="60.625">60.625 in</option>
<option value="60.750">60.750 in</option>
<option value="60.875">60.875 in</option>
<option value="61">61 inches</option>
<option value="61.125">61.125 in</option>
<option value="61.250">61.250 in</option>
<option value="61.375">61.375 in</option>
<option value="61.500">61.500 in</option>
<option value="61.625">61.625 in</option>
<option value="61.750">61.750 in</option>
<option value="61.875">61.875 in</option>
<option value="62">62 inches</option>
<option value="62.125">62.125 in</option>
<option value="62.250">62.250 in</option>
<option value="62.375">62.375 in</option>
<option value="62.500">62.500 in</option>
<option value="62.625">62.625 in</option>
<option value="62.750">62.750 in</option>
<option value="62.875">62.875 in</option>
<option value="63">63 inches</option>
<option value="63.125">63.125 in</option>
<option value="63.250">63.250 in</option>
<option value="63.375">63.375 in</option>
<option value="63.500">63.500 in</option>
<option value="63.625">63.625 in</option>
<option value="63.750">63.750 in</option>
<option value="63.875">63.875 in</option>
<option value="64">64 inches</option>
<option value="64.125">64.125 in</option>
<option value="64.250">64.250 in</option>
<option value="64.375">64.375 in</option>
<option value="64.500">64.500 in</option>
<option value="64.625">64.625 in</option>
<option value="64.750">64.750 in</option>
<option value="64.875">64.875 in</option>
<option value="65">65 inches</option>
<option value="65.125">65.125 in</option>
<option value="65.250">65.250 in</option>
<option value="65.375">65.375 in</option>
<option value="65.500">65.500 in</option>
<option value="65.625">65.625 in</option>
<option value="65.750">65.750 in</option>
<option value="65.875">65.875 in</option>
<option value="66">66 inches</option>
<option value="66.125">66.125 in</option>
<option value="66.250">66.250 in</option>
<option value="66.375">66.375 in</option>
<option value="66.500">66.500 in</option>
<option value="66.625">66.625 in</option>
<option value="66.750">66.750 in</option>
<option value="66.875">66.875 in</option>
<option value="67">67 inches</option>
<option value="67.125">67.125 in</option>
<option value="67.250">67.250 in</option>
<option value="67.375">67.375 in</option>
<option value="67.500">67.500 in</option>
<option value="67.625">67.625 in</option>
<option value="67.750">67.750 in</option>
<option value="67.875">67.875 in</option>
<option value="68">68 inches</option>
<option value="68.125">68.125 in</option>
<option value="68.250">68.250 in</option>
<option value="68.375">68.375 in</option>
<option value="68.500">68.500 in</option>
<option value="68.625">68.625 in</option>
<option value="68.750">68.750 in</option>
<option value="68.875">68.875 in</option>
<option value="69">69 inches</option>
<option value="69.125">69.125 in</option>
<option value="69.250">69.250 in</option>
<option value="69.375">69.375 in</option>
<option value="69.500">69.500 in</option>
<option value="69.625">69.625 in</option>
<option value="69.750">69.750 in</option>
<option value="69.875">69.875 in</option>
<option value="70">70 inches</option>
<option value="70.125">70.125 in</option>
<option value="70.250">70.250 in</option>
<option value="70.375">70.375 in</option>
<option value="70.500">70.500 in</option>
<option value="70.625">70.625 in</option>
<option value="70.750">70.750 in</option>
<option value="70.875">70.875 in</option>
<option value="71">71 inches</option>
<option value="71.125">71.125 in</option>
<option value="71.250">71.250 in</option>
<option value="71.375">71.375 in</option>
<option value="71.500">71.500 in</option>
<option value="71.625">71.625 in</option>
<option value="71.750">71.750 in</option>
<option value="71.875">71.875 in</option>
<option value="72">72 inches</option>
</select>
</div>

<div class="order_option" id="StemHeight">
<label>Stem Height
</label>
<br>
<select name="StemHeight">
<option value="1">1 inches</option>
<option value="2">2 inches</option>
<option value="3">3 inches</option>
<option value="4">4 inches</option>
<option value="5">5 inches</option>
<option value="6">6 inches</option>
<option value="7">7 inches</option>
<option value="8">8 inches</option>
<option value="9">9 inches</option>
<option value="10">10 inches</option>
<option value="11">11 inches</option>
<option value="12">12 inches</option>
<option value="13">13 inches</option>
<option value="14">14 inches</option>
</select>
</div>

<div class="order_option" id="Finish">
<label>Finish
</label>
<div class="order_option_second">
<input name="Finish" value="C" type="radio">Chrome
</div>
<div class="order_option_second">
<input name="Finish" value="BC" type="radio">Brushed Chrome
</div>
<div class="order_option_second">
<input name="Finish" value="BKC" type="radio">Black Chrome
</div>
<div class="order_option_second">
<input name="Finish" value="ABK" type="radio">Anodized black
</div>
<div class="order_option_second">
<input name="Finish" value="G" type="radio">Gold
</div>
<div class="order_option_second">
<input name="Finish" value="BB" type="radio">Brushed Brass
</div>
<div class="order_option_second">
<input name="Finish" value="CUS" type="radio">Custom
</div>
</div>

<div class="order_option" id="Resolution">
<label>Resolution
</label>
<div class="order_option_second">
<input name="Resolution" value="DIS" type="radio">Distinct
</div>
</div>

<div class="order_option" id="Color">
<label>Color
</label>
<div class="order_option_second">
<input name="Color" value="2700K" type="radio">2700 K
</div>
<div class="order_option_second">
<input name="Color" value="3000K" type="radio">3000 K
</div>
<div class="order_option_second">
<input name="Color" value="3500K" type="radio">3500 K
</div>
<div class="order_option_second">
<input name="Color" value="4000K" type="radio">4000 K
</div>
<div class="order_option_second">
<input name="Color" value="CUS" type="radio">Custom
</div>
</div>

<div class="order_option" id="Wireexit">
<label>Wire exit
</label>
<div class="order_option_second">
<input name="Wireexit" value="L" type="radio">Left
</div>
<div class="order_option_second">
<input name="Wireexit" value="R" type="radio">Right
</div>
</div>
<div style="clear:both;">
</div>
<input class="bouton" value="Get ordering code" type="submit">
<input name="langue" value="EN" type="hidden">
<br>  
<input name="Model_name" value="Adena" type="hidden">
<input name="except" value="" type="hidden">
</form>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>
<script type="text/javascript">
//var urlMail = '<?php bloginfo('template_url'); ?>/form_order.php';
$("#order_form").bind("submit", function() {
        $.ajax({
            type        : "POST",
            cache       : false,
            url         : '<?php bloginfo('template_url'); ?>/form_order.php',
            data        : $(this).serializeArray(),
            success: function(data) {
                $.fancybox(data);
            }
        });
        return false;
    });


/* AJAX */
function xmlhttpPost(strURL) {
    var xmlHttpReq = false;
    var self = this;
    // Mozilla/Safari
    if (window.XMLHttpRequest) {
        self.xmlHttpReq = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject) {
        self.xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
    }
    self.xmlHttpReq.open('POST', strURL, true);
    self.xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    self.xmlHttpReq.onreadystatechange = function() {
        if (self.xmlHttpReq.readyState == 4) {
            updatepage(self.xmlHttpReq.responseText);
        }
    }
    self.xmlHttpReq.send(getquerystring());
}

function getquerystring() {
    var form     = document.forms['f1'];
    var word = form.word.value;
    qstr = 'w=' + escape(word);  // NOTE: no '?' before querystring
    return qstr;
}

function updatepage(str){
    document.getElementById("result").innerHTML = str;
}
</script>