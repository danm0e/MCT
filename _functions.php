<?php
/**
 *	Management Construction Technology
 *	site wide variables, functions and definitions
 *
 *	CODEMAP:
 *	--------
 * 	^1	GLOBAL VARIABLES
 * 	^2	MASTER PAGE ARRAY
 *		–	^2a page data vars
 * 	^3	FUNCTION – FILTER 
 * 	^4	FUNCTION – GET PAGE BY TYPE
 * 	^5	FUNCTION – GET CURRENT PAGE TYPE
 *	^6	FUNCTION – GET DISTINCT PAGE TYPE LIST
 *	^7	FUNCTION – GET NEXT PAGE
 *		–	^7a	next page varibles
 *
 *	@package MCT
 *	@since 1.0
 *	@author dan moe
 */

/********************************************************************\
	^1	GLOBAL VARIABLES
/********************************************************************/

// TURN OFF NOTICES WHEN WORKING LOCALLY
// error_reporting(E_ALL ^ E_NOTICE);

// GET THE CURRENT PAGE DETAILS
$currentPageURL = basename( $_SERVER['PHP_SELF'] );
$currentPage = substr( $currentPageURL, 0, -4 ); // slug minus '.php'

//	DO NOT ALLOW DIRECT ACCESS TO _FUNCTIONS.PHP
if ( $currentPageURL === '_functions.php' ) {
	header( 'HTTP/1.0 403 Forbidden' ) ; 
	exit();
}

// DEFINE THE INCLUDE PATH
define( 'INC_PATH', __DIR__ . '/inc/' );
$inc = INC_PATH;

// DEFINE THE HOME URL
$home = '/MCT/';

// GET THE CURRENT PAGE
$classes = ( $currentPage == 'index' ) ? 'home' : 'page';

// SET THE SITE TITLE
$siteTitle = 'MCT &mdash; Management Construction Technology';


/********************************************************************\
	^2	MASTER PAGE ARRAY
		sets the data for the individual pages
/********************************************************************/

$pages = array(

	'marble' =>
		array(
			'title'		=>	'Marble', 
			'url'		=>	'marble.php', 
			'image'		=>	'assets/img/homepage/marble.jpg',
			'image-gr'	=>	'assets/img/homepage/marble-grey.jpg',
			'pagetype'	=>	'material',
		), 

	'glass' =>
		array(
			'title'		=>	'Glass', 
			'url'		=>	'glass.php', 
			'image'		=>	'assets/img/homepage/glass.jpg',
			'image-gr'	=>	'assets/img/homepage/glass-grey.jpg',
			'pagetype'	=>	'material',
		), 

	'interiors' =>
		array(
			'title'		=>	'Interiors', 
			'url'		=>	'interiors.php', 
			'image'		=>	'assets/img/homepage/interiors.jpg',
			'image-gr'	=>	'assets/img/homepage/interiors-grey.jpg',
			'pagetype'	=>	'projects',
		), 

	'aboutus' =>
		array(
			'title'		=>	'About Us', 
			'url'		=>	'aboutus.php', 
			'image'		=>	'assets/img/homepage/about.jpg',
			'image-gr'	=>	'assets/img/homepage/about-grey.jpg',
			'pagetype'	=>	'page',
		), 

	'exteriors' =>
		array(
			'title'		=>	'Exteriors', 
			'url'		=>	'exteriors.php', 
			'image'		=>	'assets/img/homepage/exteriors.jpg',
			'image-gr'	=>	'assets/img/homepage/exteriors-grey.jpg',
			'pagetype'	=>	'projects',
		), 

	'leather' =>
		array(
			'title'		=>	'Leather', 
			'url'		=>	'leather.php', 
			'image'		=>	'assets/img/homepage/leather.jpg',
			'image-gr'	=>	'assets/img/homepage/leather-grey.jpg',
			'pagetype'	=>	'material',
		), 

	'wood' =>
		array(
			'title'		=>	'Wood', 
			'url'		=>	'wood.php', 
			'image'		=>	'assets/img/homepage/wood.jpg',
			'image-gr'	=>	'assets/img/homepage/wood-grey.jpg',
			'pagetype'	=>	'material',
		), 

	'management' =>
		array(
			'title'		=>	'Management', 
			'url'		=>	'management.php', 
			'image'		=>	'assets/img/homepage/management.jpg',
			'image-gr'	=>	'assets/img/homepage/management-grey.jpg',
			'pagetype'	=>	'page',
		), 

	'bespoke' =>
		array(
			'title'		=>	'Bespoke', 
			'url'		=>	'bespoke.php', 
			'image'		=>	'assets/img/homepage/bespoke.jpg',
			'image-gr'	=>	'assets/img/homepage/bespoke-grey.jpg',
			'pagetype'	=>	'projects',
		), 

	'furniture' =>
		array(
			'title'		=>	'Furniture', 
			'url'		=>	'furniture.php', 
			'image'		=>	'assets/img/homepage/furniture.jpg',
			'image-gr'	=>	'assets/img/homepage/furniture-grey.jpg',
			'pagetype'	=>	'projects',
		), 

	'lighting' =>
		array(
			'title'		=>	'Lighting', 
			'url'		=>	'lighting.php', 
			'image'		=>	'assets/img/homepage/lighting.jpg',
			'image-gr'	=>	'assets/img/homepage/lighting-grey.jpg',
			'pagetype'	=>	'technology',
		), 

	'construction' =>
		array(
			'title'		=>	'Construction', 
			'url'		=>	'construction.php', 
			'image'		=>	'assets/img/homepage/construction.jpg',
			'image-gr'	=>	'assets/img/homepage/construction-grey.jpg',
			'pagetype'	=>	'page',
		), 

	'metal' =>
		array(
			'title'		=>	'Metal', 
			'url'		=>	'metal.php', 
			'image'		=>	'assets/img/homepage/metal.jpg',
			'image-gr'	=>	'assets/img/homepage/metal-grey.jpg',
			'pagetype'	=>	'material',
		), 

	'fabric' =>
		array(
			'title'		=>	'Fabric', 
			'url'		=>	'fabric.php', 
			'image'		=>	'assets/img/homepage/fabric.jpg',
			'image-gr'	=>	'assets/img/homepage/fabric-grey.jpg',
			'pagetype'	=>	'material',
		), 

	'av' =>
		array(
			'title'		=>	'AV', 
			'url'		=>	'av.php', 
			'image'		=>	'assets/img/homepage/av.jpg',
			'image-gr'	=>	'assets/img/homepage/av-grey.jpg',
			'pagetype'	=>	'technology',
		), 

	'technology' =>
		array(
			'title'		=>	'Technology', 
			'url'		=>	'technology.php', 
			'image'		=>	'assets/img/homepage/technology.jpg',
			'image-gr'	=>	'assets/img/homepage/technology-grey.jpg',
			'pagetype'	=>	'page',
		), 

	'homeauto' =>
		array(
			'title'		=>	'Home Auto', 
			'url'		=>	'homeauto.php', 
			'image'		=>	'assets/img/homepage/homeauto.jpg',
			'image-gr'	=>	'assets/img/homepage/homeauto-grey.jpg',
			'pagetype'	=>	'technology',
		), 

	'decoration' =>
		array(
			'title'		=>	'Decoration', 
			'url'		=>	'decoration.php', 
			'image'		=>	'assets/img/homepage/decoration.jpg',
			'image-gr'	=>	'assets/img/homepage/decoration-grey.jpg',
			'pagetype'	=>	'material',
		), 
);


//	^2a page data vars
// GET CURRENT PAGE TITLE, URL AND IMAGE. CONDITIONAL SO DOESNT ERROR ON HOMEPAGE
$pageTitle = ( $currentPage == 'index' ) ? 'home' : $pages[$currentPage]['title'];
$pageURL = ( $currentPage == 'index' ) ? '/' : $pages[$currentPage]['url'];
$pageImage = ( $currentPage == 'index' ) ? null : $pages[$currentPage]['image'];
$pageImageGrey = ( $currentPage == 'index' ) ? null : $pages[$currentPage]['image-gr'];


/********************************************************************\
	^3	FUNCTION – FILTER
/********************************************************************/

/**
 *	Loop through an array and search for a specific term
 * 	used for defining the pagetype
 *	@param string $term
 *	@param array $array
 *	@return array $results
 */

function filter( $term, $array ) {

	// loop through the requested array
	foreach( $array as $key => $value ) {

		// search the array for the requested term
		$search = array_search( $term, $value );

		// push the relevant results to a new var
		if ( $search !== false ) {
			$results[] = $value;
		}
	}

	// return the results
	return $results; 
}

/********************************************************************\
	^4	FUNCTION – GET PAGE BY TYPE
/********************************************************************/

/**
 *	Get the pages by type
 *
 * 	@see filter() to search the main array for the term entered
 *	@param string $type
 *	@return array $pagetype
 */

function getPageType( $type ) {

	// get the pages array
	global $pages;
	
	// filter the required values
	$pagetype = filter( $type, $pages );

	// return the results
	return $pagetype;
}

/********************************************************************\
	^5	FUNCTION – GET CURRENT PAGE TYPE
/********************************************************************/

/**
 *	Get page type of the current page
 *
 *	@param string	$current 	the main parameter we're searching against
 *	@param string 	$pageType 	
 *	@return string 	the page type of the current page
 */

function getCurrentPageType( $current ) {

	// get the pages array
	global $pages;
	
	// get the page type of the current page
	$pageType = ( $current == 'index' ) ? 'home' : $pages[$current]['pagetype'];

	// return the results
	return $pageType;
}

/********************************************************************\
	^6	FUNCTION – GET DISTINCT PAGE TYPE LIST
/********************************************************************/

/**
 *	Get the distinct page types from the main array
 *
 *	@param array	$array 				the main array we're searching
 *	@param array 	$pagetypes 			the new array we're pushing to
 *	@param array 	$uniquePageTypes	the final list to be returned 	
 *	@return array 	a list of the distince page types
 */

/**
 * NOTE: This function is not currently in use, the aim was to make the 
 * different nav load dynamically. To be revisited!
 */

function getPageTypeList( $array ) {

	foreach ( $array as $pagetype ) {
		$pagetypes[] = $pagetype['pagetype'];
	}

	$uniquePageTypes = array_unique($pagetypes);

	// echo '<pre>';
	// 	echo 'switch("pageType") {';

	// 		foreach ( $uniquePageTypes as $key ) {
	// 			$thisPageType = $key;
	// 			echo 'case:' . $key . ':';
	// 				echo $thisPageType;
	// 			echo 'break;';
	// 		}

	// 	echo '}';
	// echo '</pre>';

	return $uniquePageTypes;
}

/********************************************************************\
	^7	FUNCTION – GET NEXT PAGE
/********************************************************************/

/**
 *	Get the next page data within the same category
 *
 * 	@see filter() to search the main array for the term entered
 * 	@see getCurrentPageType() to retrieve the selected page type
 *
 *	@param string	$current 	the main parameter we're searching against
 *	@param string 	$pageType 	the page type of the current page
 *	@param array 	$filter 	results from main array filtered by this page type
 *	@param array 	$results 	an array of all the results that match this page type
 *	@param int 		$search 	returns the key from the array where the value matches our search
 *	@return array 	return the array values for the next page
 */

function getNextPage( $current ) {

	// allow access to the main array
	global $pages;

	// get the page type of the current page
	$pageType = getCurrentPageType($current);

	// get the pages that match the current page type
	$filter = ( $current == 'index' ) ? null : filter( $pageType, $pages );

	// loop through each sub array and return the title's
	foreach ($filter as $filterKey => $filterValue) {
		// strip out the spaces
		$slug = str_replace( ' ', '', $filterValue['title'] );
		// force lowercase format
		$results[] = strtolower($slug);
	}

	// search through the results array for a key that matches
	$search = array_search( $current, $results );

	// get the array keys
	$keys = array_keys( $results );
	$lastKey = end($keys);

	// cache the next and first page data
	$nextPage = ( $search !== $lastKey ) ? $pages[$results[++$search]] : $pages[$results[$search++]];
	$firstPage = $pages[$results[0]];

	// if there is a result and it's not the last one in the list
	if ( $search !== false && $search < count($keys) ) {
		// return the next item in the array
		return $nextPage;
	} else {
		// otherwise it's the last one, so loop back to the first
		return $firstPage;
	}
}

// ^7a	next page varibles
// CACHE THE NEXT PAGE DATA
$nextPage = ( $currentPage == 'index' ) ? 'home' : getNextPage( $currentPage );
$nextPageTitle = ( $currentPage == 'index' ) ? 'home' : $nextPage['title'];
$nextPageURL = ( $currentPage == 'index' ) ? '/' : $nextPage['url'];
