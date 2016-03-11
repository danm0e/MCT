		<div class="sidebar fadeIn">

	    	<?php include "{$inc}logo.php"; ?>

	    	<div class="header-wrap">
		    	<div class="project-image fadeIn hidden-xs">
					<div class="img" style="background: url(<?= $pageImageGrey; ?>)"></div>
		    	</div>
				<!-- <h3 class="visible-md visible-lg"><span class="section-marker c"></span>Construction</h3> -->
	    	</div>
		</div>

	    <main id="main">

			<?php require "{$inc}nav-projects.php"; ?>

			<section class="container clearfix fadeIn">

			<a href="<?= $home; ?>" class="home"><span class="sr-only">Home</span></a>
			<a href="" class="next"><i class="large-arrow"></i></a>

				<div class="section-slider">

				<?php

					// get the content for the current page

					switch ($currentPage) {
						case 'interiors':
							require 'page-content-interiors.php';
							break;
						
						case 'exteriors':
							require 'page-content-exteriors.php';
							break;

						case 'bespoke':
							require 'page-content-bespoke.php';
							break;

						case 'furniture':
							require 'page-content-furniture.php';
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
