<?php
/**
 * content.php
 * repeatable code, loads the content for each of the sub pages
 *
 * @author dan moe
 */
?>
		<div class="sidebar fadeIn">

	    	<?php include "{$inc}logo.php"; ?>

	    	<div class="header-wrap">
		    	<div class="project-image fadeIn hidden-xs">
					<div class="img" style="background: url(<?= $pageImageGrey; ?>)"></div>
		    	</div>

				<?php
				switch ( $pageType  ) {
					case 'page':
						$section = 'm';
						break;

					case 'material':
					case 'projects':
						$section = 'c';
						break;

					case 'technology':
						$section = 't';
						break;
				}
				?>

				<h3 class="visible-md visible-lg"><span class="section-marker <?= $section; ?>"></span><?= $pageTitle; ?></h3>
	    	</div>

			<?php /* <h1 class="hidden-sm">The art of <span><?= $pageTitle; ?></span></h1> */ ?>
		</div>

	    <main id="main">

			<?php require "{$inc}nav.php"; ?>

			<section class="container clearfix fadeIn">

			<a href="<?= $home; ?>" class="home"><span class="sr-only">Home</span></a>

			<!-- <a href="" class="next"><i class="large-arrow"></i></a> -->

				<div class="section-slider">

				<?php require $pageContent; ?>

				</div>

			</section>

			<?php 
				/*if ($nextPageTitle):
			?>
			<footer class="fadeIn">
				<a href="<?= $nextPageURL; ?>">The art of <?= $nextPageTitle; ?><i></i></a>
			</footer>
			<?php endif; */?>

	    </main>
