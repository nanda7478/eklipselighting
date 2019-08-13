<?php
/*
  Display Template Name: PSB
*/
get_header();
?>
<?php
while(have_posts()): the_post();
?>
<div class="container">
<div class="back_btn">
<i class="fa fa-angle-double-left" aria-hidden="true"></i> <a href="<?php echo site_url();?>/luminaire">Back to  Portfolio</a> 
	
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
<input checked="checked" name="Model" value="PSB" type="radio">Power Supply
</div>
</div>

<div class="order_option" id="Voltage">
<label>Voltage</label>
<a href="#" class="ordering_moreinfo"><span><div class="arr"></div>Voltage is a measure of the energy of electricity, specifically, it is the energy per unit charge. It is calculated in Volts.</span></a>
<div class="order_option_second">
<input name="Voltage" value="12V" type="radio">12 Volts
</div>
<div class="order_option_second">
<input name="Voltage" value="15V" type="radio">15 volts
</div>
<div class="order_option_second">
<input name="Voltage" value="24V" type="radio">24 volts
</div>
</div>

<div class="order_option" id="Power">
<label>Power
</label>
<div class="order_option_second">
<input name="Power" value="5W" type="radio">5 Watts
</div>
<div class="order_option_second">
<input name="Power" value="10W" type="radio">10 Watts
</div>
<div class="order_option_second">
<input name="Power" value="15W" type="radio">15 Watts
</div>
<div class="order_option_second">
<input name="Power" value="20W" type="radio">20 Watts
</div>
<div class="order_option_second">
<input name="Power" value="25W" type="radio">25 Watts
</div>
<div class="order_option_second">
<input name="Power" value="30W" type="radio">30 Watts
</div>
<div class="order_option_second">
<input name="Power" value="35W" type="radio">35 Watts
</div>
<div class="order_option_second">
<input name="Power" value="40W" type="radio">40 Watts
</div>
<div class="order_option_second">
<input name="Power" value="45W" type="radio">45 Watts
</div>
<div class="order_option_second">
<input name="Power" value="50W" type="radio">50 Watts
</div>
<div class="order_option_second">
<input name="Power" value="55W" type="radio">55 Watts
</div>
<div class="order_option_second">
<input name="Power" value="60W" type="radio">60 Watts / Default
</div>
<div class="order_option_second">
<input name="Power" value="65W" type="radio">65 Watts
</div>
<div class="order_option_second">
<input name="Power" value="70W" type="radio">70 Watts
</div>
<div class="order_option_second">
<input name="Power" value="75W" type="radio">75 Watts
</div>
<div class="order_option_second">
<input name="Power" value="80W" type="radio">80 Watts
</div>
<div class="order_option_second">
<input name="Power" value="85W" type="radio">85 Watts
</div>
<div class="order_option_second">
<input name="Power" value="90W" type="radio">90 Watts
</div>
<div class="order_option_second">
<input name="Power" value="95W" type="radio">95 Watts
</div>
<div class="order_option_second">
<input name="Power" value="100W" type="radio">100 Watts / Default
</div>
</div>

<div class="order_option" id="AGPlugType">
<label>AG Plug Type
</label>
<div class="order_option_second">
<input name="AGPlugType" value="HW" type="radio">HW = Hard-Wire (Default)
</div>
<div class="order_option_second">
<input name="AGPlugType" value="PC" type="radio">PC = Power Cord (North America)
</div>
</div>
<div style="clear:both;">
</div>
<input class="bouton" value="Get ordering code" type="submit">
<input name="langue" value="EN" type="hidden">
<br>
<input name="Model_name" value="PSB" type="hidden">
<input name="except" value="" type="hidden">
</form>
			</div>
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