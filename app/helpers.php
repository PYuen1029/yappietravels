<?php

function getUrlForThisName($getName)
{
	// if this is a Post then use title, otherwise use name
	$name = (get_class($getName) === 'App\BlogPost') ? 'title' : 'name';

	return str_replace(' ', '-', $getName->{$name});
}
