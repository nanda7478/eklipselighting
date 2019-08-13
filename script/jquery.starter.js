$(function() {
	/* TABS*/
	$(".slidetabs").tabs(".images > div", {
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

		
	/* ORDER FORM */
	$("#order_form").bind("submit", function() {
		$.ajax({
			type        : "POST",
			cache       : false,
			url         : "/form_order.php",
			data        : $(this).serializeArray(),
			success: function(data) {
				$.fancybox(data);
			}
		});
		return false;
	});
	/* CONTACT FORM */
	$("#contact_form").bind("submit", function() {
		$.ajax({
			type        : "POST",
			cache       : false,
			url         : "form_contact_send.php",
			data        : $(this).serializeArray(),
			success: function(data) {
				$.fancybox(data);
			}
		});
		return false;
	});
	/* QUOTE FORM */
	$("#quote_form").bind("submit", function() {
		$.ajax({
			type        : "POST",
			cache       : false,
			url         : "form_quote_send.php",
			data        : $(this).serializeArray(),
			success: function(data) {
				$.fancybox(data);
			}
		});
		return false;
	});

	/* IMAGES */
	$("a.grouped_elements").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFromAlt'      : true,						
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over"><div class="fancybox_numero">' + (currentIndex + 1) + '/' + currentArray.length + (title.length ? '</div>' + $(currentArray[currentIndex]).find('img').attr('alt') : '') + '</span>';
				}
	});
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});		
	
	$("select[name='lmf']").change(function(){
		elt=$(this);
		$.ajax({
			type        : "POST",
			cache       : false,
			url         : "form_subscription_handler.php",
			data        : "action=sel_product_name&pfid="+elt.val(),
			dataType    : "html",
			success: function(data) {
				
				$("select[name='lmn[]']").html(data);
			}
		});
	});
	
	$("#subscribe_form").bind("submit", function() {
		$.ajax({
			type        : "POST",
			cache       : false,
			url         : "form_subscription_handler.php",
			data        : $(this).serializeArray(),
			dataType	: "json",
			success: function(retour) {
				if(retour.ret==1)
					//$(location).attr('href','subscribe-list');
					alert("Thank you for your Subscription");
				else if(retour.ret==0)
				{
					$('input,select').removeClass("error");
					$.each( retour.msg, function( key, value ) {
						$('input[name="'+value+'"],select[name="'+value+'"]').addClass("error");
						});
				}
				else alert(retour.msg)
				
			},
			error: function(){
				alert ("An error occured. Please try again.");
			}
		});
		return false;
	});
	
	$("#exportXLS").bind("click", function() {
		
		$(location).attr('href','download_xls.php');
			
	});
	
});

$("a.grouped_elements").fancybox();

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
function CheckUncheckLMF(val)
{
	if(val!="Send me specification sheet")
	{
		document.getElementById("lmf").removeAttribute("required");
		document.getElementById("lmn").removeAttribute("required");
	}
	else {
		document.getElementById("lmf").setAttribute("required","required");
		document.getElementById("lmn").setAttribute("required","required");
	}
}
