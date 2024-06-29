<?php get_header(); ?>

<section class="blog-details-page sec-pad">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-blog-post">
					<div class="text-box">
						<h3><?php echo get_the_title();?></h3>
					</div><!-- /.text-box -->
					<div class="content-box">
					    <p><?php echo get_the_content();?></p>
					</div><!-- /.content-box -->
				</div><!-- /.single-blog-post -->
			</div><!-- /.col-md-8 -->
			<!-- <div class="col-md-4">
				<div class="sidebar right-sidebar">
					<div class="single-sidebar search-sidebar">
						<form action="#" class="search-from">
							<input type="text" placeholder="Search here..." />
						</form>
					</div>
					<div class="single-sidebar recent-post">
						<div class="title">
							<h3>Recent Posts</h3>
						</div>
						<ul class="post-list">
							<li><a href="#"><h4>What file types do you accept for printing cards.</h4></a></li>
							<li><a href="#"><h4>What are your recommended file sizes for images and photos?</h4></a></li>
							<li><a href="#"><h4>What is the difference between vector and bitmap images?</h4></a></li>
						</ul>
					</div>
					<div class="single-sidebar tags-sidebar">
						<div class="title">
							<h3>Tags</h3>
						</div>
						<ul class="tags-list">
							<li><a href="#">copying</a></li><li><a href="#">printing</a></li>
							<li><a href="#">agency</a></li><li><a href="#">corporate</a></li>
							<li><a href="#">customers</a></li><li><a href="#">hello</a></li>
							<li><a href="#">businesscard</a></li><li><a href="#">professional</a></li>
						</ul>
					</div>
					<div class="single-sidebar img-sidebar">
						<div class="img-box">
							<img src="img/widget-1-1.png" alt="Awesome Image"/>
						</div>
						<div class="text-box">
							<h4>Image with text</h4>
							<p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry has been the industry.</p>
						</div>
					</div>
					<div class="single-sidebar category-sidebar">
						<div class="title">
							<h3>Categories</h3>
						</div>
						<ul class="category-list">
							<li><a href="#">Business</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Event Organisation</a></li>
							<li><a href="#">Social Media</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Personal Life</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.blog-details-page -->

<?php get_footer(); ?>