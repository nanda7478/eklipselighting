<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="main_footer">
          <div class="row">
          <div class="col-lg-5 col-md-5">
          <div class="site-info">

          <span>© 2018 - Eklipse Architectural Lighting, Inc. </span>
          <a class="imprint" href="<?php echo site_url();?>/termsandconditions/">Terms and conditions</a>
			</div><!-- .site-info -->
          </div>

          <div class="col-lg-4 col-md-3 proud_member">
          	<span>Proud member of <img src="<?php echo site_url();?>/wp-content/uploads/2018/12/IALD-logo.jpg" style="width:60px;"></span>

          </div>
           
           <div class="col-lg-3 col-md-4">
           	<div class="footer_rightside footer_social"><span> Quote Empty (Beta) </span>
           		<ul>
           			<li>
           		<a target="_blank" class="linkedin" href="http://www.linkedin.com/company/eklipse-architectural-lighting"></a>
           		</li>
           		<li>
           		<a target="_blank" class="googleplus" href="https://plus.google.com/108298496236818406433" rel="publisher"></a>
           		</li>
           		<li>
           		<a target="_blank" class="facebook" href="https://www.facebook.com/eklipselighting"></a>
           		</li>
           		</ul>
           	</div>

           </div>
			

            </div>
			</div>
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<?php 
if(is_front_page())
{
?>
<script src="<?php bloginfo('template_url');?>/script/jquery.tools.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
$.noConflict();
   	jQuery( document ).ready(function() {
	/* TABS*/
	jQuery(".slidetabs").tabs(".images > div", {
		effect: 'fade',
		fadeOutSpeed: "slow",
		rotate: true 
		})
		.slideshow({
			autoplay: true, 
			interval: 5000
		});
		
	/* ACCORDEON */
	$.tools.tabs.addEffect("slide", function(i, done) {
		// 1. upon hiding, the active pane has a ruby background color
		this.getPanes().slideUp().css({});
		// 2. after a pane is revealed, its background is set to its original color (transparent)
		this.getPanes().eq(i).slideDown(function()  {
			$(this).css({backgroundColor: 'transparent'});
			// the supplied callback must be called after the effect has finished its job
			done.call();
		});
	});
	$("#accordion").tabs("#accordion div.pane", {tabs: 'h2', effect: 'slide', initialIndex: 0});
	$("#accordion2").tabs("#accordion2 div.pane", {tabs: 'h2', effect: 'slide', initialIndex: 1000});

	/* SMOOTH SCROLL */
	//Hide (Collapse) the toggle containers on load
	$(".hide-container").hide();
       
	//Switch the "Open" and "Close" state per click
	$("#trigger1").toggle(function(){
		$(this).addClass("active");
		}, function () {
		$(this).removeClass("active");
	});
 
	//Slide up and down on click
	$("#trigger1").click(function(){
		$(this).next(".hide-container").slideToggle("slow");
	});
}); 
   </script>
 <?php } ?>
</body>
</html>
