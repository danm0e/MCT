<?php
/**
 * inc/nav.php
 * repeatable code, loads the navigation dependant on the current page type
 *
 * @author dan moe
 */

// get the category of the current page
// $pageType = getCurrentPageType($currentPage);

// get all pages of the same page type
$p = getPageByType($pageType);
?>
	    	<nav class="fadeIn">
	    		<h2 class="sr-only">The art of <?= $currentPageTitle; ?></h2>
				<div class="select-wrap visible-xs visible-sm">
		          	<span>
			          	<?php if ( $currentPage != 'about-us' ) echo 'The art of '; ?>
			          	<?= $currentPageTitle; ?> 
			          	<i>&#9660;</i>
		          	</span>
					<select class="select-nav">
		    		<?php foreach ($p as $key => $page): ?>
						<option value="<?= $page['url']; ?>" <?= ($currentPageURL == $page['url']) ? 'selected' : ''; ?>><?= $page['title']; ?></option>
	    			<?php endforeach; ?>
					</select>
				</div>

	    		<ul class="hidden-xs hidden-sm clearfix">
	    		<?php 
	    		foreach ($p as $key => $page): 
	    			$active = ($currentPageURL == $page['url']) ? 'active' : ''; ?>
	    			<li><a href="<?= $page['url']; ?>" class="<?= $active ?>"><?= $page['title']; ?></a></li>
    			<?php endforeach; ?>
	    		</ul>
	    	</nav>
