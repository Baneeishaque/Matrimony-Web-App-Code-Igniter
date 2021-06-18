<?php

function dobToAgeInYears($localDob)
{
	$dob = new DateTime($localDob);
	$now = new DateTime();
	$difference = $now->diff($dob);
	return $difference->y;
}
