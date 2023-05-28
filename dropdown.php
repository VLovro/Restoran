<?php
function generateDropdown($dropdownContent, $buttonText) {
	$html = '<div class="dropdown">';
	$html .= '<button class="btn btn-block btn-dark dropdown-toggle" type="button" data-toggle="dropdown">' . $buttonText . '</button>';
	$html .= '<div class="dropdown-menu w-100 text-center">';
  
	for ($i = 0; $i < count($dropdownContent); $i++) {
	  $html .= '<a class="dropdown-item" href="#">' . $dropdownContent[$i] . '</a>';
	}
  
	$html .= '</div></div>';
	return $html;
  }
?>
