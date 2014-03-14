<?php

/*
 * Creates and displays a pricing table and notices
*/

if (!function_exists('the_pricing_table')) {

	function the_pricing_table() {

		$table 		= 'pricing_table'; 					// Name of the Pricing Table repeater field
		$notices 	= 'notices'; 						// Name of the Notices repeater field
		$html 		= '<div class="pricing-table">';


		// Pricing Table
		if (have_rows($table)) {

			$html .= '<table class="pricing-table">';
			
			// Create Table Head
			$html .= '<thead>';
				$html .= '<tr>';
					$html .= '<th>&nbsp;</th>';
					$html .= '<th class="pricing-cs"><i class="tooltip" title="Creative Stylist">CS</i></th>';
					$html .= '<th class="pricing-as"><i title="Assistant Director">ASD</i></th>';
					$html .= '<th class="pricing-ad"><i title="Artistic Director">AD</i></th>';
				$html .= '</tr>';
			$html .= '</thead>';
			$html .= '<tbody>';

		    while (have_rows($table)) {

		    	the_row();

				$html .= '<tr>';

					$html .= '<td>' . get_sub_field('service') . '</td>';

			    	if (get_sub_field('quotation_only')) {
						$html .= '<td colspan="3" class="pricing-quotation-only">By Quotation</td>';
			    	} else {
						$html .= '<td>' . get_sub_field_object('creative_stylist_price')["prepend"] . get_sub_field('creative_stylist_price') . '</td>';
						$html .= '<td>' . get_sub_field_object('assistant_director_price')["prepend"] . get_sub_field('assistant_director_price') . '</td>';
						$html .= '<td>' . get_sub_field_object('artistic_director_price')["prepend"] . get_sub_field('artistic_director_price') . '</td>';
					}

				$html .= '</tr>';
		 
		    }

			$html .= '</tbody>';
			$html .= '</table>';

		} else {
			return;
		}


		// Pricing Notices
		if (have_rows($notices)) {
			
			$html .= '<div class="notices">';

		    while (have_rows($notices)) {

		    	the_row();
		 
					$html .= '<div>' . get_sub_field('notice') . '</div>';
		 
		    }

			$html .= '</div>';

		} else {
			return;
		}

		$html .= "</div>";	// Close container

		echo $html;
	}

} else {
	echo "Function Already Exists: the_pricing_table";
}