<?php

// Lesson 10's code
function checksAge($array) {
	foreach($array as $elem) {
		if($elem >= 21) {
			echo '<pre>';
			echo 'Come on in! Have Fun!';
			echo '</pre>';
		} else {
			echo '<pre>';
			echo 'You\'re not allowed here, kid! Go home!';
			echo '</pre>';
		}
	}
}