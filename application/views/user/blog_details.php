
<!DOCTYPE html>
<html lang="en">
<head>
	<!--===== Meta Tag =====-->
	<?php require "template/CssLink.php"; ?>
  
</head>
<body oncontextmenu="return false;">
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
					<p><?= $blog['subject'];?></p>
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
				    <li class="breadcrumb-item"><a href="#"><?= $page; ?></a></li>
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
			<div class="col-md-12 col-lg-8">
				<div class="blog-item mt-md-50">
					<div class="blog-img position-relative post-content wow slideInUp animated">
						<img src="<?= BASE_URL.$blog['image_url'].$blog['image']; ?>" alt="Image">
						<div class="date post-date float-left bg-warning mr-20 text-center color-secondary">
							<div class="py-10"><span class="d-block"><?= date("d",strtotime($blog['date']));?></span><?= date("M",strtotime($blog['date']));?></div>
							<!--<div class="post-love py-5 bg-primary"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 1.3k</a></div>-->
						</div>
					</div>
					<div class="blog-info color-secondary-a">
						<div class="post-meta icon-primary color-secondary-a pt-30 pb-15 wow slideInDown animated">
							<ul class="post-info list-style-1 d-flex color-secondary">
								<li><i class="fa fa-user"></i> Admin</li>
								<li><a href="#"><i class="fa fa-comments-o"></i> <?= $this->um->countingWhere("blog_comment",array("blog_id"=>$blog['blog_id']));?></a></li>
								<!--<li><a href="#"><i class="fa fa-share-alt"></i> 378</a></li>-->
							</ul>
						</div>
						<h3 class="mb-20 color-secondary wow slideInUp animated"><?= $blog['subject'];?></h3>
						<?= $blog['description'];?>
						<div class="share bg-gray p-30 mt-30 wow slideInUp animated">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<ul class="social-media-2 large color-secondary-a">
										<li class="mr-10">Share:</li>
										<li><div class="sharethis-inline-share-buttons text-left"></div></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="comments-area mt-50">
							<h3 class="color-secondary line-bottom pb-15 mb-30">Comments <?= count($reply); ?></h3>
							<?php if(count($reply)): ?>
								<?php foreach($reply as $val): ?>
							<div class="comment wow slideInDown animated">
								<div class="float-left text-center">
									<div class="user-image"><img src="<?= LOGO; ?>" class="rounded-circle" alt="images"></div>
								</div>
								<div class="comment-content d-table">
									<div class="meta d-inline-block mb-15">
										<h5 class="color-dark"><?= $val['name'];?></h5>
										<div class="f-14 pt-5"><?= get_instance()->timeago($val['date']." ".$val['time']); ?></div>
									</div>
									<p><?= $val['comment'];?></p>
								</div>
							</div>
							 <?php endforeach; ?>
							<?php endif; ?>

						</div>

						<div class="mt-50">
							<h3 class="color-secondary line-bottom pb-15 mb-30 wow slideInUp animated">Leave Your Comment</h3>
							<form method="post" id="blogComment" class="form-rating wow slideInDown animated">
								<?= form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()); ?>
								<?= form_hidden("blog_id",$blog['blog_id']);?>
								<div class="row">
									<div class="form-group col-md-12 col-lg-6">
										<input type="text" name="name" id="name" required class="form-control bg-gray" placeholder="Your Name*">
									</div>
									<div class="form-group col-md-12 col-lg-6">
										<input type="email" name="email" required id="email" class="form-control bg-gray" placeholder="Email Address*">
									</div>
									
									<div class="form-group col-md-12 col-lg-12">
										<textarea class="form-control bg-gray" name="comment" id="comment" required rows="5" placeholder="Type Comments..."></textarea>
									</div>
									<div class="col-lg-12"><button type="submit" name="blogSubmit" value="blogSubmit" class="btn btn-secondary">Post Comments</button></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-4">
				<div class="blog-sidebar color-secondary-a">
				<?php if(count($blog1)>0): $i=1; ?>
					<?php foreach($blog1 as $val): ?>
					<div class="col-md-12 col-lg-12 wow slideInUp animated">
						<div class="post-thumbnail hover-secondery-primary border mt-4">
							<a href="<?= BASE_URL;?>singleBlog/<?= $val['blog_id'];?>"><div class="post-img overflow-hidden"><img src="<?= LOGO; ?>" data-src="<?= BASE_URL.$val['image_url'].$val['image']; ?>" class="lazy" alt="<?= $val['title'];?>"></div></a>
							<div class="post-meta icon-primary color-secondary-a px-20 py-10 bg-gray">
								<ul class="post-info list-style-1 d-flex color-secondary">
									<li><i class="fa fa-user"></i> <?= $val['author'];?></li>
									<li><a href="#"><i class="fa fa-comments-o"></i> 536</a></li>
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
									<a class="btn-more mt-15" href="<?= BASE_URL;?>singleBlog/<?= $val['blog_id'];?>">Read More</a>
								</div>
							</div>
						</div>
					</div>
				<?php $i++; if($i==6){ break; } endforeach; ?>
				<?php endif; ?>
	            </div>
				
				<!-- Widget Tags -->
				<div class="widget py-50 px-30 bg-white mt-50 d-inline-block shadow wow slideInDown animated">
					<h3 class="color-secondary line-bottom pb-15 mb-30">Poppular Tags</h3>
					<ul class="widget-tags">
						<?php $tags = explode(",",$blog['tags']); ?>
						<?php if(count($tags)): ?>
							<?php foreach($tags as $val): ?>
						<li class="label"><a href="#"><?= $val?>,</a></li>
						   <?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- Blog Thumbnail End
==================================================================-->

<!-- Footer Start
==================================================================-->
<?php require "template/Footer.php"; ?>
<!-- Footer End
==================================================================-->
<!-- jquery Links
==================================================================-->
  <?php require "template/ScriptLink.php"; ?>
  <script>
	  $("#blogComment").validate({
		ignore: "hidden",
		rules:{
			name:{
				required:true,
			},
			email:{
				required:true,
				email:true
			},
			comment:{
				required:true
			}
		},
		messages:{
			name:{
				required:"Enter Name",
			},
			author:{
				required:"Enter Email",
				email:"Enter Valid email id"
			},
			comment:{
				required:"Enter Subject"
			}
		},
		submitHandler: function (form) {

			$.ajax({ 
				type: "POST",
				url: '<?= BASE_URL?>/blogComment',
				data: new FormData(form),
				mimeType: "multipart/form-data",
				contentType: false,
				processData: false,
				beforeSend: function(){
					$('#blogComment').find('[name="blogSubmit"]').attr("disabled",true);
				},
				complete: function(){
					$('#blogComment').find('[name="blogSubmit"]').attr("disabled",false);
				},
				success: function(e){ 
					var res=JSON.parse(e);
					if (res[0].status==0){
						$.notify(res[0].msg,'error');
						$('#blogComment').find('[name="blogSubmit"]').attr("disabled",true);
					}else{
						$.notify(res[0].msg,"success");
						setTimeout(function(){ location.reload(); }, 2500);
					}
				},
				error:function(){
					$.notify("Server error occure.","error");
					$('#blogComment').find('[name="blogSubmit"]').attr("disabled",true);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});
  </script>
</body>
</html>