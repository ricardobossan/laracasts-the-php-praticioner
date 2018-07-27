<?php

class Post
{

	public $title;

	public $published;

	public function __construct($title, $author, $published)
	{
		$this->title = $title;

		$this->author = $author;

		$this->published = $published;
	}
}

$posts = [
	new Post('My First Post', 'JW', true),
	new Post('My Second Post', 'JW',true),
	new Post('My Third Post', 'TW', true),
	new Post('My Fourth Post', 'TR', false),
];

/**
 * @method
 * @function array_filter
 * $desc returns the elements that meet the criteria defined in the function (function's second parameter).
 */
/*
$unpublishedPosts = array_filter($posts, function($post) {
	return !$post->published;
});
*/
/*
$publishedPosts = array_filter($posts, function($post) {
	return $post->published;
});
*/

/**
 * @method
 * @function array_map
 * @desc Returns a new array. The first and second arguments passed into the function are inverted, for this array method, i.e., the first argument is the function, and the second is the array.
  */
/*
$modified = array_map(function($post) {
	return ['title' => $post->title];
}, $posts);
*/

/**
 * @method
 * @function array_column
 * @desc Pulls the values of the elements whose name is passed as the method's second argument. array_column($arrayName, $keyToHaveValueReturned, $optionalKeyOfValueToBeReturnedAsKey)
 */
$authors = array_column($posts, 'author', 'title');

var_dump($authors);