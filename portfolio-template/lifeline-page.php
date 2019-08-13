<?php
/*
  Display Template Name: Lifeline Page
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
				<form action='' method='POST' id='order_form'> 
	<style>.order_option {height:60px;}</style>
	<div class='order_option' id='Model'>
	<label>Model</label>
	<div class='order_option_second'>
	<input type='radio' checked='checked' name='Model' value='LL' />Lifeline</div>
	</div>

	<div class='order_option' id='Voltage'>
	<label>Voltage</label>
    <a href="#" class="ordering_moreinfo"><span><div class="arr"></div>Voltage is a measure of the energy of electricity, specifically, it is the energy per unit charge. It is calculated in Volts.</span></a>
	<div class='order_option_second'>
	<input type='radio' name='Voltage' value='24V'>24 volts</div>
	</div>

	<div class='order_option' id='Length'>
	<label>Length</label>
	<br>
    <select name='Length'>
    <option value='2_inches'>2_inches</option>
    <option value='3_inches'>3_inches</option>
    <option value='4_inches'>4_inches</option>
    <option value='5_inches'>5_inches</option>
    <option value='6_inches'>6_inches</option>
    <option value='7_inches'>7_inches</option>
    <option value='8_inches'>8_inches</option>
    <option value='9_inches'>9_inches</option>
    <option value='10_inches'>10_inches</option>
    <option value='11_inches'>11_inches</option>
    <option value='12_inches'>12_inches</option>
    <option value='13_inches'>13_inches</option>
    <option value='14_inches'>14_inches</option>
    <option value='15_inches'>15_inches</option>
    <option value='16_inches'>16_inches</option>
    <option value='17_inches'>17_inches</option>
    <option value='18_inches'>18_inches</option>
    <option value='19_inches'>19_inches</option>
    <option value='20_inches'>20_inches</option>
    <option value='21_inches'>21_inches</option>
    <option value='22_inches'>22_inches</option>
    <option value='23_inches'>23_inches</option>
    <option value='24_inches'>24_inches</option>
    <option value='25_inches'>25_inches</option>
    <option value='26_inches'>26_inches</option>
    <option value='27_inches'>27_inches</option>
    <option value='28_inches'>28_inches</option>
    <option value='29_inches'>29_inches</option>
    <option value='30_inches'>30_inches</option>
    <option value='31_inches'>31_inches</option>
    <option value='32_inches'>32_inches</option>
    <option value='33_inches'>33_inches</option>
    <option value='34_inches'>34_inches</option>
    <option value='35_inches'>35_inches</option>
    <option value='36_inches'>36_inches</option>
    <option value='37_inches'>37_inches</option>
    <option value='38_inches'>38_inches</option>
    <option value='39_inches'>39_inches</option>
    <option value='40_inches'>40_inches</option>
    <option value='41_inches'>41_inches</option>
    <option value='42_inches'>42_inches</option>
    <option value='43_inches'>43_inches</option>
    <option value='44_inches'>44_inches</option>
    <option value='45_inches'>45_inches</option>
    <option value='46_inches'>46_inches</option>
    <option value='47_inches'>47_inches</option>
    <option value='48_inches'>48_inches</option>
    <option value='49_inches'>49_inches</option>
    <option value='50_inches'>50_inches</option>
    <option value='51_inches'>51_inches</option>
    <option value='52_inches'>52_inches</option>
    <option value='53_inches'>53_inches</option>
    <option value='54_inches'>54_inches</option>
    <option value='55_inches'>55_inches</option>
    <option value='56_inches'>56_inches</option>
    <option value='57_inches'>57_inches</option>
    <option value='58_inches'>58_inches</option>
    <option value='59_inches'>59_inches</option>
    <option value='60_inches'>60_inches</option>
    <option value='61_inches'>61_inches</option>
    <option value='62_inches'>62_inches</option>
    <option value='63_inches'>63_inches</option>
    <option value='64_inches'>64_inches</option>
    <option value='65_inches'>65_inches</option>
    <option value='66_inches'>66_inches</option>
    <option value='67_inches'>67_inches</option>
    <option value='68_inches'>68_inches</option>
    <option value='69_inches'>69_inches</option>
    <option value='70_inches'>70_inches</option>
    <option value='71_inches'>71_inches</option>
    <option value='72_inches'>72_inches</option>
    <option value='Custom'>Custom</option>
    </select>
    </div>
    <div class='order_option' id='Finish'>
    <label>Finish</label>
    <div class='order_option_second'>
    <input type='radio' name='Finish' value='ACL'>Anodized Clear</div>
    <div class='order_option_second'>
    <input type='radio' name='Finish' value='ABK'>Anodized black</div>
    <div class='order_option_second'>
    <input type='radio' name='Finish' value='CUS'>Custom</div>
    </div>
    <div style="clear:both;">
</div>
    <input class='bouton' type='submit' name="submit" value='Get ordering code' />
    <input type='hidden' name='langue' value='EN'><br>
	<input type='hidden' name='Model_name' value='Lifeline'>
	<input type='hidden' name='except' value=''>
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