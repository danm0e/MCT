		<div class="sidebar fadeIn">

	    	<?php include "{$inc}logo.php"; ?>

	    	<div class="header-wrap">
		    	<div class="project-image fadeIn hidden-xs">
					<div class="img" style="background: url(<?= $pageImageGrey; ?>)"></div>
		    	</div>
				<!-- <h3 class="visible-md visible-lg"><span class="section-marker m"></span>Management</h3> -->
	    	</div>
		</div>

	    <main id="main">

			<?php require "{$inc}nav-page.php"; ?>

			<section class="container clearfix fadeIn">

			<a href="<?= $home; ?>" class="home"><span class="sr-only">Home</span></a>
			<a href="" class="next"><i class="large-arrow"></i></a>

				<div class="section-slider">

				<?php
					// get the content for the current page

					switch ($currentPage) {
						case 'aboutus':
							require 'page-content-about.php';
							break;
						case 'management':
							require 'page-content-management.php';
							break;
						case 'construction':
							require 'page-content-construction.php';
							break;
						case 'technology':
							require 'page-content-technology.php';
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
