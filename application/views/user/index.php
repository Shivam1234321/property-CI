<?php
foreach($banner as $bn)
{
    $banner_image = $bn['banner'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php require "template/CssLink.php";?>
</head>
<body>

<!-- Header Six Start
==================================================================-->
<?php require 'template/Header.php';?>
<!-- Header Six End
==================================================================-->
<!-- Main Banner Start 
==================================================================-->
<div class="main-banner-slider position-relative bg-light z-index-1" style="background-image: url('./assets/banner/<?php echo $banner_image; ?>');padding-top: 150px">
	<div class="container">
		<div class="row">
			<!--<div class="col-md-12 col-lg-6">-->
			<!--	<div class="banner-text">-->
			<!--		<div class="contact-dots" data-dots=""></div>-->
			<!--		<h1 class="color-secondary mb-30">Find Your Perfect Home Today</h1>-->
			<!--		<p>Sociis pulvinar aliquam torquent ullamcor habitas euismod tincidun orci pulvinar elit varius Dictum aptent torquent at aenean commod dictum, eget est. Magnass nisi fusce laoreet enim dis habitant.</p>-->
			<!--	</div>-->
			<!--</div>-->
            <!-- rent/sale custo -->
			<div class="col-md-12 col-lg-10 wow animated  bg-secondary">
				<form class="adbanced-form-two amenities-list bg-secondary p-20 mt-30 pl-0">
                    <div class="text-center">
                        <a class="mb-15 white" href="#"><h4 style="color:#00afa9 !important">Find your happy</h4></a>
                        <p class="mb-20 text-center" style="color:#fff">Search Property for sale and rent.</p>
                    </div>
	  				<div class="row">
	  				
						<div class="form-group col-xm-6 col-sm-6 col-lg-4 col-md-7 col-xl-5">
							<input class="form-control" type="text" name="address" placeholder="Address, State/City, Zip Code, Location">
							
						</div>
						<div class="form-group col-xm-4 col-sm-5 col-lg-3 col-md-4 ">
							<div class="select-wrapper position-relative">
								<select class="select form-control">
									<option>Select Location</option>
									<option>Newyork</option>
									<option>London</option>
									<option>Dubai</option>
									<option>Melbourne</option>
									<option>Sydney</option>
								</select>
							</div>
						</div>
					
						<div class="form-group sale-rent">
							<a href="property-for-rent-s.php"><input class="btn btn-primary w-100" type="submit" name="search" value="For Rent">
						</div></a>
                        <div class="form-group sale-rent">
							<input class="btn btn-primary w-100" type="submit" name="search" value="To Sale">
						</div>
						<div class="col-md-12 col-lg-12">
							<div class="collapse" id="Collapse1">
								<div class="row">
									<div class="form-group col-lg-3 col-md-6 col-12">
										<div class="select-wrapper position-relative mt-15">
											<select class="select form-control">
												<option>Select Country</option>
												<option>USA</option>
												<option>Australia</option>
												<option>Russia</option>
												<option>France</option>
												<option>Cyprus</option>
											</select>
										</div>
									</div>
									<div class="form-group col-lg-3 col-md-6 col-12">
										<div class="select-wrapper position-relative mt-15">
											<select class="select form-control">
												<option>Select Location</option>
												<option>Newyork</option>
												<option>London</option>
												<option>Dubai</option>
												<option>Melbourne</option>
												<option>Sydney</option>
											</select>
										</div>
									</div>
									
									<div class="form-group col-lg-2 col-md-4 col-12">
										<div class="select-wrapper position-relative mt-15">
											<select class="select form-control has-val">
												<option>Beds</option>
												<option>One</option>
												<option>Two</option>
												<option>Three</option>
												<option>Four</option>
											</select>
										</div>
									</div>
									<div class="form-group col-lg-2 col-md-4 col-12">
										<div class="select-wrapper position-relative mt-15">
											<select class="select form-control has-val">
												<option>Baths</option>
												<option>One</option>
												<option>Two</option>
												<option>Three</option>
												<option>Four</option>
											</select>
										</div>
									</div>
									<div class="form-group col-lg-2 col-md-4 col-12">
										<div class="select-wrapper position-relative mt-15">
											<select class="select form-control has-val">
												<option>Kitchen</option>
												<option>One</option>
												<option>Two</option>
												<option>Three</option>
												<option>Four</option>
											</select>
										</div>
									</div>
									<div class="form-group mb-0 col-lg-12">
										<ul class="list-bottom amenities select-option mt-md-15">
				                            <li>
				                                <input id="feature-1" class="d-none" type="checkbox">
				                                <label for="feature-1">Air Condition</label>
				                            </li>
				                            <li>
				                                <input id="feature-2" class="d-none" type="checkbox">
				                                <label for="feature-2">Refrigerator</label>
				                            </li>
				                            <li>
				                                <input id="feature-3" class="d-none" type="checkbox">
				                                <label for="feature-3">TV Cable</label>
				                            </li>
				                            <li>
				                                <input id="feature-4" class="d-none" type="checkbox">
				                                <label for="feature-4">Dryer</label>
				                            </li>
				                            <li>
				                                <input id="feature-5" class="d-none" type="checkbox">
				                                <label for="feature-5">Wifi</label>
				                            </li>
				                            <li>
				                                <input id="feature-6" class="d-none" type="checkbox">
				                                <label for="feature-6">Laundry</label>
				                            </li>
				                            <li>
				                                <input id="feature-7" class="d-none" type="checkbox">
				                                <label for="feature-7">Swimming Pool</label>
				                            </li>
				                            <li>
				                                <input id="feature-8" class="d-none" type="checkbox">
				                                <label for="feature-8">Outdoor Shower</label>
				                            </li>
				                            <li>
				                                <input id="feature-9" class="d-none" type="checkbox">
				                                <label for="feature-9">Barbeque</label>
				                            </li>
				                            <li>
				                                <input id="feature-10" class="d-none" type="checkbox">
				                                <label for="feature-10">Washer</label>
				                            </li>
				                            <li>
				                                <input id="feature-11" class="d-none" type="checkbox">
				                                <label for="feature-11">Sauna</label>
				                            </li>
				                            <li>
				                                <input id="feature-12" class="d-none" type="checkbox">
				                                <label for="feature-12">Microwave</label>
				                            </li>
				                            <li>
				                                <input id="feature-13" class="d-none" type="checkbox">
				                                <label for="feature-13">Gym</label>
				                            </li>
				                            <li>
				                                <input id="feature-14" class="d-none" type="checkbox">
				                                <label for="feature-14">Lawn</label>
				                            </li>
				                            <li>
				                                <input id="feature-15" class="d-none" type="checkbox">
				                                <label for="feature-15">Window Covering</label>
				                            </li>
				                            <li>
				                                <input id="feature-16" class="d-none" type="checkbox">
				                                <label for="feature-16">Home Theater</label>
				                            </li>
				                            <li>
				                                <input id="feature-17" class="d-none" type="checkbox">
				                                <label for="feature-17">Garden</label>
				                            </li>
				                            <li>
				                                <input id="feature-18" class="d-none" type="checkbox">
				                                <label for="feature-18">Fire Protection</label>
				                            </li>
				                            <li>
				                                <input id="feature-19" class="d-none" type="checkbox">
				                                <label for="feature-19">Emergency Exit</label>
				                            </li>
				                            <li>
				                                <input id="feature-20" class="d-none" type="checkbox">
				                                <label for="feature-20">Security System</label>
				                            </li>
				                        </ul>
				                    </div>
								</div>
							</div>
						</div>						
	  				</div>
	  			</form>
			</div>
		</div>
	</div>
</div>
<!-- Main Banner End
==================================================================-->
<!-- Looking For Start
==================================================================-->
<div class="property-looking position-relative z-index-1" style="margin-top: 40px; margin-bottom:120px">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 wow animated slideInUp">
				<div class="text-thumbnail ">
				    <a href="property-map.php"><img class="z-index-1 position-relative" style="height:200px" src="<?= IMAGES; ?>map-pod.jpeg" alt="Image not found !"></a>
				     <div class="map-sr-content ms">
				        <h4 class="mt-10">MAP SEARCH</h4>
						<p class="bold">Property maps</p>
						<div class="quick-link pb-10">Quick links: <a href="#">Riyaz,</a>
						<a href="#">Dammam,</a>
						<a href="#">Jedda,</a>
						<a href="#">Madina,</a>
				     </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 wow animated slideInDown">
				<div class="text-thumbnail">
				    <img class="z-index-1 position-relative" style="height:200px" src="<?= IMAGES;?>Hamble.jpeg" alt="Image not found !">
					<div class="prop-sr-content pn">
				        <h4 class="mt-10">Government Rules</h4>
						<p class="bold">Property rules in Saudi Arabia</p>
						<div class="quick-link pb-10">Quick links:</div>
					</div>
				</div>
			</div>
			<?php 
			foreach($moving_story as $ms)
			{
			    $decision = $ms['decision'];
			    $moving_story_id = $ms['moving_story_id'];
			}
			?>
			<?php $res=$this->um->getSingleData("moving_story_image","moving_story_id",$moving_story_id); ?>
			<div class="col-md-6 col-lg-3 wow animated slideInUp">
				<div class="text-thumbnail">
					<a href"<?= BASE_URL;?>singleMovingStory/<?= $moving_story_id;?>"><img class="z-index-1 position-relative" style="height:200px" src="<?= BASE_URL.$res['image_url'].$res['image']; ?>" alt="Image not found !"></a>
				     
					<div class="moving-sr-content ms">
				         	<h4 class="mt-10">MOVING STORIES</h4>
					<p class="bold"><a href="<?= BASE_URL;?>singleMovingStory/<?= $moving_story_id;?>"><?php echo $decision;  ?></a></p>
					<div class="quick-link pb-10">Take a look...
				     </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 wow animated slideInDown">
				<div class="text-thumbnail text-center bg-white" style="background-color:#fff !important">
				    <img class="z-index-1 position-relative mt-20" style="height:60px; width:70px" src="<?= IMAGES; ?>Screenshot 2021-08-03 at 00-25-45 Rightmove - UK's number one property website for properties for sale and to rent.png" alt="Image not found !">
					<p class="mb-20 pl-20 pr-20" style="line-height:20px">Create alerts and save properties & searches</p>
					<div class="logreg-btn">
					    <input class="btn btn-primary w-100 mb-10" type="button" onclick="window.location.href='<?= BASE_URL; ?>register'" name="search" value="Create an account">
					    <input style="border:1px solid #A1A1AC" class="btn w-100" type="button"  onclick="window.location.href='<?= BASE_URL; ?>login'" name="search" value="Sign In">
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-md-7 col-lg-9 wow animated slideInUp">
				<div class="text-thumbnail w-c-img">
				    <img class="z-index-1 position-relative" style="height:200px" src="<?= IMAGES; ?>wcil-homepage.jpeg" alt="Image not found !">
				     <div class="map-sr-content">
				         	<h4 class="mt-10">Where can I live?</h4>
					<p class="bold ">We've created a new tool to help you easily find the areas that match your budget and needs.</p>
					<div class="quick-link pb-10"><a href="property-map.php">Discover your perfect locatio</a>
				     </div>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-lg-3 wow animated slideInDown">
				<div class="text-thumbnail">
					<div class="prop-sr-content">
				         	<h4 class="mt-10">Recent Searches</h4>
					<p class="recent-search">You have no recent searches.</p>
					
				     </div>
					</div>
				</div>
				
			</div>
            <div class="custom-tab mt-20">
                
				<div class="row" style="width:75%">
					<div class="col-sm">
					<h4>Sold house prices</h4>
					<p>See what property in your local area sold for</p>
					<div class="pb-10"> <a href="#">Search now</a></div>
					</div>
					<div class="col-sm">
					<h4>Commercial property</h4>
					<p>Search freehold and leasehold commercial properties in the UK</p>
					<div class="pb-10"> <a href="#">Search now</a></div>
					</div>
					<div class="col-sm">
					<h4>Investors and landlords</h4>
					<p>Get the latest rent and yield figures direct to your inbox.</p>
					<div class="pb-10"> <a href="#">Sign up now</a></div>
					</div>
				
				</div>
            </div>
		
		</div>
	</div>


<!--</section>-->
<!-- Blog End
==================================================================-->
<!-- Footer Start
==================================================================-->
 <?php require 'template/Footer.php';?>
<!-- Footer End
==================================================================-->
<!-- jquery Links
==================================================================-->
<?php require "template/ScriptLink.php";?>
</body>
</html>