<div id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></div>
<header class="nav-on-top">
       <!--<div class="top-header bg-secondary border-bottom-1-dark">
		    <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9 col-xl-8">
                        <ul class="list-style-1 icon-primary color-white d-flex">
                            <li><i class="fa fa-map-marker"></i> 40 Towerhill Avenue, Melbourne, Australia.</li>
                            <li><i class="fa fa-phone"></i> +(844) 234-567-800</li>
                            <li><i class="fa fa-envelope"></i> info@webmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-3 col-xl-4">
                        <ul class="social-media-1 d-flex color-white-a float-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
        <div id="header" class="cus nav-header header-six w-100 py-15 bg-light d-table">
            <div id="header" class="nav-header py-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light px-0">
                                <a class="navbar-brand" href="<?= BASE_URL;?>"><img class="nav-logo" src="<?= LOGO; ?>" alt="logo"></a>
                                <button class="toggle-btn" data-toggle="collapse" data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item dropdown mega-menu">
                                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL; ?>"
                                                >Home</a>

                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" >Rent</a>
                                            <ul class="dropdown-menu shadow">
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">Property to rent</a>
                                                    
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">Student property to rent</a>
                                                    
                                                </li>
                                                <li><a class="dropdown-item" href="#">Where can I live</a></li>
                                              
                                               
                                            </ul>
                                        </li>
                                   
                                 
                                            <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" >Buy</a>
                                            <ul class="dropdown-menu shadow">
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">Property for sale</a>
                                                    
                                                </li>
                                                <!--<li class="dropdown">-->
                                                <!--    <a class="dropdown-item" href="newest-property-to-sale.php">Newest property to sale</a>-->
                                                    
                                                <!--</li>-->
                                                <li><a class="dropdown-item" href="#">Where can I live
                                                        </a></li>
                                              
                                               
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" >Inspire</a>
                                            <ul class="dropdown-menu shadow">
                                                <?php $type=array("Property Blog","Country Guide"); ?>
                                                <li class="dropdown"> <a class="dropdown-item" href="<?= BASE_URL;?>movingStory">Moving Story</a></li>
                                                <?php foreach($type as $val): ?>
                                                <li class="dropdown"> <a class="dropdown-item" href="<?= BASE_URL;?>allBlog/<?= $val; ?>"><?= $val; ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>

                                         <!--<li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL;?>Blogs" >Blogs</a>
                                        </li>-->
                                        
                                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL;?>Contact">Contact</a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                    class="z-index-1 position-relative" src="<?= IMAGES;?>saudi-arabia.png"
                                                    style="width:24px; height:24px;"> Saudi Arabia</a>
                                            <ul class="dropdown-menu shadow">
                                               
                                                <li onclick="setLanguage('en')"><a class="dropdown-item" href="#"><img class="z-index-1 position-relative" src="<?= IMAGES;?>saudi-arabia.png" style="width:24px; height:24px;"> India</a></li>
                                               
                                                <li onclick="setLanguage('fa')"><a class="dropdown-item" href="#"><img class="z-index-1 position-relative" src="<?= IMAGES;?>saudi-arabia.png" style="width:24px; height:24px;"> Urdu</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="admin-info color-white-a">
                                        <?php if(empty($this->session->userdata('uid'))){ ?>
                                          <li><a href="<?= BASE_URL;?>login">Sign In</a></li>
                                          <li><a href="<?= BASE_URL;?>register">Sign Up</a></li>
                                        <?php }else{ ?>
                                          <li><a href="<?= BASE_URL;?>Account">My Account</a></li>
                                        <?php } ?>
                                    </ul>
                                   
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>