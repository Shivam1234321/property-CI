	<!--===== Meta Tag =====-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Fresher - Real Estate Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="business, property, directory, listing, real estate, Real estate template, realtor, developer, apartment, broker, real estate agency, map, company, agent, rent house">
	<meta name="author" content="root">
	<link rel="stylesheet" href="<?= UCSS; ?>bootstrap.min.css">
	<link rel="stylesheet" href="<?= UCSS; ?>style.css">
	<link rel="stylesheet" href="<?= UCSS; ?>animate.min.css">
	<link rel="stylesheet" href="<?= UCSS; ?>color.css" id="color-change">
	<link rel="stylesheet" href="<?= UCSS; ?>font-awesome.min.css">
	<link rel="stylesheet" href="<?= UCSS; ?>layerslider.css">
	<link rel="stylesheet" href="<?= UCSS; ?>owl.carousel.min.css">
	<link rel="stylesheet" href="<?= UCSS; ?>jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?= FONT; ?>flaticon/flaticon.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
	<title><?= $page; ?> - <?= $this->data['app_name']; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?= ICON; ?>">
	<link href="<?= SA?>/sweetalert2.min.css" rel="stylesheet">
    <style>
	.error{
		color:red;
	}	
	.login-form:before{
		background: url(<?= IMAGES;?>background/6.jpg) no-repeat right center / cover !important;
	}
	.page-banner{
		background: url(<?= IMAGES; ?>background/page-banner.jpg) no-repeat center center / cover;
		width: 100%;
	}	
    .logreg-btn input {
		border-radius: 4px;
	}
	.logreg-btn{
		padding:20px;
	}
	.map-sr-content, .prop-sr-content, .moving-sr-content{
		padding:5px;
	}
	.quick-link a {
	display: contents !important;
	font-size:14px !important;
	}
	.text-thumbnail {
		border-radius:0px !important;
		margin-top:7px;
	}
	.text-thumbnail {
		box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);
		transition:.3s;
	}
	.text-thumbnail.text-center.bg-white {
		box-shadow: 0 2px 8px 0 rgba(38,38,55,0.25);
		background-color: #fff !important;
	}
	.text-thumbnail:hover, .text-thumbnail.text-center.bg-white:hover {
		box-shadow: 0 5px 20px 3px hsla(204,18%,76.5%,.85);
		transition: .3s;
	}
			.form-group {
		margin-bottom: 15px;
		/* padding: 5px; */
		/* margin-left: 10px; */
	}
	.adbanced-form-two.amenities-list.bg-light.p-20.mt-30.pl-0 .form-group .sale-rent {
		margin: auto;
		margin-top: 0px;
		margin-bottom: 15px;
		padding: 5px;
		width: 150px;
	}
	.form-group.sale-rent {
		margin: auto;
		margin-top: 0px;
		width: 150px;
	}
	.form-group.sale-rent .btn {
		padding: 0px !important;
	}
	.d-inline-block a {
		color: black !important;
		margin-top:11px;
	}
	.d-inline-block a:hover {
		color: #fd9834 !important;
	}
	/*aftr*/
	#navbarSupportedContent li a {
		color: #313131 !important;
	}
	#navbarSupportedContent li a:hover {
		color: #fd9834 !important;
	}
	.fa.fa-search{
	color: #313131 !important;    
	}
	.admin-info.color-white-a {
		width: 155px;
		margin-left: 10px;
	}
	.toggle-btn.collapsed span {
		background-color: #fd9834 !important;
	}
	#header.header-seven button.toggle-btn, #header.header-six button.toggle-btn {
		background-color: transparent;
	}
	.bg-white, .btn-white, header.header-fixed, .invoice-list-table tbody td:nth-child(2n+1), .items-list tr td:nth-child(2n+1), .btn-secondery:hover, .toggle-btn[aria-expanded="true"] span:nth-child(2) {
		background-color: #fd9834 !important;
	}
	.toggle-btn span {
		background-color: #fd9834 !important;
	}
	.text-thumbnail.w-c-img img {
		width: 274px;
		height:144px !important;
		float: right !important;
	}
	.map-sr-content,
	.prop-sr-content,
	.moving-sr-content

	{
		background-color: #fff !important;
	}
	.map-sr-content.ms,
	.prop-sr-content.pn,
	.moving-sr-content.ms {
		height:152px;
	}
	.moving-sr-content p a{
		line-height: 18px;
		color: #666666;
	}
	.moving-sr-content.ms p a:hover{
		color:#fd9834;
	}
	.main-banner-slider::before {
		content: "";
		position: absolute;
		background: url("images/banner.jpg") center center / cover;
		top: 0;
		right: 0;
		height: 85% !important;
		width: 100% !important;
		border-bottom-left-radius: 0px !important;
		z-index: -1;
	}
	.bg-light {
		background-color: #fff !important;
	}
	.col-md-12.col-lg-10.wow.animated.bg-secondary {
		margin: auto;
	}
	.animated {
		display: ;
		animation: none !important;
	}
	.btn.btn-primary.w-100 {
		background-color: #00afa9 !important;
	}
	.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:hover, .btn-primary:focus {
		border-color: #00afa9 !important;
		filter: brightness(110%);
	}
	a:hover {
		color: #00afa9 !important;
	}
	.btn.w-100:hover {
		background-color: #00afa9 !important;
		color: #fff !important;
	}
	.btn.btn-primary.w-100.mb-10:hover {
		background-color: #fff !important;
		color: #212529 !important;
	}
	.btn.w-100 {
		border: 2px solid #00AFA9 !important;
	}
</style>

<!-- Header Css Start -->
<style>
		#header {
			padding-bottom: 5px !important;
			padding-top: 5px !important;
		}
        .logreg-btn input {
            border-radius: 4px;
        }

        .logreg-btn {
            padding: 20px;
        }

        .map-sr-content,
        .prop-sr-content,
        .moving-sr-content {
            padding: 5px;
        }

        .quick-link a {
            display: contents !important;
            font-size: 14px !important;
        }

        .text-thumbnail {
            border: 1px solid #DFDFE1;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
            /* padding: 5px; */
            /* margin-left: 10px; */
        }

        .adbanced-form-two.amenities-list.bg-light.p-20.mt-30.pl-0 .form-group .sale-rent {
            margin: auto;
            margin-top: 0px;
            margin-bottom: 15px;
            padding: 5px;
            width: 150px;
        }

        .form-group.sale-rent {
            margin: auto;
            margin-top: 0px;
            width: 150px;
        }

        .form-group.sale-rent .btn {
            padding: 0px !important;
        }

        .d-inline-block a {
            color: black !important;
            margin-top: 11px;
        }

        .d-inline-block a:hover {
            color: #fd9834 !important;
        }

        /*aftr*/
        #navbarSupportedContent li a {
            color: #313131 !important;
        }

        #navbarSupportedContent li a:hover {
            color: #00afa9 !important;
        }

        .fa.fa-search {
            color: #313131 !important;
        }

        .admin-info.color-white-a {
            width: 155px;
            margin-left: 10px;
        }

        .toggle-btn.collapsed span {
            background-color: #fd9834 !important;
        }

        #header.header-seven button.toggle-btn,
        #header.header-six button.toggle-btn {
            background-color: transparent;
        }

        .bg-white,
        .btn-white,
        header.header-fixed,
        .invoice-list-table tbody td:nth-child(2n+1),
        .items-list tr td:nth-child(2n+1),
        .btn-secondery:hover,
        .toggle-btn[aria-expanded="true"] span:nth-child(2) {
            background-color: #93602d !important;
        }

        .toggle-btn span {
            background-color: #fd9834 !important;
        }

        .text-thumbnail.w-c-img img {
            width: 274px;
            height: 144px !important;
            float: right !important;
        }

        .my-header {

            display: flex;
            -moz-box-pack: justify;
            width: 100%;
            justify-content: space-between;
            0px 10px 0px 10px
        }

        .usr-icn {
            background-color: rgb(17, 89, 141);
            border-radius: 100%;
            width: 48px;
            height: 48px;
            margin-bottom: 8px;
            display: flex;
            -moz-box-pack: center;
            justify-content: center;
            -moz-box-align: center;
            align-items: center;
            color: #fff;
        }

        .sv1,
        .sv2 {
            width: 100%;
            padding: 24px;
            box-sizing: border-box;
            border-radius: 4px;
            box-shadow: rgba(38, 38, 55, 0.24) 0px 1px 1px 0px, rgba(38, 38, 55, 0.32) 0px 0px 1px 0px;
            display: grid;
            grid-template-columns: auto auto 1fr;
            grid-template-rows: repeat(3, min-content);
            gap: 4px 16px;
            grid-template-areas: "image saved saved""image address address""image price1 price2";
        }

        .rsd {
            line-height: 17px;
            font-size: 14px;
        }

        .upg img {
            width: 96px !important;
            height: 96px !important;
            border-radius: 3px !important;
        }

        .saved-time,
        .upload-time {
            font-size: 12px;
        }

        .pn {
            line-height: 22px;
            font-weight: 600;
        }

        .dob-usr,
        .usr-adrs {
            font-size: 16px;
        }

        @media only screen and (max-width: 768px) {
            .row.mt-20.mv {
                grid-gap: 10px !important;
            }
        }

        .my-header a {
            font-weight: 600;
            color: #FD9834;
        }
		#scroll {
			background-color: #00AFA9 !important;
		}
        /*.col-sm-5.upg {*/
        /*	padding-right: 0px !important;*/
        /*}*/
    </style>
<!-- Header Css End -->

<style>
    .newletter-2.py-80.px-30.mt-lg-50.bg-primary.color-white {
        background-color: #00afa9  !important;
    }
    .color-primary, .icon-primary i, .btn-more:hover, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-item .nav-link:hover, .navbar-light .navbar-nav .nav-item .nav-link:focus, .dropdown-menu .dropdown-item:hover, .dropdown-menu li.active .dropdown-item, .header-four .navbar .navbar-nav .nav-item .search-field span:hover, .navbar-light .navbar-nav .nav-item.active .nav-link, .burger-nav li.active .dropdown-item, .burger-nav li .dropdown-item:hover, .about-us .inner-title a:hover, .property-content a:hover, .service-info a:hover, .team-item a:hover, .quick-links a:hover, .blog-info .inner-title a:hover, .list-arrow-right li::before, .thum-map-content a:hover, .gallery-img a:hover, .breadcrumb a:hover, .breadcrumb-item + .breadcrumb-item::before, .blog-sidebar a:hover, .list-sidebar a:hover, .faq-ans a:hover, .btn-show-pass:hover, .form-list a:hover, .social-media-1 li a:hover, .copyright a:hover, .service-sidebar .widget-catogory a:hover, .price-range #debt-amount-slider input:checked + label::before, .navbar .navbar-nav .nav-item .search-field:hover, .custom-radio input[type="radio"]:checked ~ .text, .hover-secondery-primary a:hover, .social-media-3 a:hover, .post-title:hover, .header-five .search-field i.fa:hover, .admin-info li a:hover, .hover-white-primary a:hover, .br-widget > a.br-selected, .br-widget > a.br-active, .comment-content .user-rating li.active, .btn-link:hover, .rating i, .language .active {
        color: #00afa9 !important;
    }
    .social-media-2 a:hover, .personal-video, .price-range #debt-amount-slider input:checked + label::after, .custom-radio input[type="radio"]:checked ~ .design, .social-media-2.border-white li a:hover {
        border-color: #00afa9 !important;
    }
    .wow.slideInRight.animated a {
		display: contents;
	}
	.y-center, .select-wrapper::after, price-range #debt-amount-slider::before, .owl-nav-side .owl-nav button, .search-btn, .agent-list .btn-round, .color-panel, .burger-nav .dropdown-toggle::before {
		transform: translateY(25%);
		-moz-transition: translateY(-50%);
		-webkit-transition: translateY(-50%);
		-ms-transition: translateY(-50%);
		-o-transition: translateY(-50%);
	}
	.select-wrapper.position-relative .select.form-control {
		border: 1px solid #dfdfe1 !important;
		/*margin-top: 10px !important;*/
	}
	.trmpr a {
		display: contents;
	}
	.trmpr {
		margin-top: 5px;
		line-height: 23px;
		font-size: 15px;
		padding:16px;
	}
	.widget.py-50.px-30.bg-white.mt-50.shadow.wow.slideInDown.animated {
		background-color: #ffff !important;
	}
	.page-link.active {
		background-color: #00afa9   !important;
	}
	.post-love.py-5.bg-primary {
		background-color:  #00afa9 !important;
	}
	.share-your-story a {
		background-color: #00afa9;
		padding: 10px;
		width: 155px;
		margin-top: 12px;
		color: #ffff !important;
	}
	.share-your-story a:hover {
		background-color: #fff;
		padding: 10px;
		width: 155px;
		margin-top: 12px;
		color: black !important;
	}
	.animated {
		display: ;
		animation: none !important;
	}
	.post-love.py-5.bg-primary a:hover {
		color: #343a40 !important;
	}
	.share-story a {
		border: 2px solid #00AFA9 !important;
	}
	.logreg-btn input {
            border-radius: 4px;
        }

        .logreg-btn {
            padding: 20px;
        }

        .map-sr-content,
        .prop-sr-content,
        .moving-sr-content {
            padding: 5px;
        }

        .quick-link a {
            display: contents !important;
            font-size: 14px !important;
        }

        .text-thumbnail {
            border: 1px solid #DFDFE1;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
            /* padding: 5px; */
            /* margin-left: 10px; */
        }

        .adbanced-form-two.amenities-list.bg-light.p-20.mt-30.pl-0 .form-group .sale-rent {
            margin: auto;
            margin-top: 0px;
            margin-bottom: 15px;
            padding: 5px;
            width: 150px;
        }

        .form-group.sale-rent {
            margin: auto;
            margin-top: 0px;
            width: 150px;
        }

        .form-group.sale-rent .btn {
            padding: 0px !important;
        }

        .d-inline-block a {
            color: black !important;
            margin-top: 11px;
        }

        .d-inline-block a:hover {
            color: #fd9834 !important;
        }

        /*aftr*/
        #navbarSupportedContent li a {
            color: #313131 !important;
        }

        #navbarSupportedContent li a:hover {
            color: #fd9834 !important;
        }

        .fa.fa-search {
            color: #313131 !important;
        }

        .admin-info.color-white-a {
            width: 155px;
            margin-left: 10px;
        }

        .toggle-btn.collapsed span {
            background-color: #fd9834 !important;
        }

        #header.header-seven button.toggle-btn,
        #header.header-six button.toggle-btn {
            background-color: transparent;
        }

        .bg-white,
        .btn-white,
        header.header-fixed,
        .invoice-list-table tbody td:nth-child(2n+1),
        .items-list tr td:nth-child(2n+1),
        .btn-secondery:hover,
        .toggle-btn[aria-expanded="true"] span:nth-child(2) {
            background-color: #fd9834 !important;
        }

        .toggle-btn span {
            background-color: #fd9834 !important;
        }

        .text-thumbnail.w-c-img img {
            width: 274px;
            height: 144px !important;
            float: right !important;
        }

        .my-header {

            display: flex;
            -moz-box-pack: justify;
            width: 100%;
            justify-content: space-between;
            0px 10px 0px 10px
        }

        .usr-icn {
            background-color: rgb(17, 89, 141);
            border-radius: 100%;
            width: 48px;
            height: 48px;
            margin-bottom: 8px;
            display: flex;
            -moz-box-pack: center;
            justify-content: center;
            -moz-box-align: center;
            align-items: center;
            color: #fff;
        }

        .sv1,
        .sv2 {
            width: 100%;
            padding: 24px;
            box-sizing: border-box;
            border-radius: 4px;
            box-shadow: rgba(38, 38, 55, 0.24) 0px 1px 1px 0px, rgba(38, 38, 55, 0.32) 0px 0px 1px 0px;
            display: grid;
            grid-template-columns: auto auto 1fr;
            grid-template-rows: repeat(3, min-content);
            gap: 4px 16px;
            grid-template-areas: "image saved saved""image address address""image price1 price2";
        }

        .rsd {
            line-height: 17px;
            font-size: 14px;
        }

        .upg img {
            width: 96px !important;
            height: 96px !important;
            border-radius: 3px !important;
        }

        .saved-time,
        .upload-time {
            font-size: 12px;
        }

        .pn {
            line-height: 22px;
            font-weight: 600;
        }

        .dob-usr,
        .usr-adrs {
            font-size: 16px;
        }

        @media only screen and (max-width: 768px) {
            .row.mt-20.mv {
                grid-gap: 10px !important;
            }
        }

        .my-header a {
            font-weight: 600;
            color: #FD9834;
        }
        .my-headerbg-light.bg-light {
        	display: flex;
        	-moz-box-pack: justify;
        	width: 100%;
        	justify-content: space-between;
        }
        .container.bg,.my-headerbg-light.bg-light {
        	background-color: #ffff !important;
        }
        /********/
        .my-headerbg-light.bg-light .container {
        	display: flex;
        	-moz-box-pack: justify;
        	width: 100%;
        	justify-content: space-between;
        }
        .navbar.navbar-expand-lg.navbar-light.containerr {
        	background-color: #ffff !important;
        }
        .my-headerbg-light.bg-light .container {
        	border-bottom: 1px dotted #8a8a8a;
        	padding-bottom: 28px;
        	padding-top:17px;
        }
        .acc-hdr.bg-light {
        	padding-bottom: 0px !important;
        }
        .container.bg {
        	padding-bottom: 80px;
        	padding-top: 20px;
        }
        .collapsee.navbar-collapsee {
        	margin: auto;
        }
             .navbar.navbar-expand-lg.navbar-light.containerr {
        	box-shadow: rgb(233, 233, 235) 0px -4px 0px 0px inset;
        }
        .my-headerbg-light.bg-light a {
        	font-weight: 600;
        	color: #00afa9 !important;
        }
        .animated {
        	display: ;
        	animation: none !important;
        }
</style>