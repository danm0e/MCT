		<div class="sidebar fadeIn">

	    	<?php include "{$inc}logo.php"; ?>

	    	<div class="header-wrap">
		    	<div class="project-image fadeIn hidden-xs">
					<div class="img" style="background: url(<?= $pageImageGrey; ?>)"></div>
		    	</div>
				<?php /*<h3 class="visible-md visible-lg"><span class="section-marker c"></span>Construction</h3>*/?>
	    	</div>

			<h1 class="hidden-sm">The art of <span><?= $pageTitle; ?></span></h1>
		</div>

	    <main id="main">

			<?php require "{$inc}nav-materials.php"; ?>

			<section class="container clearfix fadeIn">

			<a href="<?= $home; ?>" class="home"><span class="sr-only">Home</span></a>

			<!-- <a href="" class="next"><i class="large-arrow"></i></a> -->

				<div class="section-slider">

				<?php

					// get the content for the current page

					switch ($currentPage) {
						case 'marble':
							require 'page-content-marble.php';
							break;
						
						case 'glass':
							require 'page-content-glass.php';
							break;

						case 'leather':
							require 'page-content-leather.php';
							break;

						case 'wood':
							require 'page-content-wood.php';
							break;

						case 'metal':
							require 'page-content-metal.php';
							break;

						case 'fabric':
							require 'page-content-fabric.php';
							break;

						case 'decoration':
							require 'page-content-decoration.php';
							break;
					}

				?>

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
