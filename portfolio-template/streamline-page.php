<?php
/*
  Display Template Name: StreamLine
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
				<h4 class="current">Overview</h4>
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
<input checked="checked" name="Model" value="S" type="radio">Streamline
</div>
</div>

<div class="order_option" id="Voltage">
<label>Voltage</label>
<a href="#" class="ordering_moreinfo"><span><div class="arr"></div>Voltage is a measure of the energy of electricity, specifically, it is the energy per unit charge. It is calculated in Volts.</span></a>
<div class="order_option_second">
<input name="Voltage" value="12V" type="radio">12 Volts 
</div>
<div class="order_option_second">
<input name="Voltage" value="24V" type="radio">24 Volts
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

<div class="order_option" id="LightEngine">
<label>Light Engine</label>
<a href="#" class="ordering_moreinfo"><span><div class="arr"></div>The length of a linear lighting fixture is always calculated in inches. Please refer to the multiple scale to order the appropriate multiple length for your project.</span></a>
<div class="order_option_second">
<input name="LightEngine" value="F" type="radio">Focus 
</div>
<div class="order_option_second">
<input name="LightEngine" value="W" type="radio">Wide 
</div>
<div class="order_option_second">
<input name="LightEngine" value="MB" type="radio">Mild Blend
</div>
<div class="order_option_second">
<input name="LightEngine" value="PB" type="radio">Perfect Blend
</div>
</div>

<div class="order_option" id="Length">
<label>Length
</label>
<br>
<select name="Length">
<option value="8">8 inches</option>
<option value="10">10 inches</option>
<option value="12">12 inches</option>
<option value="14">14 inches</option>
<option value="16">16 inches</option>
<option value="18">18 inches</option>
<option value="20">20 inches</option>
<option value="22">22 inches</option>
<option value="24">24 inches</option>
<option value="26">26 inches</option>
<option value="28">28 inches</option>
<option value="30">30 inches</option>
<option value="32">32 inches</option>
<option value="34">34 inches</option>
<option value="36">36 inches</option>
<option value="38">38 inches</option>
<option value="40">40 inches</option>
<option value="42">42 inches</option>
<option value="44">44 inches</option>
<option value="46">46 inches</option>
<option value="48">48 inches</option>
<option value="50">50 inches</option>
<option value="52">52 inches</option>
<option value="54">54 inches</option>
<option value="56">56 inches</option>
<option value="58">58 inches</option>
<option value="60">60 inches</option>
<option value="62">62 inches</option>
<option value="64">64 inches</option>
<option value="66">66 inches</option>
<option value="68">68 inches</option>
<option value="70">70 inches</option>
<option value="72">72 inches</option>
</select>
</div>

<div class="order_option" id="EndCap">
<label>End Cap
</label>
<div class="order_option_second">
<input name="EndCap" value="E" type="radio">E
</div>
<div class="order_option_second">
<input name="EndCap" value="X" type="radio">X
</div>
</div>

<div class="order_option" id="Wiring">
<label>Wiring
</label>
<div class="order_option_second">
<input name="Wiring" value="L" type="radio">Left 
</div>
<div class="order_option_second">
<input name="Wiring" value="R" type="radio">Right 
</div>
</div>

<div class="order_option" id="Optics">
<label>Optics
</label>
<div class="order_option_second">
<input name="Optics" value="24°" type="radio">24° 
</div>
<div class="order_option_second">
<input name="Optics" value="35°" type="radio">35° 
</div>
<div class="order_option_second">
<input name="Optics" value="46°" type="radio">46°
</div>
<div class="order_option_second">
<input name="Optics" value="74°" type="radio">74°
</div>
<div class="order_option_second">
<input name="Optics" value="20°x48°" type="radio">20° x 48° 
</div>
<div class="order_option_second">
<input name="Optics" value="NA" type="radio">None 
</div>
</div>

<div class="order_option" id="Angle">
<label>Angle
</label>
<div class="order_option_second">
<input name="Angle" value="30°" type="radio">30°
</div>
<div class="order_option_second">
<input name="Angle" value="60°" type="radio">60°
</div>
</div>

<div class="order_option" id="Application">
<label>Application
</label>
<div class="order_option_second">
<input name="Application" value="D" type="radio">D = Downlight
</div>
<div class="order_option_second">
<input name="Application" value="W" type="radio">W = Wall
</div>
<div class="order_option_second">
<input name="Application" value="C" type="radio">C = Cabinet
</div>
<div class="order_option_second">
<input name="Application" value="V" type="radio">V = Vaulted
</div>
</div>

<div class="order_option" id="Stem">
<label>Stem
</label>
<div class="order_option_second">
<input name="Stem" value="6" type="radio">6 inches
</div>
<div class="order_option_second">
<input name="Stem" value="
12" type="radio">12 inches
</div>
<div class="order_option_second">
<input name="Stem" value="
15" type="radio">15 inches
</div>
<div class="order_option_second">
<input name="Stem" value="
24" type="radio">24 inches
</div>
<div class="order_option_second">
<input name="Stem" value="
36" type="radio">36 inches
</div>
<div class="order_option_second">
<input name="Stem" value="
CUS" type="radio">Custom
</div>
</div>

<div class="order_option" id="Film">
<label>Film
</label><a href="#" class="ordering_moreinfo">
<span>
<div class="arr">
</div><img src="<?php bloginfo('template_url');?>/images/Filtre-Filtre.png">
Frosted filter.
<br>
<img src="<?php bloginfo('template_url');?>/images/Filtre-None.png">
No filter / Clear filter.
</span></a>
<div class="order_option_second">
<input name="Film" value="CF" type="radio">Clear Film 
</div>
<div class="order_option_second">
<input name="Film" value="FF" type="radio">Frosted Film 
</div>
<div class="order_option_second">
<input name="Film" value="NA" type="radio">None
</div>
<div class="order_option_second">
<input name="Film" value="CUS" type="radio">Custom
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

<div class="order_option" id="Finish">
<label>Finish
</label>
<div class="order_option_second">
<input name="Finish" value="ABK" type="radio">Anodized black
</div>
<div class="order_option_second">
<input name="Finish" value="C" type="radio">Chrome
</div>
<div class="order_option_second">
<input name="Finish" value="BC" type="radio">Brushed Chrome
</div>
<div class="order_option_second">
<input name="Finish" value="CUS" type="radio">Custom
</div>
</div>

<div style="clear:both;">
</div>
<input class="bouton" value="Get ordering code" type="submit">
<input name="langue" value="EN" type="hidden">
<br>
<input name="Model_name" value="StreamLine" type="hidden">
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