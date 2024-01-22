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
<!--<div class="page-banner overlay-black" style="padding: 150px 0">-->
<!--	<div class="container h-100">-->
<!--		<div class="row h-100 align-items-center">-->
<!--			<div class="col-lg-12">-->
<!--				<h1 class="page-banner-title color-primary">Blog Details</h1>-->
<!--				<div class="text-area w-50 mt-15 color-white">-->
<!--					<p>Porttitor luctus est sit lacinia non praesent aptent hymenaeos taciti tortor. Sociosq platea porta facilisis vitae dictum bibendun tellus ante fusce vulputate dolor lorem vulputate hac quisque diam etiam.</p>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!--<div class="bg-secondary">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-12 col-lg-12">-->
<!--				<nav aria-label="breadcrumb">-->
<!--				  <ol class="breadcrumb m-0 py-15 px-0 bg-transparent hover-white-primary">-->
<!--				    <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--				    <li class="breadcrumb-item"><a href="#">Pages</a></li>-->
<!--				    <li class="breadcrumb-item active" aria-current="page">Blog Details Right Sidebar</li>-->
<!--				  </ol>-->
<!--				</nav>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- Page Banner End
==================================================================-->
<!-- Blog Thumbnail Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8" style="margin:auto">
				<div class="blog-item mt-md-50">
					<div class="blog-img position-relative post-content wow slideInUp animated">
						<!-- <img src="images/blog/1.jpg" alt="Image"> -->
						<div class="service-images owl-carousel slide-1 dot-on-slider position-relative wow slideInDown animated">
							<?php $res=$this->um->getAllDataWhere("moving_story_image",array("moving_story_id"=>$moving_story['moving_story_id']),"id","DESC"); ?>
							<?php if(count($res)>0){ ?>
								<?php foreach($res as $val): ?>
		                     		<img src="<?= BASE_URL.$val['image_url'].$val['image']; ?>" alt="image" class="img-fluid" style="width:100%;height:50% !important;">
		                        <?php endforeach; ?>
		                     <?php } ?>
		                </div>
						<div class="date post-date float-left bg-gray mr-20 text-center color-secondary">
							<div class="py-10"><span class="d-block"><?= date("d",strtotime($moving_story['date']));?></span><?= date("M",strtotime($moving_story['date']));?></div>
							<!-- <div class="post-love py-5 bg-primary"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 1.3k</a></div> -->
						</div>
					</div>
					<div class="blog-info color-secondary-a">
						<div class="post-meta icon-primary color-secondary-a pt-30 pb-15 wow slideInDown animated">
							<ul class="post-info list-style-1 d-flex color-secondary">
								<li><i class="fa fa-user"></i> Admin</li>
								<li><a href="#"><i class="fa fa-comment-o"></i> <?= $this->um->countingWhere("moving_story_comment",array("moving_story_id"=>$moving_story['moving_story_id']));?></a></li>
							</ul>
						</div>
						<!-- <h3 class="mb-20 color-secondary wow slideInUp animated">Consequat metus sceleris que conubia duis.</h3> -->
						<p><?= $moving_story['decision'];?></p>
						<blockquote class="bg-gray color-secondary text-center p-30 my-30 wow slideInDown animated">
							<span class="mb-15 color-primary"><i class="fa fa-quote-left"></i></span>
							<p class="m-0"><strong><?= $moving_story['happy'];?></strong></p>
						</blockquote>
						<p class="mb-15 wow slideInUp animated"><?= $moving_story['challenge'];?></p>
						<!--<div class="row my-30 wow slideInUp animated">-->
						<!--	<div class="col-lg-6 col-md-6"><img src="images/blog/2.jpg" alt="image"></div>-->
						<!--	<div class="col-lg-6 col-md-6"><div class="mt-sm-30"><img src="images/blog/7.jpg" alt="image"></div></div>-->
						<!--</div>-->
						<p class="wow slideInDown animated"><?= $moving_story['moving_story'];?>.</p>
						<div class="share bg-gray p-30 mt-30 wow slideInUp animated">
							<div class="row">
								<div class="col-lg-7 col-md-7">
									<ul class="social-media-2 large color-secondary-a">
										<li class="mr-10">Share:</li>
										<li><div class="sharethis-inline-share-buttons text-left"></div></li>
									</ul>
								</div>
								<!-- <div class="col-lg-5 col-md-5">
									<div class="float-right mt-sm-30">
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="#">Prev</a></li>
											<li class="page-item"><a class="page-link" href="#">Next</a></li>
										</ul>
									</div>
								</div> -->
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
								<?= form_hidden("moving_story_id",$moving_story['moving_story_id']);?>
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

		</div>
	</div>
</section>


<?php require 'template/Footer.php';?>
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
				url: '<?= BASE_URL?>/movingStoryComment',
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