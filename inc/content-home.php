<?php
/**
 * content-home.php
 * loads the home page content in to the home page template
 *
 * @author dan moe
 */

?>

    	<?php include "{$inc}logo.php"; ?>

	    <main class="fadeIn">

	    	<div class="folio">

	    		<?php foreach ($pages as $key => $page): ?>
					<a href="<?= $page['url']; ?>" class="folio--project" title="<?= $page['title']; ?>">
						<div class="overlay img" style="background: url('<?= $page['image']; ?>')"></div>
						<div class="img" style="background: url('<?= $page['image-gr']; ?>')"></div>
					</a>
    			<?php endforeach; ?>
	    	</div>

	    	<?php //include "{$inc}contact-details.php"; ?>
	    	
	    	<div class="slidenav">
	    		<a href="" class="slidenav-prev"></a>
	    		<a href="" class="slidenav-next"></a>
	    	</div> 

	    </main>