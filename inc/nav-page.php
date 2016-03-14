<?php
/**
 * inc/nav-page.php
 * repeatable code, loads the navigation for the 'page' page types
 *
 * @author dan moe
 */

$p = getPageType('page');
?>
	    	<nav class="fadeIn">
	    		<h2 class="sr-only">Materials</h2>
				<div class="select-wrap visible-xs visible-sm">
		          	<!-- <span>Materials <i>&#9660;</i></span> -->
					<select class="select-nav">
						<!-- <option value="" disabled>- Select -</option> -->
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
