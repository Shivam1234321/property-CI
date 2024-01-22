<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/CssLink.php"; ?>
  
</head>
<body>
<!-- Start Back to top
=========================================================================-->
<!-- End Back to top
=========================================================================-->
<!-- Start Header
===================================================================-->
<?php require "template/Header.php"; ?>
<!-- End Header
==================================================================-->
<!-- Page Banner Start
==================================================================-->
<div class="page-banner overlay-black" style="padding: 150px 0">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-lg-12">
				<h1 class="page-banner-title color-primary"><?= $page; ?></h1>
				<div class="text-area w-50 mt-15 color-white">
					<p></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg-secondary">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">
				    <li class="breadcrumb-item"><a href="<?= BASE_URL; ?>">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page"><a href="#"><?= $page; ?></a></li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Page Banner End
==================================================================-->
<!-- Blog Thumbnail Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<?php if(count($blog)>0): ?>
				<?php foreach($blog as $val): ?>
				<div class="col-md-12 col-lg-4 wow slideInUp animated">
					<div class="post-thumbnail hover-secondery-primary">
						<a href="<?= BASE_URL;?>singleBlog/<?= $val['slug'];?>/"><div class="post-img overflow-hidden"><img src="<?= LOGO; ?>" data-src="<?= BASE_URL.$val['image_url'].$val['image']; ?>" class="lazy" alt="<?= $val['title'];?>"></div></a>
						<div class="post-meta icon-primary color-secondary-a px-20 py-10 bg-gray">
							<ul class="post-info list-style-1 d-flex color-secondary">
								<li><i class="fa fa-user"></i> <?= $val['author'];?></li>
								<li><a href="#"><i class="fa fa-comments-o"></i> <?= $this->um->countingWhere("blog_comment",array("blog_id"=>$val['blog_id']));?></a></li>
								<!--<li><a href="#"><i class="fa fa-share-alt"></i> 898</a></li>-->
							</ul>
						</div>
						<div class="post-content mt-20 color-secondary color-secondary-a">
							<div class="post-date w-25 float-left bg-gray mr-20 text-center">
								<div class="py-10"><span class="d-block"><?= date("d",strtotime($val['date']));?></span><?= date("M",strtotime($val['date']));?></div>
								<!--<div class="post-love py-5 bg-primary"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 2.5k</a></div>-->
							</div>
							<div class="text-area d-table">
								<a class="post-title mb-15" href="blog-details-right-sidebar.html"><h5><?= $val['title'];;?></h5></a>
								<p><?= $val['subject'];?></p>
								<a class="btn-more mt-15" href="<?= BASE_URL;?>singleBlog/<?= $val['slug'];?>/">Read More</a>
							</div>
						</div>
					</div>
				</div>
			   <?php endforeach; ?>
			<?php endif; ?>

			<div class="col-lg-12 wow slideInDown animated">
				<div class="mx-auto d-table">
					<!--<ul class="pagination mt-50">
						<li class="page-item"><a class="page-link" href="#">Prev</a></li>
						<li class="page-item"><a class="page-link active" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>-->
					<?= $this->pagination->create_links();   ?> 
				</div>
			</div>
		</div>
	</div>
</section>

  <!-- Blog Thumbnail End
  ==================================================================-->
  <!--  Partners and Subscribe Form Start
  ==================================================================-->
  <!--<div class="patner-subscribe bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 wow animated slideInDown">
				<div class="bg-white shadow py-80">
					<div class="row">
						<div class="col-md-12 col-lg-6 px-60 border-right">
							<div class="side-title pb-30">
								<span class="small-title color-primary position-relative line-primary">Partners</span>
								<h2 class="title mb-20 color-secondary">Our Popular Fellows!</h2>
								<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>
							</div>
							<div class="owl-carousel partners mt-30">
								<img src="<?= IMAGES; ?>partner/1.png" alt="Image not found!">
								<img src="<?= IMAGES; ?>partner/2.png" alt="Image not found!">
								<img src="<?= IMAGES; ?>partner/3.png" alt="Image not found!">
								<img src="<?= IMAGES; ?>partner/4.png" alt="Image not found!">
								<img src="<?= IMAGES; ?>partner/5.png" alt="Image not found!">
								<img src="<?= IMAGES; ?>partner/6.png" alt="Image not found!">
							</div>
						</div>
						<div class="col-md-12 col-lg-6 px-60">
							<div class="side-title pb-30 mt-md-50 text-right">
								<span class="small-title color-primary position-relative line-right-primary">Newsletter</span>
								<h2 class="title mb-20 color-secondary">Get Update Now!</h2>
								<p>Luctus posuere facilisi eros auctor lacinia litora. Convall aptent nisy parturient scelerisq. Nullam fringil condimen integer mauris lacus aliquam, quam massa lobortis commod proin magna.</p>
							</div>
							<form class="news-letter bg-gray mt-30">
								<div class="form-group position-relative">
									<input class="form-control" type="text" name="email" placeholder="Subscribe">
									<button class="bg-gray color-secondary"><i class="fa fa-paper-plane"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   </div>-->
  <!--  Partners and Subscribe Form Start
  ==================================================================-->

  <!-- Footer Start
  ==================================================================-->
 <?php require "template/Footer.php"; ?>
  <!-- Footer End
  ==================================================================-->
  <!-- jquery Links 
  ==================================================================-->
 <?php require "template/ScriptLink.php"; ?>

</body>
</html>