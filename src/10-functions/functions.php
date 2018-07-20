<?php

/**
 @file Sends the dd (Dump and Die) reusable function
 */

// Dump and Die (dd) function
function dd($val) {
	echo '<pre>';

	var_dump($val);

	echo '</pre>';
}
