<!DOCTYPE html>
<html lang="en">
<head>
	<!--===== Meta Tag =====-->
	<?php require "template/CssLink.php"; ?>
</head>
<body>
<!-- Start Back to top
=========================================================================-->
<!-- End Back to top
=========================================================================-->
<!-- Start Header
===================================================================-->
<?php require 'template/Header.php';?>
<!-- End Header
==================================================================-->
<!-- Page Banner Start
==================================================================-->
<div class="page-banner overlay-black" style="padding: 150px 0">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-lg-12">
				<h1 class="page-banner-title color-primary">Moving Stories</h1>
				<div class="text-area w-50 mt-15 color-white">
					<p>Homemovers share the stories behind their move, including why it ended up being the right move.</p>
				</div>
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
			<div class="col-md-12 col-lg-8">
				<div class="row">
					<?php if(count($story)>0): ?>
						<?php foreach($story as $val): ?>
							<?php $res=$this->um->getSingleData("moving_story_image","moving_story_id",$val['moving_story_id']); ?>
							<div class="col-md-12 col-lg-6 wow slideInRight animated">
								<div class="post-thumbnail hover-secondery-primary mt-md-50">
									<div class="post-img overflow-hidden"><img src="<?= BASE_URL.$res['image_url'].$res['image']; ?>" alt="Image not found!"></div>
									<div class="post-meta icon-primary color-secondary-a px-20 py-10 bg-gray">
										<ul class="post-info list-style-1 d-flex color-secondary">
											<li><i class="fa fa-user"></i> <?php echo $val['fname']." ".$val['lname']; ?></li>
											<li><a href="#"><i class="fa fa-comments-o"></i> <?= $this->um->countingWhere("moving_story_comment",array("moving_story_id"=>$val['moving_story_id']));?></a></li>
											<!--<li><a href="#"><i class="fa fa-share-alt"></i> 898</a></li>-->
										</ul>
									</div>
									<div class="post-content mt-20 color-secondary color-secondary-a">
										<div class="post-date w-25 float-left bg-gray mr-20 text-center">
											<div class="py-10"><span class="d-block"><?= date("d",strtotime($val['date']));?></span><?= date("M",strtotime($val['date']));?></div>
											<!-- <div class="post-love py-5 bg-primary"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 2.5k</a></div> -->
										</div>
										<div class="text-area d-table">
											<a class="post-title mb-15" href="<?= BASE_URL;?>singleMovingStory/<?= $val['moving_story_id'];?>"><h5><?= substr($val['decision'],0,25); ?></h5></a>
											<p><?= substr($val['challenge'],0,25); ?></p>
											<a class="btn-more mt-15" href="<?= BASE_URL;?>singleMovingStory/<?= $val['moving_story_id'];?>">Read More</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>

					
					<div class="col-lg-12 wow slideInDown animated">
						<div class="mx-auto d-table">
							<!-- <ul class="pagination mt-50">
								<li class="page-item"><a class="page-link" href="#">Prev</a></li>
								<li class="page-item"><a class="page-link active" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul> -->
							<?= $this->pagination->create_links();   ?> 
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="blog-sidebar color-secondary-a">
	               
	                <!-- Categories -->
	                <div class="widget py-50 px-30 bg-white shadow wow slideInDown animated" style="background-color:#fff !important">
	                    <h3 class="color-secondary line-bottom pb-15 mb-30">We'd love to hear your moving story</h3>
	                    <p>Everyone has a moving story. Share yours with us for the chance to be featured on Rightmove.</p>
	                    <div class="share-your-story">
							<span class="share-story"><a href="<?= BASE_URL;?>shareYourMovingStory">Share your story</a></span>
						</div>
	                </div>
	                
	                <!-- Widget Tags -->
	                <div class="widget py-50 px-30 bg-white mt-50 d-inline-block shadow wow slideInDown animated">
	                    <h3 class="color-secondary line-bottom pb-15 mb-30">Poppular Tags</h3>
	                    <ul class="widget-tags">
	                        <li><a href="#">Realestate,</a></li>
	                        <li><a href="#">Property,</a></li>
	                        <li><a href="#">House,</a></li>
	                        <li><a href="#">Land,</a></li>
	                        <li><a href="#">Bootstrap4,</a></li>
	                        <li><a href="#">Business,</a></li>
	                        <li><a href="#">Corporate,</a></li>
	                        <li><a href="#">Agent,</a></li>
	                        <li><a href="#">Nonprofit</a></li>
	                    </ul>
	                </div>
	            </div>
			</div>
		</div>
	</div>
</section>
<!-- Blog Thumbnail End
==================================================================-->

<!-- Footer Start
==================================================================-->
 <?php require 'template/Footer.php';?>
<!-- Footer End
==================================================================-->
<!-- jquery Links
==================================================================-->
  <?php require "template/ScriptLink.php"; ?>
</body>
</html>