<!DOCTYPE html>
<html lang="en">
	<!--START header-->
	<?php echo $header; ?>
	<!--END header-->
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Blog</h1>
                    <p>Selamat datang di blog kami dan semoga bisa bermanfaat bagi anda.</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="blog" class="container">
        <div class="row">
            <aside class="col-sm-4 col-sm-push-8">
            <!--START SIDEBAR-->
            <?php echo $sidebar; ?>
			<!--END SIDEBAR-->
            </aside>   
            
			<!--START CONTENT-->
			<?php echo $content; ?>
			<!--END CONTENT-->
            
        </div>
    </section>
			<!--START FOOTER-->
			<?php echo $footer; ?>
			<!--END FOOTER-->

</body>
</html>