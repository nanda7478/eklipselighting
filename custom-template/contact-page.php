<?php
/*
 Display Template Name: Contact Us
*/
get_header();
?>
<div class="contact-page-section">
	<div class="container">
		<div class="row">
		    <?php
		    if(have_rows('contact_address_flexible')):
		    	while(have_rows('contact_address_flexible')): the_row();
		    if(get_row_layout() == 'headquarter_section' ):
		    	?>
			<div class="col-lg-4 col-md-4">
				<div class="border_heading"><div class="icon i_contact"></div> <h1><?php the_sub_field('head_title');?></h1></div>
				<div class="contact-page-content contct_spc">
					<?php the_sub_field('head_content');?>
				</div>
			</div>
			<?php
			endif;
			endwhile;
			endif;
			?>
			<div class="col-lg-8 col-md-8">
			<div class="border_heading">
                <div class="icon i_contactus"></div>
                <h1><?php the_field('contact_form_title');?></h1></div>
                <div class="contact_form contct_spc">
			<?php echo do_shortcode('[contact-form-7 html_id="contact-form-53" title="Contact Form"]');?>
			</div></div>
		</div>
     
     <div class="contact-address-section">
     	<div class="row">
     	<?php
		    if(have_rows('contact_address_flexible')):
		    	while(have_rows('contact_address_flexible')): the_row();
		    if(get_row_layout() == 'canada_section' ):
		    	?>
     		<div class="col-lg-4 col-md-4">
                <div class="border_heading"><div class="icon i_contact_canada"></div>
     			<h1><?php the_sub_field('canada_title');?></h1>
            </div>
				<div class="contact-page-content1">
					<?php the_sub_field('canada_content');?>
				</div>
     		</div>
     		<?php 
     		elseif(get_row_layout() == 'us_section'):
            ?>
     		<div class="col-lg-4 col-md-4">
                <div class="border_heading"><div class="icon i_contact_usa"></div>
     			<h1><?php the_sub_field('us_title');?></h1>
            </div>
				<div class="contact-page-content1">
					<?php the_sub_field('us_content');?>
				</div>
     		</div>
     		<?php
     		elseif(get_row_layout() == 'worldwide_section'):
     		?>
     		<div class="col-lg-4 col-md-4">
                <div class="border_heading">
                    <div class="icon i_contact_worldwide"></div>
     			<h1><?php the_sub_field('worldwide_title');?></h1>
            </div>
				<div class="contact-page-content1">
					<?php the_sub_field('worldwide_content');?>
				</div>
     		</div>
     		<?php
     		endif;
     		endwhile;
     		endif;
     		?>
     	</div>

     </div>

	</div>
</div>

<?php
get_footer();
?>

<script type="text/javascript">
/*
From JavaScript and Forms Tutorial at dyn-web.com
Find information and updates at http://www.dyn-web.com/tutorials/forms/
*/

// removes all option elements in select list 
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

// anonymous function assigned to onchange event of controlling select list
document.forms['contact-form-53'].elements['lmf'].onchange = function(e) {
    // name of associated select list
    var relName = 'lmn[]';
    
    // reference to associated select list 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select list (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select list and data for new options
    appendDataToSelect(relList, obj);
};

// object literal holds data for optgroup/option elements
var Select_List_Data = {
    
    // name of associated select list
    'lmn[]': {
        
        // names match option values in controlling select list
        'HORIZON FAMILY': {
            text: ['Horizon', 'Horizon Wet', 'Horizon Flex', 'Horizon V', 'Horizon Contour'],
            value: ['Horizon', 'Horizon Wet', 'Horizon Flex', 'Horizon V', 'Horizon Contour']
        },
        'HORIZON MINI FAMILY': {
            text: ['Horizon Mini', 'Horizon Mini Wet', 'Horizon Mini Flex'],
            value: ['Horizon Mini', 'Horizon Mini Wet', 'Horizon Mini Flex']
        },
        'FLOW FAMILY': {
            text: ['Flow', 'Flow Cove', 'Flow Flex'],
            value: ['Flow', 'Flow Cove', 'Flow Flex']
        },
        'SPECIFIC LINEAR': {
            text: ['Edge', 'StreamLine'],
            value: ['Edge', 'StreamLine']
        },
        'ORION FAMILY': {
            text: ['Orion 4', 'Orion 4+'],
            value: ['Orion 4', 'Orion 4+']
        },
        'TRACK FAMILY': {
            text: ['Argo', 'Latitude Rail'],
            value: ['Argo', 'Latitude Rail']
        },
        'LIGHT CONTROL': {
            text: ['Light Manager', 'PSB'],
            value: ['Light Manager', 'PSB']
        },
        'LIFELINE FAMILY': {
            text: ['MILI', 'Pixis Lifeline', 'Lifeline'],
            value: ['MILI', 'Pixis Lifeline', 'Lifeline']
        },
        'PIXIS™ FAMILY': {
            text: ['Pixis Custom', 'Pixis Lifeline', 'Pixis Plug And Play', 'Pixis Stem'],
            value: ['Pixis Custom', 'Pixis Lifeline', 'Pixis Plug And Play', 'Pixis Stem']
        },
        'NIXE™ FAMILY': {
            text: ['Nixe', 'Nixe Flex'],
            value: ['Nixe', 'Nixe Flex']
        },
        'ADENA FAMILY': {
            text: ['Adena Single', 'Adena'],
            value: ['Adena Single', 'Adena']
        },
        
    }
    
};

// populate associated select list when page loads
window.onload = function() {
    var form = document.forms['contact-form-53'];
    
    // reference to controlling select list
    var sel = form.elements['lmf'];
    sel.selectedIndex = 0;
    
    // name of associated select list
    var relName = 'lmn[]';
    // reference to associated select list
    var rel = form.elements[ relName ];
    
    // get data for associated select list passing its name
    // and value of selected in controlling select list
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select list
    appendDataToSelect(rel, data);
};

</script>