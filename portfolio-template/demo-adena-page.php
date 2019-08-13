<?php
/*
  Display Template Name: Demo Adena
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
<!-- <?php while(have_rows('model_repeater')): the_row();?>  
<div class="order_option" id="Model">
<label><?php the_sub_field('model_title');?>
</label>
<?php while(have_rows('model_name')): the_row();?>
<div class="order_option_second">
<input checked="checked" name="Model" value="A" type="radio"><?php the_sub_field('model');?>
</div>
<?php endwhile;?>
</div>
<?php endwhile;?> -->

<!-- <?php while(have_rows('voltage_section')): the_row();?> 
<div class="order_option" id="Voltage">
<label><?php the_sub_field('voltage_title');?></label>
<a href="#" class="ordering_moreinfo"><span><div class="arr"></div>Voltage is a measure of the energy of electricity, specifically, it is the energy per unit charge. It is calculated in Volts.</span></a>

<?php while(have_rows('voltage_repeater')): the_row();?>
<?php
$voltage_name = get_sub_field('voltage_name');
$voltage = explode(" ", $voltage_name);
?>
<div class="order_option_second">
<input name="Voltage" value="<?php echo $voltage[0];?>V" type="radio"><?php the_sub_field('voltage_name');?>
</div>
<?php endwhile;?>
</div>
<?php endwhile;?> -->

<!-- <?php while(have_rows('wattagefoot_section')): the_row();?>
<div class="order_option" id="WattageFoot">
<label><?php the_sub_field('wattagefoot_title');?>
</label>
 <?php while(have_rows('wattagefoot_repeater')): the_row();?>
 <?php
  $wattagefoot = get_sub_field('wattagefoot_name');
  $wattage = explode(" ", $wattagefoot);
 ?>
<div class="order_option_second">
<input name="WattageFoot" value="<?php echo $wattage[0];?>W" type="radio"><?php the_sub_field('wattagefoot_name');?>
</div>
 <?php endwhile;?>
</div>
<?php endwhile;?> -->

<!-- <?php while(have_rows('length_section')): the_row();?>
<div class="order_option" id="Length">
<label><?php the_sub_field('length_title');?></label>
<a href="#" class="ordering_moreinfo"><span><div class="arr"></div>The length of a linear lighting fixture is always calculated in inches. Please refer to the multiple scale to order the appropriate multiple length for your project.</span></a>
<br>
<select name="Length">
<?php while(have_rows('length_repeater')): the_row();?>
<?php
$length_name = get_sub_field('length_name');
$length = explode(" ", $length_name);
?>	
<option value="<?php echo $length[0];?>"><?php the_sub_field('length_name');?></option>
<?php endwhile;?>
</select>
</div>
<?php endwhile;?> -->

<!-- <?php while(have_rows('stem_height_section')): the_row();?>
<div class="order_option" id="StemHeight">
<label><?php the_sub_field('stem_height_title');?>
</label>
<br>
<select name="StemHeight">
 <?php while(have_rows('stem_height_repeater')): the_row();?>
 <?php
  $stem_height = get_sub_field('stem_height_name');
  $stem = explode(" ", $stem_height);
 ?>
<option value="<?php echo $stem[0];?>"><?php the_sub_field('stem_height_name');?></option>
 <?php endwhile;?>
</select>
</div>
<?php endwhile;?> -->

<!-- <?php while(have_rows('finish_section')): the_row();?>
<div class="order_option" id="Finish">
<label><?php the_sub_field('finish_title');?>
</label>
<?php while(have_rows('finish_repeater')): the_row();?>
<?php
$name = get_sub_field('finish_name');
$test1 = explode(" ",$name);
$x = $test1[0];
$y = $test1[1];
?>
<div class="order_option_second">
<input name="Finish" value="<?php echo substr ($x, 0, 1); echo substr ($y, 0, 1);?>" type="radio"><?php the_sub_field('finish_name');?>
</div>
<?php
endwhile;
?>
</div>
<?php endwhile;?> -->

<!-- <?php while(have_rows('resolution_section')): the_row();?>
<div class="order_option" id="Resolution">
<label><?php the_sub_field('resolution_title');?>
</label>
<?php while(have_rows('resolution_repeater')): the_row();?>
<div class="order_option_second">
<input name="Resolution" value="<?php the_sub_field('resolution_name');?>" type="radio"><?php the_sub_field('resolution_name');?>
</div>
<?php endwhile;?>
</div>
<?php endwhile;?> -->

<!-- <?php while(have_rows('color_section')): the_row();?>
<div class="order_option" id="Color">
<label><?php the_sub_field('color_title');?>
</label>
<?php while(have_rows('color_repeater')): the_row();?>
<div class="order_option_second">
<input name="Color" value="<?php the_sub_field('color_name');?>" type="radio"><?php the_sub_field('color_name');?>
</div>
<?php endwhile;?>
</div>
<?php endwhile;?> -->

<!-- <?php while(have_rows('wire_exit_section')): the_row();?>
<div class="order_option" id="Wireexit">
<label><?php the_sub_field('wire_exit_title');?>
</label>
<?php while(have_rows('wire_exit_repeater')): the_row();?>
<?php
$name = get_sub_field('wire_exit_name');
$test1 = explode(" ",$name);
$x = $test1[0];
$y = $test1[1];
?>
<div class="order_option_second">
<input name="Wireexit" value="<?php echo substr ($x, 0, 1); echo substr ($y, 0, 1);?>" type="radio"><?php the_sub_field('wire_exit_name');?>
</div>
<?php endwhile;?>
</div>
<?php endwhile;?> -->

<?php while(have_rows('form_columns_section')): the_row();?>
<?php $form_id = get_sub_field('form_column_name');?>
<div class="order_option" id="<?php echo preg_replace('/\\s/','',$form_id);?>">
<label><?php the_sub_field('form_column_name');?>
</label>
<?php $form_value = get_sub_field('form_column_name');?>
<?php if(have_rows('form_column_repeater')) { ?>
<?php while(have_rows('form_column_repeater')): the_row();?>
<div class="order_option_second">
<input name="form_column[<?php echo preg_replace('/\\s/','',$form_value);?>]" value="<?php the_sub_field('form_column_value');?>" type="radio"><?php the_sub_field('form_column_value');?>
</div>
<?php endwhile;?>
<?php } if(have_rows('form_column_select_repeater')) { ?>
 <br><select name="form_column[<?php echo preg_replace('/\\s/','',$form_value);?>]">
 <?php while(have_rows('form_column_select_repeater')): the_row();?>
<option value="<?php the_sub_field('option_value');?>"><?php the_sub_field('option_value');?></option>
 <?php endwhile;?>
</select>
<?php } ?>
</div>
<?php endwhile;?>



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