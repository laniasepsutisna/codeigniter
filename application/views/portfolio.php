<!DOCTYPE html>
<html lang="en">
	<!--START header-->
	<?php echo $header; ?>
	<!--END header-->
	<section id="title" class="emerald">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>Portfolio</h1>
					<p>
						Pellentesque habitant morbi tristique senectus et netus et malesuada
					</p>
				</div>
				<div class="col-sm-6">
					<ul class="breadcrumb pull-right">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li class="active">
							Portfolio
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section><!--/#title-->

	<section id="portfolio" class="container">
		<ul class="portfolio-filter">
			<li>
				<a class="btn btn-default active" href="#" data-filter="*">All</a>
			</li>
			<li>
				<a class="btn btn-default" href="#" data-filter=".bootstrap">Bootstrap</a>
			</li>
			<li>
				<a class="btn btn-default" href="#" data-filter=".html">HTML</a>
			</li>
			<li>
				<a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a>
			</li>
		</ul><!--/#portfolio-filter-->

		<ul class="portfolio-items col-3">
			<li class="portfolio-item apps">
				<div class="item-inner">
					<img src="<?php echo base_url() . "assets/"; ?>images/portfolio/thumb/item1.jpg" alt="">
					<h5>Lorem ipsum dolor sit amet</h5>
					<div class="overlay">
						<a class="preview btn btn-danger" href="<?php echo base_url() . "assets/"; ?>images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
					</div>
				</div>
			</li><!--/.portfolio-item-->
			<li class="portfolio-item joomla bootstrap">
				<div class="item-inner">
					<img src="<?php echo base_url() . "assets/"; ?>images/portfolio/thumb/item2.jpg" alt="">
					<h5>Lorem ipsum dolor sit amet</h5>
					<div class="overlay">
						<a class="preview btn btn-danger" href="<?php echo base_url() . "assets/"; ?>images/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
					</div>
				</div>
			</li><!--/.portfolio-item-->
			<li class="portfolio-item bootstrap wordpress">
				<div class="item-inner">
					<img src="<?php echo base_url() . "assets/"; ?>images/portfolio/thumb/item3.jpg" alt="">
					<h5>Lorem ipsum dolor sit amet</h5>
					<div class="overlay">
						<a class="preview btn btn-danger" href="<?php echo base_url() . "assets/"; ?>images/portfolio/full/item3.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
					</div>
				</div>
			</li><!--/.portfolio-item-->
			<li class="portfolio-item joomla wordpress apps">
				<div class="item-inner">
					<img src="<?php echo base_url() . "assets/"; ?>images/portfolio/thumb/item4.jpg" alt="">
					<h5>Lorem ipsum dolor sit amet</h5>
					<div class="overlay">
						<a class="preview btn btn-danger" href="<?php echo base_url() . "assets/"; ?>images/portfolio/full/item4.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
					</div>
				</div>
			</li><!--/.portfolio-item-->
			<li class="portfolio-item joomla html">
				<div class="item-inner">
					<img src="<?php echo base_url() . "assets/"; ?>images/portfolio/thumb/item5.jpg" alt="">
					<h5>Lorem ipsum dolor sit amet</h5>
					<div class="overlay">
						<a class="preview btn btn-danger" href="<?php echo base_url() . "assets/"; ?>images/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
					</div>
				</div>
			</li><!--/.portfolio-item-->
			<li class="portfolio-item wordpress html">
				<div class="item-inner">
					<img src="<?php echo base_url() . "assets/"; ?>images/portfolio/thumb/item6.jpg" alt="">
					<h5>Lorem ipsum dolor sit amet</h5>
					<div class="overlay">
						<a class="preview btn btn-danger" href="<?php echo base_url() . "assets/"; ?>images/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
					</div>
				</div>
			</li><!--/.portfolio-item-->
		</ul>
	</section><!--/#portfolio-->

	<!--START FOOTER-->
	<?php echo $footer; ?>
	<!--END FOOTER-->
	</body>
</html>
