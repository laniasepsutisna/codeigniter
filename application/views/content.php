<!--START CONTENT-->
<div class="col-sm-8 col-sm-pull-4">
	<div class="blog">
		<?php foreach($contents as $content){ ?>
		<div class="blog-item">
			<img class="img-responsive img-blog" src="" width="100%" alt="" />
			<div class="blog-content">
				<a href="blog-item.html"><h3><?php echo $content['judul_konten']; ?></h3></a>
				<div class="entry-meta">
					<span><i class="icon-user"></i> <a href="#"><?php echo $content['penulis']?></a></span>
					<span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
					<span><i class="icon-calendar"></i><?php echo date(' d M Y ', strtotime($content['tanggal']));?></span>
					<span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
				</div>
				<p>
					<?php echo $content['isi']; ?>
				</p>
				<a class="btn btn-default" href="blog-item.html">Read More <i class="icon-angle-right"></i></a>
			</div>
		</div>
		<?php } ?>
		<div class="blog-item">
		<!--Start Item Content-->
		
		<!--End Item Content -->
		</div>
		<ul class="pagination pagination-lg">
			<li>
				<a href="#"><i class="icon-angle-left"></i></a>
			</li>
			<li class="active">
				<a href="#">1</a>
			</li>
			<li>
				<a href="#">2</a>
			</li>
			<li>
				<a href="#">3</a>
			</li>
			<li>
				<a href="#">4</a>
			</li>
			<li>
				<a href="#">5</a>
			</li>
			<li>
				<a href="#"><i class="icon-angle-right"></i></a>
			</li>
		</ul>
	</div>
</div>
<!--END CONTENT-->