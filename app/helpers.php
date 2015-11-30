<?php

function getUrlForThisName($getUrl)
{
	// if this is a Post then use title, otherwise use name
	$name = (get_class($getUrl) === 'App\BlogPost') ? 'title' : 'name';

	return str_replace(['?', ' '], ['%3F', '-'], $getUrl->{$name});
}

function getNameForThisUrl($getName)
{
	return str_replace(['%3F', '-'], ['?', ' '], $getName);
}