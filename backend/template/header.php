<?php require_once($_SERVER['DOCUMENT_ROOT'].'/connect/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
 <html class="ie9" lang="en">
<head>
    <meta charset="utf-8">
    <title>.: <?php echo SITE_NAME; ?> | :.</title>

    <link rel="shortcut icon" href="media/img/ico/favicon.ico" type="image/x-icon">
    <link rel="icon" href="media/img/ico/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="">
    <link rel="image_src" href="logo.png">
    <link rel="stylesheet" href="/media/css/bootstrap.css">
    <link rel="stylesheet" href="/media/css/fonts.css">
    <link rel="stylesheet" href="/media/css/icons.css">
    <link rel="stylesheet" href="/media/css/owl.carousel.css">
    <link rel="stylesheet" href="/media/css/owl.theme.green.css">
    <link rel="stylesheet" href="/media/css/jquery.fancybox.css">
    <link rel="stylesheet" href="/media/css/jquery.formstyler.css">
    <link rel="stylesheet" href="/media/css/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="/media/css/jquery-ui.css"> 
    <link rel="stylesheet" href="/media/css/jquery-ui.structure.css">
    <link rel="stylesheet" href="/media/css/jquery-ui.theme.css">
    <link rel="stylesheet" href="/media/css/template.css">
    <link rel="stylesheet" href="/media/css/responsive.css">
    <script src="/media/js/jquery.min.js"></script>
    <script src="/media/js/placeholder.min.js"></script>
    <script src="/media/js/easing.js"></script>
    <script src="/media/js/bootstrap.bundle.js"></script>
    <script src="/media/js/owl.carousel.js"></script>
    <script src="/media/js/jquery.fancybox.js"></script>
    <script src="/media/js/jquery.formstyler.js"></script>
    <script src="/media/js/jquery.sticky.js"></script>
    <script src="/media/js/jquery-ui.min.js"></script>
    <script src="/media/js/isotope.min.js"></script>
    <script src="/media/js/imagesloaded.js"></script>
    <script src="/media/js/custom.js"></script>
    <script src="media/js/html5.js"></script>

</head>
<body>
    <a href="javascript:void(0)" class="top_link">
        <i class="icon-arrow-up"></i>
    </a>
    <div class="br_wrapper">
        <!-- header -->
        <header class="br_header" id="header">
            <div class="top_line">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h2>Online store of dental products</h2>
                        </div>
                        <ul class="br_toplist col-6">
                            <li>
                                <a href="javascript:void(0)">
                                    <span>Uzbekistan</span>
                                    <i class="icon-caret-down"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <b>+998 71 289-99-99</b>
                                </a>
                            </li>
                            <?php if (isset($_SESSION['user'])) {?>
                                <li>
                                    <a href="/profile/index.php">
                                        <i class="icon-user"></i>
                                    <div>
                                        <span><?php echo $_SESSION['user']; ?></span>
                                        <small>Profile</small>
                                    </div>
                                    </a>
                                </li>
                               <?php } else { ?>
                                 
                                <?php } ?>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <div>
                                        <span>In cart</span>
                                        <small>No products</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <?php if (isset($_SESSION['user'])) {?>
                                    <a href="/logout.php">
                                        <i class="icon-sign-out"></i>
                                    <div>
                                        <span><?php echo $_SESSION['user']; ?></span>
                                        <small>Logout</small>
                                    </div>
                                    </a>
                                    <?php } else { ?>
                                <a href="/auth">
                                    <i class="icon-sign-in"></i>
                                    <div>
                                        <span>Login</span>
                                        <small>Registration</small>
                                    </div>
                                </a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="br_headline">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                          <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/logotype.php') ?>
                        </div>
                        <div class="col-9">
                           <!--menu--> 
                            <nav class="br_navbar navbar navbar-expand-lg">

                                <button class="btn_toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="br_collapse collapse navbar-collapse" id="navbarTogglerDemo02">
                                    <ul>

                                        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/main_menu.php') ?> 
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <div class="br_search_form">
                                               <form class="form-inline">
                                      <div class="form-group mx-sm-3 mb-2">
                                        <input type="text" class="form-control"  placeholder="Search">
                                      </div>
                                      <button type="submit" class="btn red">Search</button>
                                    </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!--/menu-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- / header -->
        <!-- middle -->
        <section class="br_middle" id="middle">
            <div class="container">
                <div class="row">
                    <aside class="col-3">
                        <div class="br_sideblock">

                            <h2>Find braces</h2>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Hygiene and protection productsы</a>
                                        <ul class="animation">
                                            <li>
                                                <a href="javascript:void(0)">Point 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 4</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Patient kits</a>
                                        <ul class="animation">
                                            <li>
                                                <a href="javascript:void(0)">Point 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 4</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Braces</a>
                                        <ul class="animation">
                                            <li>
                                                <a href="javascript:void(0)">Point 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 4</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Plate</a>
                                        <ul class="animation">
                                            <li>
                                                <a href="javascript:void(0)">Point 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 4</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Hygiene and protection products</a>
                                        <ul class="animation">
                                            <li>
                                                <a href="javascript:void(0)">Point 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 4</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Point 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                        </div>
                        <div class="br_sideblock">
                            <h2>New arrivals</h2>
                            <div>
                                <img src="/media/img/src/doctor.jpg">
                            </div>
                        </div>
                    </aside>
                    <div class="col-9">

                    	<?php if ($_SERVER['REQUEST_URI']!="/"&&$_SERVER['REQUEST_URI']!="/index.php"&& strpos($_SERVER['REQUEST_URI'], "detail.php") == false) {
                    	?>
                    	<div class="br_heading">
	                    	<h1>
	                    		<?php echo $pagename;?>
	                    	</h1>
                    	</div>
                    	<?php  	}  ?>	