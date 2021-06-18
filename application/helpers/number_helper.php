<?php
function cm2feet($cm)
{
	$inches = $cm / 2.54;
	$feet = intval($inches / 12);
	$inches = $inches % 12;
	return sprintf('%d ft %d ins', $feet, $inches);
}
