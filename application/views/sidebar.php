<!--START SIDEBAR !-->
<div class="widget search">
	<form role="form">
		<div class="input-group">
			<input type="text" class="form-control" autocomplete="off" placeholder="Search">
			<span class="input-group-btn">
				<button class="btn btn-danger" type="button">
					<i class="icon-search"></i>
				</button> </span>
		</div>
	</form>
</div>

<div class="widget ads">
	<div class="row">
		<div class="col-xs-6">
			<a href="#"><img class="img-responsive img-rounded" src="<?php echo base_url()."assets/"; ?>images/ads/ad1.png" alt=""></a>
		</div>

		<div class="col-xs-6">
			<a href="#"><img class="img-responsive img-rounded" src="<?php echo base_url()."assets/"; ?>images/ads/ad2.png" alt=""></a>
		</div>
	</div>
	<p></p>
	<div class="row">
		<div class="col-xs-6">
			<a href="#"><img class="img-responsive img-rounded" src="<?php echo base_url()."assets/"; ?>images/ads/ad3.png" alt=""></a>
		</div>

		<div class="col-xs-6">
			<a href="#"><img class="img-responsive img-rounded" src="<?php echo base_url()."assets/"; ?>images/ads/ad4.png" alt=""></a>
		</div>
	</div>
</div>

<div class="widget categories">
	<h3>Blog Categories</h3>
	<div class="row">
		<div class="col-sm-6">
			<ul class="arrow">
				<?php
					foreach($kategoris as $kategori){
				?>
					<li><a href="<?php echo base_url()."index.php/web/categori/".$kategori['kode_kategori']; ?>"> 
						<?php echo $kategori['judul_kategori']; ?>
					</a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="col-sm-6">
			<ul class="arrow">
				
			</ul>
		</div>
	</div>
</div>

<div class="widget tags">
	<h3>Tag Cloud</h3>
	<ul class="tag-cloud">
		<li>
			<a class="btn btn-xs btn-primary" href="#">CSS3</a>
		</li>
		<li>
			<a class="btn btn-xs btn-primary" href="#">HTML5</a>
		</li>
		<li>
			<a class="btn btn-xs btn-primary" href="#">WordPress</a>
		</li>
		<li>
			<a class="btn btn-xs btn-primary" href="#">Joomla</a>
		</li>
		<li>
			<a class="btn btn-xs btn-primary" href="#">Drupal</a>
		</li>
		<li>
			<a class="btn btn-xs btn-primary" href="#">Bootstrap</a>
		</li>
		<li>
			<a class="btn btn-xs btn-primary" href="#">jQuery</a>
		</li>
		<li>
			<a class="btn btn-xs btn-primary" href="#">Tutorial</a>
		</li>
		<li>
			<a class="btn btn-xs btn-primary" href="#">Update</a>
		</li>
	</ul>
</div>

<div class="widget facebook-fanpage">
	<h3>Facebook Fanpage</h3>
	<div class="widget-content">
		<div class="fb-like-box" data-href="https://www.facebook.com/shapebootstrap" data-width="292" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
	</div>
</div>

<!--END SIDEBAR-->