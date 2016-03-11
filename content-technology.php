		<div class="sidebar fadeIn">

	    	<?php include "{$inc}logo.php"; ?>

	    	<div class="header-wrap">
		    	<div class="project-image fadeIn hidden-xs">
					<div class="img" style="background: url(<?= $pageImageGrey; ?>)"></div>
		    	</div>
				<!-- <h3 class="visible-md visible-lg"><span class="section-marker t"></span>Technology</h3> -->
	    	</div>
		</div>

	    <main id="main">

			<?php require "{$inc}nav-technology.php"; ?>

			<section class="container clearfix fadeIn">

			<a href="<?= $home; ?>" class="home"><span class="sr-only">Home</span></a>
			<a href="" class="next"><i class="large-arrow"></i></a>

				<div class="section-slider">

				<?php

					// get the content for the current page

					switch ($currentPage) {
						case 'lighting':
							require 'page-content-lighting.php';
							break;
						
						case 'av':
							require 'page-content-av.php';
							break;

						case 'homeauto':
							require 'page-content-homeauto.php';
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
