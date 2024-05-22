<?php

add_action( 'wp_enqueue_scripts', 'porto_child_css', 1001 );

// Load CSS
function porto_child_css() {
	// porto child theme styles
	wp_deregister_style( 'styles-child' );
	wp_register_style( 'styles-child', esc_url( get_stylesheet_directory_uri() ) . '/style.css' );
	wp_enqueue_style( 'styles-child' );
	wp_register_style( 'styles-child-firebase', 'https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.css' );
	wp_enqueue_style( 'styles-child-firebase' );


	if ( is_rtl() ) {
		wp_deregister_style( 'styles-child-rtl' );
		wp_register_style( 'styles-child-rtl', esc_url( get_stylesheet_directory_uri() ) . '/style_rtl.css' );
		wp_enqueue_style( 'styles-child-rtl' );
	}
	 
}

// Added custom js for eccom
function enqueue_jquery() {
	wp_enqueue_script( 'jquery' , '', array(), true);
    wp_enqueue_script('mycustomjs', get_stylesheet_directory_uri().'/js/developer.js', array('jquery'), '1.0', true);

    // firebase social login
    wp_enqueue_script('firebaseapp');
    wp_register_script( 'firebaseapp', 'https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js', array('jquery'), '8.10.1', true );
    wp_enqueue_script('firebaseauth');
    wp_register_script( 'firebaseauth', 'https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js', array('jquery'), '8.10.1', true);
    wp_enqueue_script('firebaseui');
    wp_register_script( 'firebaseui', 'https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.js', array('jquery'), '6.0.1', true );
    wp_enqueue_script('firebasecomp');
wp_register_script( 'firebasecomp', 'https://www.gstatic.com/firebasejs/9.13.0/firebase-app-compat.js', array('jquery'), '9.13.00', true );
wp_enqueue_script('firebaseautc');
wp_register_script( 'firebaseautc', 'https://www.gstatic.com/firebasejs/9.13.0/firebase-auth-compat.js', array('jquery'), '9.13.00', true);
wp_enqueue_script('storagemdkhan');
wp_register_script( 'storagemdkhan', 'https://cdnjs.cloudflare.com/ajax/libs/firebase/8.10.1/firebase-storage.min.js', array('jquery'), '8.10.1', true);

}
add_action('wp_enqueue_scripts', 'enqueue_jquery').


// program section data

add_shortcode('program', 'program_section');
function program_section(){
	return'
		<div class="program_sections" style="text-align:center">
		<h3>PROGRAMS</h3>
		<h1>HEAL THE GUT</h1>
		<h1>HEAL THE MIND</h1>
		<p class="demo_worshop">WORKSHOPS FOR  CORPORATES/ INSTITUTIONS 15 DAYS  GUT CLEANSE</p>
		<p>2.5 MONTHS  WEIGHT MANAGEMENT & GUT RESET</p>
		</div>
		<div class="vc_row wpb_row vc_inner row services-text-icon twr-heading-bg heal-mind-otr">
		   <div class="vc_column_container col-md-4">
		      <div class="wpb_wrapper vc_column-inner">
		         <div class="wpb_single_image wpb_content_element vc_align_left appear-animation flash appear-animation-visible" data-appear-animation="flash">
		            <div class="wpb_wrapper">
		               <a href="/workshops-for-corporates-institutions/" target="_self">
		                  <div class="vc_single_image-wrapper vc_box_shadow_circle  vc_box_border_grey">
		                     <img width="300" height="300" src="https://yogasutraholisticliving.com/wp-content/uploads/2022/05/COROPORATE.png" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" title="COROPORATE" sizes="(max-width: 800px) 100vw, 800px">
		                  </div>
		               </a>
		            </div>
		         </div>
		         <h3 style="font-size: 20px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal;font-weight:500" class="vc_custom_heading"><a href="/workshops-for-corporates-institutions/">Workshops for<br>
		            Corporates/ Institutions</a>
		         </h3>

		         <div class="vc_btn3-container  icon-readmore vc_btn3-center">
		            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-o-empty wpb_custom_ce4c2cdb17a139e7188810956fa7530c vc_btn3-icon-left hover-icon-right btn" style="background-color:#f9f9f9; color:#222222; background-color:#f9f9f9; color:#222222;" href="/workshops-for-corporates-institutions/" title="/workshops-for-corporates-institutions/"><i class="vc_btn3-icon fas fa-long-arrow-alt-right"></i> <span class="vc_btn3-placeholder">&nbsp;</span></a>	
		         </div>
		      </div>
		   </div>
		   <div class="vc_column_container col-md-4">
		      <div class="wpb_wrapper vc_column-inner">
		         <div class="wpb_single_image wpb_content_element vc_align_left appear-animation flash appear-animation-visible" data-appear-animation="flash">
		            <div class="wpb_wrapper">
		               <a href="/15-days-gut-cleanse/" target="_self">
		                  <div class="vc_single_image-wrapper vc_box_shadow_circle  vc_box_border_grey">
		                     <img width="300" height="300" src="https://yogasutraholisticliving.com/wp-content/uploads/2022/05/gutclean.png" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" title="gutclean" sizes="(max-width: 800px) 100vw, 800px">
		                  </div>
		               </a>
		            </div>
		         </div>
		         <h3 style="font-size: 20px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal;font-weight:500" class="vc_custom_heading"><a href="/15-days-gut-cleanse/">15 Days<br>
		            GUT CLEANSE</a>
		         </h3>
		         <div class="vc_btn3-container  icon-readmore vc_btn3-center">
		            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-o-empty wpb_custom_ce4c2cdb17a139e7188810956fa7530c vc_btn3-icon-left hover-icon-right btn" style="background-color:#f9f9f9; color:#222222; background-color:#f9f9f9; color:#222222;" href="/15-days-gut-cleanse/" title="/15-days-gut-cleanse/"><i class="vc_btn3-icon fas fa-long-arrow-alt-right"></i> <span class="vc_btn3-placeholder">&nbsp;</span></a>	
		         </div>
		      </div>
		   </div>
		   <div class="vc_column_container col-md-4">
		      <div class="wpb_wrapper vc_column-inner">
		         <div class="wpb_single_image wpb_content_element vc_align_left appear-animation flash appear-animation-visible" data-appear-animation="flash">
		            <div class="wpb_wrapper">
		               <a href="/2-5-months-weight-management-gut-reset/" target="_self">
		                  <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey">
		                     <img width="300" height="300" src="https://yogasutraholisticliving.com/wp-content/uploads/2022/05/2.1.png" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" title="2.1" sizes="(max-width: 800px) 100vw, 800px">
		                  </div>
		               </a>
		            </div>
		         </div>
		         <h3 style="font-size: 20px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal;font-weight:500" class="vc_custom_heading"><a href="/2-5-months-weight-management-gut-reset/">2.5 months Weight Management &amp; Gut Reset</a></h3>
		         <div class="vc_btn3-container  icon-readmore vc_btn3-center">
		            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-o-empty wpb_custom_ce4c2cdb17a139e7188810956fa7530c vc_btn3-icon-left hover-icon-right btn" style="background-color:#f9f9f9; color:#222222; background-color:#f9f9f9; color:#222222;" href="/2-5-months-weight-management-gut-reset/" title="/2-5-months-weight-management-gut-reset/"><i class="vc_btn3-icon fas fa-long-arrow-alt-right"></i> <span class="vc_btn3-placeholder">&nbsp;</span></a>	
		         </div>
		      </div>
		   </div>
		</div>
	';
}


add_shortcode('quiz', 'quiz_section');

function quiz_section(){
		return'
			<div class="porto-wrap-container container">
			<div class="vc_row wpb_row vc_inner row services-text-icon twr-heading-bg">
			<div class="vc_column_container" id="yogaQuiz">
			      <div class="wpb_wrapper vc_column-inner text-center">

			      	<a href="/quiz" target="_blank" class="start-quiz-btn">
			      	<img src="/wp-content/uploads/2023/02/banner-6.png" alt="quiz start" style="max-width:1140px; width:100%">
			         <!--<div class="porto-sicon-box porto-sicon-box7 vc_custom_1651321708161 main-purpose wpb_custom_1a23caab3bacc96951eaa7e18589e4c0 style_2 top-icon appear-animation fadeInLeft appear-animation-visible" data-appear-animation="fadeInLeft">
			            
			            <div class="porto-sicon-top">
			               <div id="porto-icon-1223077486638990415e521" class="porto-just-icon-wrapper porto-sicon-img"><img class="img-icon" alt="" src="/wp-content/uploads/2023/02/100x100-png.png" width="300" height="300"></div>
			            </div>
			            <div class="porto-sicon-header">
			               <h2 class="porto-sicon-title quizeTitle" style="color:#0a0a0a;"><bold>Take two minutes GUT it</></h2>
			            </div>
			            <div class="btn-wrapper">
			            	<button class="start-quiz btn btn-info">Start Quiz</button>
			            </div>
			         </div>-->
			         </a>
			      </div>
			   </div>
			</div>
			</div>';
}

add_shortcode('service', 'service_section');

function service_section(){

	return'<div class="program_sections" style="text-align:center">
				<!-- <h3>Services</h3> -->
			</div>
			<div class="vc_row wpb_row vc_inner row services-text-icon twr-heading-bg">
			    
			    <div class="vc_column_container col-md-3">
			      <div class="wpb_wrapper vc_column-inner">
			      	<a href="/spa-services" target="_blank">
			         <div class="porto-sicon-box vc_custom_1651315877123 main-purpose wpb_custom_a3162b10825b0d573c5405784d22267c style_2 top-icon appear-animation fadeInDown appear-animation-visible" data-appear-animation="fadeInDown" data-appear-animation-delay="200" style="animation-delay: 200ms;">
			            <div class="porto-sicon-top">
			               <div id="porto-icon-802723946638990415f304" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 100px;"><img class="img-icon" alt="" src="/wp-content/uploads/2022/12/spa.png" width="300" height="300"></div>
			            </div>
			            <div class="porto-sicon-header">
			               <h3 class="porto-sicon-title" style="color:#0a0a0a;">Spa</h3>
			               <p>Services</p>
			            </div>
			         </div>
			         </a>
			      </div>
			   </div>
			    <div class="vc_column_container col-md-3">
			      <div class="wpb_wrapper vc_column-inner">
			      	<a href="/gallery-media" target="_blank">
			         <div class="porto-sicon-box porto-sicon-box2 vc_custom_1651315883903 main-purpose wpb_custom_1a23caab3bacc96951eaa7e18589e4c0 style_2 top-icon appear-animation fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="400" style="animation-delay: 400ms;">
			            <div class="porto-sicon-top">
			               <div id="porto-icon-1949691199638990415ffe7" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 100px;"><img class="img-icon" alt="" src="/wp-content/uploads/2022/12/gallery.png" width="300" height="300"></div>
			            </div>
			            <div class="porto-sicon-header">
			               <h3 class="porto-sicon-title" style="color:#0a0a0a;">Gallery</h3>
			               <p>Media Section</p>
			            </div>
			         </div>
			         </a>
			      </div>
			   </div>
			    <div class="vc_column_container col-md-3">
			      <div class="wpb_wrapper vc_column-inner">
			      	<a href="/training-academy" target="_blank">
			         <div class="porto-sicon-box porto-sicon-box3 vc_custom_1651315891197 main-purpose wpb_custom_fb5430db69506fecdc848a735ddcf5f2 style_2 top-icon appear-animation fadeInRight appear-animation-visible" data-appear-animation="fadeInRight" data-appear-animation-delay="400" style="animation-delay: 400ms;">
			            <div class="porto-sicon-top">
			               <div id="porto-icon-10001610926389904160c2d" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 100px;"><img class="img-icon" alt="" src="wp-content/uploads/2022/12/training.png" width="300" height="300"></div>
			            </div>
			            <div class="porto-sicon-header">
			               <h3 class="porto-sicon-title" style="color:#0a0a0a;">Training</h3>
			               <p>Academy</p>
			            </div>
			         </div>
			         </a>
			      </div>
			   </div>
			    <div class="vc_column_container col-md-3">
			      <div class="wpb_wrapper vc_column-inner">
			      	<a href="/yogas" target="_blank">
			         <div class="porto-sicon-box porto-sicon-box4 vc_custom_1651321708161 main-purpose wpb_custom_1a23caab3bacc96951eaa7e18589e4c0 style_2 top-icon appear-animation fadeInLeft appear-animation-visible" data-appear-animation="fadeInLeft">
			            <div class="porto-sicon-top">
			               <div id="porto-icon-1223077486638990415e521" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 100px;"><img class="img-icon" alt="" src="/wp-content/uploads/2022/12/yoga.png" width="300" height="300"></div>
			            </div>
			            <div class="porto-sicon-header">
			               <h3 class="porto-sicon-title" style="color:#0a0a0a;">Yoga</h3>
			               <p>Courcess</p>
			            </div>
			         </div>
			         </a>
			      </div>
			   </div>
			   <div class="vc_column_container col-md-3">
			      <div class="wpb_wrapper vc_column-inner">
			      	<a href="/health-2" target="_blank">
			         <div class="porto-sicon-box porto-sicon-box5 vc_custom_1651321708161 main-purpose wpb_custom_1a23caab3bacc96951eaa7e18589e4c0 style_2 top-icon appear-animation fadeInLeft appear-animation-visible" data-appear-animation="fadeInLeft">
			            <div class="porto-sicon-top">
			               <div id="porto-icon-1223077486638990415e521" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 100px;"><img class="img-icon" alt="" src="wp-content/uploads/2022/12/health.png" width="300" height="300"></div>
			            </div>
			            <div class="porto-sicon-header">
			               <h3 class="porto-sicon-title" style="color:#0a0a0a;">Health</h3>
			               <p>Lifestyle</p>
			            </div>
			         </div>
			         </a>
			      </div>
			   </div>
			   	<div class="vc_column_container col-md-3">
			      <div class="wpb_wrapper vc_column-inner">
			      	<a href="/other-servicess" target="_blank">
			         <div class="porto-sicon-box porto-sicon-box6 vc_custom_1651321708161 main-purpose wpb_custom_1a23caab3bacc96951eaa7e18589e4c0 style_2 top-icon appear-animation fadeInLeft appear-animation-visible" data-appear-animation="fadeInLeft">
			            <div class="porto-sicon-top">
			               <div id="porto-icon-1223077486638990415e521" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 100px;"><img class="img-icon" alt="" src="/wp-content/uploads/2022/12/other-services.png" width="300" height="300"></div>
			            </div>
			            <div class="porto-sicon-header">
			               <h3 class="porto-sicon-title" style="color:#0a0a0a;">Other</h3>
			               <p>Services</p>
			            </div>
			            </a>
			         </div>
			      </div> 
			   </div>
			   	<div class="vc_column_container col-md-3" id="yogaQuiz">
			      <div class="wpb_wrapper vc_column-inner">
			      	<a href="/quize" target="_blank">
			         <div class="porto-sicon-box porto-sicon-box7 vc_custom_1651321708161 main-purpose wpb_custom_1a23caab3bacc96951eaa7e18589e4c0 style_2 top-icon appear-animation fadeInLeft appear-animation-visible" data-appear-animation="fadeInLeft">
			            <div class="porto-sicon-top">
			               <div id="porto-icon-1223077486638990415e521" class="porto-just-icon-wrapper porto-sicon-img" style="font-size: 100px;"><img class="img-icon" alt="" src="/wp-content/uploads/2022/12/quiz.png" width="300" height="300"></div>
			            </div>
			            <div class="porto-sicon-header">
			               <h3 class="porto-sicon-title quizeTitle" style="color:#0a0a0a;"><bold>Take a quick GUT health quiz</></h3>
			            </div>
			         </div>
			         </a>
			      </div>
			   </div>
			</div>';
}


add_shortcode('catalogue', 'catalogue_section');
function catalogue_section(){

	include('firebasedb.php');

	//$catalogues = $storage->collection('catalogue')->orderBy("price")->where("active", "=", true)->documents();
	//$catalogues = $storage->collection('catalogue')->orderBy("price")->documents();
	//$catalogues = $storage->collection('catalogue')->where("active", "=", true)->documents();
	//$catalogues = $storage->collection('catalogue')->where("active", "=", true)->limit(2)->documents();
         

	$catalogue = $storage->collection('catalogue')->orderBy('serialOrder', 1)->documents();

	$catalogues =[];
	foreach ($catalogue as $key => $value) {
		if($value['active'] ===true){
			$catalogues[$key] = $value;
		}
	}
	

    $html ="";
    foreach ($catalogues as $key => $catalogue) {

    $html.='<div class="col-md-6">
		    	<div class="productBody">
		    		<img class="serviceLogoIcon" src="https://firebasestorage.googleapis.com/v0/b/yoga-sutra-admin.appspot.com/o/logo-icn.png?alt=media&token=43e25bed-7e4c-4d45-8b8b-b0e69e4520e4" >
			      	<a target="_blank" href="/catalogue?catalogueId='.$catalogue['catalogueId'].'">
		                <img src="'.$catalogue['imageUrl'].'" height="" width="">
		            </a>
		            <div class="desc">
		                <h3>'.$catalogue['name'].'</h3>
		                <p class="btn btn-info"><a target="_blank" href="/catalogue?catalogueId='.$catalogue['catalogueId'].'">View</a></p>
		            </div>
	            </div>
		    </div>';

   }

return '<div class="container"><div class="row">'.$html.'</div></div>';


}

// user check login or not Login
function check_user() {
 
	if ( is_user_logged_in() ) {
		echo json_encode(['status'=>true, 'statuscode'=>200, 'message'=>'User logedin']);
	}else{
		echo json_encode(['status'=>false, 'statuscode'=>201, 'message'=>'Please login before add to cart']);
	}
	wp_die();
	
}

add_action('wp_ajax_nopriv_check_user', 'check_user');
add_action('wp_ajax_check_user', 'check_user');


// Add To cart function
function addto_cart(){

	if(isset($_POST['AddTocart'])){
		$product_id = $_POST['product_id'];
		$product_category = $_POST['product_category'];
		$product_name = $_POST['product_name'];
		$product_duration = $_POST['product_duration'];
		$product_price = $_POST['product_price'];
		$product_image = $_POST['product_image'];


		$data = array([
			'product_id'=>$product_id,
			'product_category'=>$product_category,
			'product_name'=>$product_name,
			'product_duration'=>$product_duration,
			'product_price'=>$product_price,
			'product_image'=>$product_image
		]);

		if(isset($_COOKIE['AddTocart'])){

			/*$cookies_data = json_decode(stripslashes($_COOKIE['AddTocart']));

			$myItems = array_column($cookies_data,'product_id');

			if(in_array($product_id, $myItems)){
				echo json_encode(['status'=>true, 'statuscode'=>201, 'message'=>'Already Added this item in your cart']);
				wp_die();
			}

			$count = count($cookies_data);*/
			//$newData = array_merge($cookies_data, $data);
			setcookie('AddTocart', json_encode($data), time() + (86400 * 30), "/");
			echo json_encode(['status'=>true, 'statuscode'=>200, 'message'=>'Added item in your cart']);

		}else{

			setcookie('AddTocart', json_encode($data), time() + (86400 * 30), "/");
			echo json_encode(['status'=>true, 'statuscode'=>200,'message'=>"Added item in your cart"]);
		}

		//echo json_encode(['status'=>true, 'message'=>$product_id]);
	}
	
	wp_die();
}

add_action('wp_ajax_nopriv_addto_cart', 'addto_cart');
add_action('wp_ajax_addto_cart', 'addto_cart');


// Remove items
function removeitem(){

	if(isset($_POST['action'])){

		$product_id = $_POST['product_id'];

		$item_index = $_POST['items_index'];

		$cookies_data = json_decode(stripslashes($_COOKIE['AddTocart']));

		foreach ($cookies_data as $key => $value) {
			
			if ($key == $item_index) {
			unset($cookies_data[$item_index]);
			//setcookie('AddTocart', json_encode($cookies_data), time() + (86400 * 30), "/");
			setcookie('AddTocart', json_encode(array_values($cookies_data)), time() + (86400 * 30), "/");

			}
		}

		echo json_encode(['status'=>true, 'statuscode'=>200, 'message'=>"Your cart item removed"]);
		wp_die();

	}

}

add_action('wp_ajax_nopriv_removeitem', 'removeitem');
add_action('wp_ajax_removeitem', 'removeitem');


//cart icone at top

add_shortcode('productcart', 'product_cart');
function product_cart(){

	$userTokens = $_COOKIE['FIREBASE_LOGIN'];
	$userToken = json_decode(stripslashes($userTokens));
	$cart_data = json_decode(stripslashes($_COOKIE['AddTocart']));

	/*echo "<pre>";
	print_r($userToken);
	die;*/

	$count = !empty($cart_data)?count($cart_data):0;
	?>

	<!--<div class="TopHeaderMarq"><marquee class="marqText" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">Director,YogaSutra Holistic living Restorative Yoga Teacher Certified Health & lifestyle Medicine Coach (Indian Association of Functional Medicine)</marquee></div> -->

	<div class="cartMenu">
		<ul id="menu-main-menu" class="main-menu mega-menu">
		    <li id="nav-menu-item-703" class="menu-item"><span class="productCart"><a href="/cart-list"><i class="fa fa-shopping-cart" style="font-size:36px"><label><?=$count?></label></i></a></span>

		    </li>
		</ul>
	</div>


	<?php if ($userToken->accessToken!== null || $userToken->uid!== null){ 

		$name = $userToken->name;
		$title = $name? "User:" : "New User";
		$photo = $userToken->photoURL?$userToken->photoURL:'/wp-content/uploads/2022/12/users-vector-icon-png_260862.jpg';

		?>
		<div class="userProfile">
			<ul id="menu-main-menu" class="main-menu mega-menu">
				<li id="nav-menu-item" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub narrow sub-ready"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
					<div class="popupProfile" style="display: block;">
						<div class="inner" style="">

							<ul class="sub-menu">
								<li id="nav-menu-item" class="menu-item " data-cols="1"><a href="/user-profile">Profile</a></li>
								<li id="nav-menu-item" class="menu-item " data-cols="1" onclick="LogoutUser();"><a href="javascript:void(0)">Logout</a></li>
							</ul>

						</div>
					</div>
				</li>
			</ul>
		</div>
	<?php 
		}else{ 
			echo'<div><ul class="sub-menu userLogin2"><li id="nav-menu-item" class="menu-item" data-cols="1"><a href="/user-login">Login/Signup</a></li></ul></div>';
		}


		echo '<!--<div class="appDownloadLin">
			<ul id="menu-main-menu" class="main-menu mega-menu">
				<li id="nav-menu-item" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub narrow sub-ready"><a href="#">Download Now <img src="/wp-content/uploads/2023/02/arrow.png"></a>
					<div class="downloadNow" style="display: block;">
						<div class="inner">
							<ul class="sub-menu">
								<li id="nav-menu-item" class="menu-item " data-cols="1"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.auribises.yogasutra">Google Play</a></li>
								<li id="nav-menu-item" class="menu-item " data-cols="1"><a target="_blank" href="https://apps.apple.com/in/app/yogasutra-crafting-good-living/id1582321858">App Store</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div> -->';

	}

function checkout_user() {

	if ( is_user_logged_in() ) {
		return json_encode(['status'=>200, 'message'=>'User logedin']);
	}else{
		return json_encode(['status'=>401,'message'=>'Please login before add to cart']);
	}
	wp_die();
	
}


// checkout cart
function checkout_cart(){

	$userStatus = json_decode(checkout_user(),true);

	$userTokens = $_COOKIE['FIREBASE_LOGIN'];
	$userToken = json_decode(stripslashes($userTokens));
	$cart_data = json_decode(stripslashes($_COOKIE['AddTocart']));

	if(isset($userToken->accessToken) || !empty($userToken->uid)){

		if(!empty($cart_data) && count($cart_data)>0){
			echo json_encode(['status'=>true, 'statuscode'=>200, 'message'=>'Check out']);
		}else{
			echo json_encode(['status'=>true, 'statuscode'=>201, 'message'=>'Your cart is empty!']);
		}

	}else{
		echo json_encode(['status'=>false,'statuscode'=>201, 'message'=>'Please login before checkout!']);
	}
	wp_die();
}

add_action('wp_ajax_nopriv_checkout_cart', 'checkout_cart');
add_action('wp_ajax_checkout_cart', 'checkout_cart');


// checkout cart payment
function checkout_payment(){

	//initialize database
	include('firebasedb.php');

	$userStatus = json_decode(checkout_user(),true);

	$userTokens = $_COOKIE['FIREBASE_LOGIN'];
	$userToken = json_decode(stripslashes($userTokens));
	$cart_data = json_decode(stripslashes($_COOKIE['AddTocart']));

	$createData = date("Y-m-d H:i:s");
	$createdAt = strtotime($createData);
	$curentYearMonth = date('Y').date('m');

	if(isset($userToken->accessToken) || !empty($userToken->uid)){

		if(!empty($cart_data) && count($cart_data)>0){

			if(isset($_POST['action'])){

			//user data
			$user_data =[
				'customerId'=> $_POST['uid'],
				'authId'=> $_POST['uid'],
				'name'=> $_POST['name'],
				'first_last_name'=> $_POST['name'].', '.$_POST['lastname'],
				'email'=> $_POST['email'],
				'mobile'=> $_POST['mobile'],
				'countryCode'=> $_POST['countryCode'],
				'address'=> $_POST['address'],
				'city'=> $_POST['city'],
				'landmark'=> $_POST['landmark'],
				'state'=> $_POST['state'],
				'country'=> $_POST['country'],
				'zip'=> $_POST['zip'],
				'monthlyCustomerId'=> $_POST['monthlyCustomerId']?$_POST['monthlyCustomerId']:$curentYearMonth,
				'createdAt' =>$createdAt
			];

			$userDetails = $storage->collectionGroup('customers')->where("customerId", "=", $userToken->uid)->documents();

			$userData =[];

			foreach ($userDetails as $users) {
				
				if($users->exists()){

			        $userData['userDetailId'] = $users->id();
			        $userData['user_id'] = $users['user_id'];
			       	$userData['email'] = $users['email'];
			       	$userData['mobile'] = $users['mobile'];
			       	$userData['monthlyCustomerId'] = $users['monthlyCustomerId'];

				}
			}


			if(!empty($userData['user_id']) || $userData['monthlyCustomerId']){

				//$storage->collection('userDetails')->document($userData['userDetailId'])->set($user_data);
				$curentYearMonth = $userData['monthlyCustomerId'];
				$storage->collection('monthlyCustomers')
				->document($curentYearMonth)
				->collection("customers")
				->document($_POST['uid'])
				->set($user_data);

			}else{
				
				//$storage->collection('userDetails')->add($user_data);
				$curentYearMonth = date('Y').date('m');
				$storage->collection('monthlyCustomers')
				->document($curentYearMonth)
				->collection("customers")
				->document($_POST['uid'])
				->set($user_data);
			}


			// Order data table
				$order_data =[
					'user_id'=> $_POST['uid'],
					'items_quantity'=> $_POST['quantity'],
					'gst'=> $_POST['gst'],
					'total_amount'=> $_POST['totalAmount'],
					'order_status'=> "Pending",
					'transection_id'=>"null",
					'createdAt' =>$createdAt
				];
			$userOrdersData = $storage->collection('userOrders')->add($order_data);

			$order_id = $userOrdersData->id();

			foreach ($cart_data as $key => $cartitems) {
				$orderItems_data =[
					'user_id'=> $_POST['uid'],
					'order_id'=> $order_id,
					'product_id'=> $cartitems->product_id,
					'product_category'=> $cartitems->product_category,
					'product_name'=> $cartitems->product_name,
					'product_duration'=> $cartitems->product_duration,
					'product_price'=> $cartitems->product_price,
					'product_image'=> $cartitems->product_image,
					'createdAt' =>$createdAt
				];

				$storage->collection('orderItems')->add($orderItems_data);

			}

				//set order Id
				$orderId = array([
					'order_id'=>$order_id
				]);

				setcookie('OrderId', json_encode($orderId), time() + (86400 * 30), "/");

				echo json_encode(['status'=>true, 'order_id'=>$order_id ,'statuscode'=>200,'message'=>'Successfully replaced your order']);
			}

		}else{
			echo json_encode(['status'=>true, 'statuscode'=>201, 'message'=>'Your cart is empty!']);
		}

	}else{
		echo json_encode(['status'=>false,'statuscode'=>201, 'message'=>'Please login before checkout!']);
	}
	wp_die();
}

add_action('wp_ajax_nopriv_checkout_payment', 'checkout_payment');
add_action('wp_ajax_checkout_payment', 'checkout_payment');


function payment_status(){

	$userTokens = $_COOKIE['FIREBASE_LOGIN'];
	$userToken = json_decode(stripslashes($userTokens));


	//initialize database
	include('firebasedb.php');

	$OrderId = $_COOKIE['OrderId'];
	$OrderId = json_decode(stripslashes($OrderId));
	$product_order_id = $OrderId[0]->order_id;

	if(isset($_POST['action'])){

		$order_payment_data = [
			'transection_id'=> $_POST['paymentId'],
			'order_status'=> $_POST['paymentStatus']
		];

		//$storage->collection('userOrders')->document($product_order_id)->update($order_payment_data);

		$storage->collection('userOrders')->document($product_order_id)->set($order_payment_data, ['merge' => true]);

		$userOrderMail = $storage->collection('userOrders')->document($product_order_id)->snapshot();

		$userDatadetails = $storage->collectionGroup('customers')->where("customerId", "=", $userToken->uid)->documents();


	    if(!empty($userDatadetails)){
	      $userDetail =[];
	      foreach ($userDatadetails as $key => $userDet){
	        $userDetail['email'] = $userDet['email'];
	        $userDetail['mobile'] = $userDet['mobile'];
	        $userDetail['address'] = $userDet['address'];
	        $userDetail['name'] = $userDet['name'];
	        $userDetail['id'] = $userDet['customerId'];
	        $userDetail['countryCode'] = $userDet['countryCode'];
	        $userDetail['country'] = $userDet['country'];
	        $userDetail['state'] = $userDet['state'];
	        $userDetail['zip'] = $userDet['zip'];
	        $userDetail['monthlyCustomerId'] = $userDet['monthlyCustomerId'];
	      }
	    }


	    $name = $userToken->name?$userToken->name:$userDetail['name'];
	    $userEmail = $userToken->email?$userToken->email:$userDetail['email'];
	    $userPhone = $userToken->phoneNumber?$userToken->phoneNumber:$userDetail['mobile'];
	    $userAddress = $userDetail['address']?$userDetail['address']:"";
	    $countryCode = $userDetail['countryCode']?$userDetail['countryCode']:"";
	    $country = $userDetail['country']?$userDetail['country']:"";
	    $state = $userDetail['state']?$userDetail['state']:"";
	    $zip = $userDetail['zip']?$userDetail['zip']:"";
	    $userPhone = $countryCode.$userPhone;


		if($userOrderMail->exists() && !empty($userEmail)){


		$total_amount = $userOrderMail['total_amount'];
		$order_status = $userOrderMail['order_status'];
		$gst = $userOrderMail['gst'];
		$items_quantity = $userOrderMail['items_quantity'];

		$email = $userToken->email?$userToken->email:$userDetail['email'];
		//$email = $userDetail['email']?$userDetail['email']:$userToken->email;

		// for dynamically email template
		$CartId = $_COOKIE['AddTocart'];
		$CartIdDetails = json_decode(stripslashes($CartId));
		$productIdEmail = $CartIdDetails[0]->product_id;
		$checkOutproductId = $CartIdDetails[0]->product_id;

		$userEmailTemplate = $storage->collection('emailTemplates')->where("serviceId", "=", $productIdEmail)->documents();

		$template =[];
		foreach ($userEmailTemplate as $key => $templates) {
		  $template['id'] = $templates->id();
		  $template['template_content'] = $templates['emailContent'];
		  $template['serviceName'] = $templates['serviceName'];
		  $template['shortName'] = $templates['shortName'];
		  $template['whatsapp'] = $templates['whatsapp'];
		}
		$emailTemplateContent = $template['template_content'];
		$serviceName = $template['serviceName'];
		$shortName = $template['shortName'];
		$whatsappMessage = $template['whatsapp'];


		/*if(!empty($userPhone) || $order_status =="success"){
			sendWhatsAppmessage($userPhone,$whatsappMessage);
		}*/



		$orderlogfile = get_home_path().'orders.log';
		$data = date('d-m-Y H:i:s');
		$paymentId = $_POST['paymentId'];
		$message = "Data :$data, PaymentId :$paymentId, OrderId :$product_order_id, Name :$name, Email :$email, Mobile : $userPhone, Service Name : $serviceName, Total amount :$total_amount , Order status :$order_status, Total GST : $gst, Total quantity: $items_quantity, Country: $country, State: $state, Zip code: $zip \n ";

		error_log($message, 3, $orderlogfile);


		$adminemail = $order_status =="success" ? "developerphpadminsuccess2024@yopmail.com" : "developerphpadminfail2024@yopmail.com";
		//$adminemail = $order_status =="success" ? "shivanibajwa@yogasutraholisticliving.com" : "shivaniyogasutra@yogasutraholisticliving.com";

		$adminemailHeaders = $order_status =="success" ? "developerphp1995@gmail.com" : "developerphp1995@yopmail.com";
		//$adminemailHeaders = $order_status =="success" ? "yogasutra.confirm@gmail.com" : "shivaniyogasutra@yogasutraholisticliving.com";
		$orderuseremail = $email;


		adminOrdersendMail($adminemail, $total_amount, $order_status, $gst, $items_quantity, $orderuseremail, $name, $userPhone,$serviceName,$shortName, $emailTemplateContent, $product_order_id, $userAddress, $country, $state, $zip, $adminemailHeaders, $checkOutproductId);

		
		}else{
			echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Your order is not creation contact with admin']);
		}

		
	}

	wp_die();

}

add_action('wp_ajax_nopriv_payment_status', 'payment_status');
add_action('wp_ajax_payment_status', 'payment_status');


function ProductCartItemsRemove(){
	unset($_COOKIE['AddTocart']); 
    setcookie('AddTocart', null, -1, '/');
    setcookie('AddTocart', json_encode([]), time() + (86400 * 30), "/");

    // remove orderId
    unset($_COOKIE['OrderId']); 
    setcookie('OrderId', null, -1, '/');
    setcookie('OrderId', json_encode([]), time() + (86400 * 30), "/");
}

/*function sendWhatsAppmessage($userPhone, $whatsappMessage){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://smstool.in/api/send.php?number='.$userPhone.'&type=text&message='.$whatsappMessage.'&instance_id=63FDD8CE3FFAD&access_token=055238364469a78fd8a7484b440507b7',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
}*/


function userOrdersendMail($total_amount,$order_status,$gst, $items_quantity,$orderuseremail, $name,$userPhone, $emailTemplateContent,$serviceName,$shortName,$product_order_id, $userAddress, $country, $state, $zip, $adminemailHeaders, $checkOutproductId){

		$touser = $orderuseremail;
		$ordSub = "yogasutra";
		$subject = "Your order details";
		$message .='
		<html>
		<head>
		<meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<title>YogaSutra</title>
			<link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
		</head>
		<body style="font-family: Open Sans,Helvetica,Arial,sans serif; margin:0;">
		        	
			<div style="background-color:#fafafa; width:100%; margin:auto; padding: 50px 0 20px;">
		        <table border="0" cellpadding="0" cellspacing="0" style="width:100%; max-width:600px; margin:auto;background-color: #fff1f7; background-image:url(https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/email-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center bottom; text-align: center; border-top: 4px solid #ee8486;">
		            <tbody>
		                <tr>
		                    <td style="padding:30px 55px 46px;">
		                        <img src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/logo.png" width="300px">
		                        <p style=" font-size:16px; text-align: left;">
		                            <span>'.$emailTemplateContent.'</span>
		                        </p>
		                    </td>
		                </tr>
		            </tbody>	
		        </table>
		        <table border="0" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:600px; margin: 20px auto 0; text-align:center;">
		        	<tbody>
		            	<tr>
		                	<td>
		                    	<p style="margin: 10px 0 0;">
		                            <img src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/logo-icn.png" width="70px">
		                        </p>
		                        <p style="margin: 0 0 4px; color:#474747; font-size:14px;">follow us on <a href="https://www.instagram.com/shivanibajwayogasutra/" style="margin:0 10px 0 0;"><img style="position: relative; top:3px" src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/instagram.png" width="18px"></a></p>
		                        <p style="color:#474747; font-size:14px; margin: 0 0 30px 0;">
		                            Copyright © 2023. All rights reserved.<br>
		                            A better company begins with a personalised employee experience.                     
								</p>
		                    </td>
		                </tr>
		            </tbody>
		        </table>
		     </div>
		</body>
		</html>';

		// Always set content-type when sending HTML email
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		//More headers
		$headers .= "From: ".$ordSub."<yogasutrachd@gmail.com>" . "\r\n";
		//$headers .= "Bcc: ".$adminemailHeaders. "\r\n";

		include('dompdf.php');
		$pdfLogo  = pdfLogo;

		$htmlInvoice .='<div class="container" style="width: 80%; margin-right: auto; margin-left: auto;">
        <div class="brand-section" style=" background-color: #fff1f7; padding: 10px 40px; border:1px solid gray;">
            <table style="width:100%;">
                <tbody>
                    <tr>
                        <td>
                            <img src="'.$pdfLogo.'" style="width:150px;">
                        </td>
                        <td>
                            <div class="company-details" style="text-align: right;">
                                <p class="text-white" style="margin: 0; padding: 0;">'.$name.'</p>
                                <p class="text-white" style="margin: 0; padding: 0;">'.$orderuseremail.'</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="body-section" style="padding: 16px; border: 1px solid gray;">
        	<table style="width:100%;">
                <tbody>
                    <tr>
                        <td>
                            <h2 class="heading" style="margin: 0; padding: 0; font-size: 18px;   margin-bottom: 05px;">Invoice No:'.$product_order_id.'</h2>
                    		<p class="sub-heading" style="margin: 0; padding: 0; color: #262626; margin-bottom: 05px;">Order Date: '.date("d-m-Y:h:i:s").'</p>
                    		<p class="sub-heading" style="margin: 0; padding: 0; color: #262626; margin-bottom: 05px;">Email: '.$orderuseremail.' </p>
                    		<p class="sub-heading" style="margin: 0; padding: 0; color: #262626; margin-bottom: 05px;">Country: '.$country.' </p>
                        </td>
                        <td>
                            <p class="sub-heading" style="margin: 0; padding: 0; color: #262626; margin-bottom: 05px;">Full Name: '.$name.' </p>
                    		<p class="sub-heading" style="margin: 0; padding: 0; color: #262626; margin-bottom: 05px;" style="margin: 0; padding: 0;">Address: '.$userAddress.' </p>
                    		<p class="sub-heading" style="margin: 0; padding: 0; color: #262626; margin-bottom: 05px;">Phone Number: '.$userPhone.' </p>
                    		<p class="sub-heading" style="margin: 0; padding: 0; color: #262626; margin-bottom: 05px;">State: '.$state.' </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="body-section" style="padding: 16px; border: 1px solid gray;">
            <h3 class="heading" style="margin: 0; padding: 0; font-size: 20px; margin-bottom: 08px;">Ordered Items</h3>
            <br>
            <table class="table-bordered" style="background-color: #fff; width: 100%; border-collapse: collapse; box-shadow: 0px 0px 5px 0.5px gray;">
                <thead>
                    <tr style="border: 1px solid #111; background-color: #f2f2f2;">
                        <th style="padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;">Product</th>
                        <th style="padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6; width: 20%;" class="w-20">Price</th>
                        <th style="padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6; width: 20%;" class="w-20">Quantity</th>
                        <th style="padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6; width: 20%;" class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="vertical-align: middle; text-align: center; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;">'.$serviceName.'</td>
                        <td style="vertical-align: middle; text-align: center; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;">'.$total_amount.'</td>
                        <td style="vertical-align: middle; text-align: center; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;">'.$items_quantity.'</td>
                        <td style="vertical-align: middle; text-align: center; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;">'.$total_amount.'</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle; text-align: right; padding-right: 08px; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;"colspan="3" class="text-right">Sub Total</td>
                        <td style="vertical-align: middle; text-align: center; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;">'.$total_amount.'</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle; text-align: right; padding-right: 08px; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;"colspan="3" class="text-right">GST</td>
                        <td style="vertical-align: middle; text-align: center; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;">'.$gst.'</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle; text-align: right; padding-right: 08px; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;" colspan="3" class="text-right">Grand Total</td>
                        <td style="vertical-align: middle; text-align: center; padding-top: 08px; padding-bottom: 08px; border: 1px solid #dee2e6;">'.$total_amount.'</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading" style="margin: 0; padding: 0; font-size: 20px; margin-bottom: 08px;">Payment Status: '.$order_status.'</h3>
        </div>

        <div class="body-section" style="padding: 16px; border: 1px solid gray;">
            <p style="margin: 0; padding: 0;">&copy; Copyright 2023 - yogasutra. 
                <a href="https://yogasutraholisticliving.com/" class="float-right" style="float: right;">www.yogasutraholisticliving.com</a>
            </p>
        </div>      
    </div>';

		$dompdf->loadHtml($htmlInvoice);
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();

		$dir = get_home_path().'/invoice/';
		$filename = strtotime(date('d M Y H:i:s')).".pdf";
		ob_end_clean();
		$pdf = $dompdf->output();  
		file_put_contents($dir.$filename, $pdf);
		unset($htmlInvoice);
		unset($dompdf);

		$invoicefile = get_home_path().'invoice/'.$filename;

		if(wp_mail($touser,$subject,$message,$headers, $invoicefile)){
			//cart items removed
			ProductCartItemsRemove();
			echo json_encode(['status'=>true, 'statuscode'=>200,'message'=>'Sent mail to user Successfully', 'productid'=>$checkOutproductId]);

		}else{
			echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Some things error to send mail']);
		}

}


function adminOrdersendMail($adminemail, $total_amount, $order_status, $gst, $items_quantity, $orderuseremail, $name, $userPhone,$serviceName,$shortName, $emailTemplateContent, $product_order_id, $userAddress, $country, $state, $zip, $adminemailHeaders, $checkOutproductId){

		$toadmin = $adminemail;
		$ordSub = "yogasutra";
		$subject = formTags['checkOut']."$shortName:order details";
		$message .='
		<html>
		<head>
		<meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<title>YogaSutra</title>
			<link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
		</head>
		<body style="font-family: Open Sans,Helvetica,Arial,sans serif; margin:0;">
		        	
			<div style="background-color:#fafafa; width:100%; margin:auto; padding: 50px 0 20px;">
		        <table border="0" cellpadding="0" cellspacing="0" style="width:100%; max-width:600px; margin:auto;background-color: #fff1f7; background-image:url(https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/email-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center bottom; text-align: center; border-top: 4px solid #ee8486;">
		            <tbody>
		                <tr>
		                    <td style="padding:30px 55px 46px;">
		                        <img src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/logo.png" width="300px">
		                        <p style=" font-size:16px; text-align: left;">
		                            <b>New request for service</b><br>
		                            <b>Order details are below:-</b><br>
									Name:'.$name.'<br>
									Email:'.$orderuseremail.'<br>
									Mobile:'.$userPhone.'<br>
									Service Name:'.$serviceName.'<br>
									Total amount:'.$total_amount.'<br>
									Order status:'.$order_status.'<br>
									Total GST :'.$gst.'<br>
									Total quantity:'.$items_quantity.'<br>
		                        </p>
		                    </td>
		                </tr>
		            </tbody>	
		        </table>
		        <table border="0" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:600px; margin: 20px auto 0; text-align:center;">
		        	<tbody>
		            	<tr>
		                	<td>
		                    	<p style="margin: 10px 0 0;">
		                            <img src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/logo-icn.png" width="70px">
		                        </p>
		                        <p style="margin: 0 0 4px; color:#474747; font-size:14px;">follow us on <a href="https://www.instagram.com/shivanibajwayogasutra/" style="margin:0 10px 0 0;"><img style="position: relative; top:3px" src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/instagram.png" width="18px"></a></p>
		                        <p style="color:#474747; font-size:14px; margin: 0 0 30px 0;">
		                            Copyright © 2023. All rights reserved.<br>
		                            A better company begins with a personalised employee experience.                     
								</p>
		                    </td>
		                </tr>
		            </tbody>
		        </table>
		     </div>
		</body>
		</html>';

		// Always set content-type when sending HTML email
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		//More headers
		$headers .= "From: ".$ordSub."<yogasutrachd@gmail.com>" . "\r\n";
		$headers .= "Bcc: ".$adminemailHeaders. "\r\n";

		if(wp_mail($toadmin,$subject,$message,$headers)){

			if($order_status =="success"){
			userOrdersendMail($total_amount, $order_status, $gst, $items_quantity, $orderuseremail, $name, $userPhone, $emailTemplateContent,$serviceName,$shortName, $product_order_id,$userAddress, $country, $state, $zip, $adminemailHeaders, $checkOutproductId);

			}else{

				// oderId remove
				unset($_COOKIE['OrderId']); 
			    setcookie('OrderId', null, -1, '/');
			    setcookie('OrderId', json_encode([]), time() + (86400 * 30), "/");
				echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Your payment status is fail']);
			}
		}else{
			echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Some things error to send mail admin']);
		}
		//die('mail send to admin');

}


function user_profileUpdate(){

	include('firebasedb.php');
	$userTokens = $_COOKIE['FIREBASE_LOGIN'];
	$userToken = json_decode(stripslashes($userTokens));
	$curentYearMonth = date('Y').date('m');

	$createData = date("Y-m-d H:i:s");
	$createdAt = strtotime($createData);

	if(isset($_POST['action'])){

		$email = $_POST['email'];
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$countryCode = $_POST['countryCode'];
		$userDetailsid = $_POST['userDetailsid'];
		$userMonthid = $_POST['userMonthid']?$_POST['userMonthid']:$curentYearMonth;

		if(isset($userToken->accessToken) || !empty($userToken->uid)){

			//user data
			$user_data =[
				'customerId'=> $userToken->uid,
				'authId'=> $userToken->uid,
				'email'=> $email,
				'mobile'=> $mobile,
				'countryCode'=> $countryCode,
				'name'=> $name,
				'monthlyCustomerId'=> $userMonthid,
				'active'=> true,
				'createdAt' =>$createdAt
			];


			$userDataexist = $storage->collectionGroup('customers')->where("customerId", "=", $userToken->uid)->documents();

			foreach ($userDataexist as $key => $userExist) {
		
				if($userExist->exists()){

					//$storage->collection('userDetails')->document($userDetailsid)->set($user_data);
					$storage->collection('monthlyCustomers')
					->document($userMonthid)
					->collection("customers")
					->document($userToken->uid)
					->set($user_data);

				}else{

					//$storage->collection('userDetails')->add($user_data);

					$storage->collection('monthlyCustomers')
					->document($userMonthid)
					->collection("customers")
					->document($userToken->uid)
					->set($user_data);
				}

			}

			echo json_encode(['status'=>true, 'statuscode'=>200,'message'=>'Your data updated']);

		}else{

			echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Please login before update']);
		}
	}

	wp_die();

}

add_action('wp_ajax_nopriv_user_profileUpdate', 'user_profileUpdate');
add_action('wp_ajax_user_profileUpdate', 'user_profileUpdate');


// Quize question save


function quize_submite(){

	include('firebasedb.php');
	$userTokens = $_COOKIE['FIREBASE_LOGIN'];
	$userToken = json_decode(stripslashes($userTokens));

	$createData = date("Y-m-d H:i:s");
	$createdAt = strtotime($createData);

	$userDatadetails = $storage->collectionGroup('customers')->where("customerId", "=", $userToken->uid)->documents();

	if(!empty($userDatadetails)){
	  $userDetail =[];
	  foreach ($userDatadetails as $key => $userDet) {
	    $userDetail['email'] = $userDet['email'];
	    $userDetail['mobile'] = $userDet['mobile'];
	    $userDetail['address'] = $userDet['address'];
	    $userDetail['name'] = $userDet['name'];
	    $userDetail['id'] = $userDet['customerId'];
	    $userDetail['countryCode'] = $userDet['countryCode'];
	    $userDetail['monthlyCustomerId'] = $userDet['monthlyCustomerId'];
	  }
	}



	//$phone = $userToken->phoneNumber;
	//$name = $userToken->name?$userToken->name:$userDetail['name'];
	//$email = $userToken->email?$userToken->email:$userDetail['email'];

	$name = $_POST['name']?$_POST['name']:$userToken->name;
	$email = $_POST['email']?$_POST['email']:$userToken->email;
	$emailPhone = $userDetail['countryCode'].$userDetail['mobile'];


	if(empty($name) &&  empty($email)){
		echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Name and Email not found']);
		wp_die();
	}


	if(isset($_POST['action'])){

		$totalYes = $_POST['total_yes'];
		$totalNo = $_POST['total_no'];
		$quest_1 = $_POST['quest_1']?$_POST['quest_1']:'0';
		$quest_2 = $_POST['quest_2']?$_POST['quest_2']:'0';
		$quest_3 = $_POST['quest_3']?$_POST['quest_3']:'0';
		$quest_4 = $_POST['quest_4']?$_POST['quest_4']:'0';
		$quest_5 = $_POST['quest_5']?$_POST['quest_5']:'0';
		$quest_6 = $_POST['quest_6']?$_POST['quest_6']:'0';
		$quest_7 = $_POST['quest_7']?$_POST['quest_7']:'0';
		$quest_8 = $_POST['quest_8']?$_POST['quest_8']:'0';
		$quest_9 = $_POST['quest_9']?$_POST['quest_9']:'0';
		$quest_10 = $_POST['quest_10']?$_POST['quest_10']:'0';
		$quest_11 = $_POST['quest_11']?$_POST['quest_11']:'0';

		$name = $_POST['name']?$_POST['name']:$userToken->name;
		$email = $_POST['email']?$_POST['email']:$userToken->email;
		$mobile = $_POST['mobile']?"+".$_POST['mobile']:$emailPhone;

		$quize_data =[
			'user_uid'=> $userToken->uid,
			'name'=> $name,
			'email'=> $email,
			'mobile'=> $mobile,
			'total_yes'=> $totalYes,
			'total_no'=> $totalNo,
			'createdAt' =>$createdAt
		];

		// This code was for login user
		/*if(isset($userToken->accessToken) || !empty($userToken->uid)){
		user_mail($name, $email, $phone, $quest_1, $quest_2, $quest_3, $quest_4, $quest_5, $quest_6, $quest_7, $quest_8, $quest_9, $quest_10, $quest_11);
		echo json_encode(['status'=>true, 'total_yes'=> $totalYes,'total_no'=> $totalNo, 'statuscode'=>200,'message'=>'Your quize data saved ']);
		}else{
			echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Please login before quize submite']);
		}*/

	// this code for without login users

	if(isset($name) && !empty($email) && isset($mobile)){
		user_mail($name, $email, $mobile, $quest_1, $quest_2, $quest_3, $quest_4, $quest_5, $quest_6, $quest_7, $quest_8, $quest_9, $quest_10, $quest_11);
		echo json_encode(['status'=>true, 'total_yes'=> $totalYes,'total_no'=> $totalNo, 'statuscode'=>200,'message'=>'Your quiz data saved ']);
		}else{
			//echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Please login before quize submite']);
			echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Name, email and mobile fields are required']);
		}
		
	}

	wp_die();
}

add_action('wp_ajax_nopriv_quize_submite', 'quize_submite');
add_action('wp_ajax_quize_submite', 'quize_submite');

$ref_url_15 = "https://yogasutraholisticliving.com/15-days/";

function user_mail($name, $email, $mobile, $quest_1, $quest_2, $quest_3, $quest_4, $quest_5, $quest_6, $quest_7, $quest_8, $quest_9, $quest_10,$quest_11){

		//$to = "shivaniyogasutra@yogasutraholisticliving.com";
		$to = "developerphp1995@gmail.com";
		$subject = formTags['quizhealth'].":Results Of Gut Health Quiz";
		$message .= "
		<html>
		<head>
		<title>Welcome YogaSutra Holistic Living</title>
		</head>
		<body>
		<img src='https://yogasutraholisticliving.com/wp-content/uploads/2022/04/yoga-sutra-logo-croped.png' width='200px' style='margin:0 20px;'>
		<p>Results Of Gut Health Quiz</p>
		<table border='1'>
		<tr>
		<td>Name: </td>
		<td>".$name."</td>
		</tr>
		<td>Email: </td>
		<td>".$email."</td>
		</tr>
		<tr>
		<td>Phone No.: </td>
		<td>".$mobile."</td>
		</tr>
		<tr>
		<td>Q1: Does your weight concern you ?</td>
		<td>".$quest_1."</td>
		</tr>
		<tr>
		<td>Q2: Experiencing digestive problems ( acidity , constipation , gas , bloating , IBS etc ) ?</td>
		<td>".$quest_2."</td>
		</tr>
		<tr>
		<td>Q3: Energy levels after meals ? </td>
		<td>".$quest_3."</td>
		</tr>
		<tr>
		<td>Q4: Do you have daily Bowel movements ?</td>
		<td>".$quest_4."</td>
		</tr>
		<tr>
		<td>Q5: Rate stress , anxiety or brain fog levels ?</td>
		<td>".$quest_5."</td>
		</tr>
		<tr>
		<td>Q6: Any auto immune or skin issues ?</td>
		<td>".$quest_6."</td>
		</tr>
		<tr>
		<td>Q7: Any auto immune conditions or skin troubles ( psoriasis , Hashimotos thyroid , insulin resistance , acne , eczema , lupus , diabetes , arthritis ?</td>
		<td>".$quest_7."</td>
		</tr>
		<tr>
		<td>Q8: Concerned about hormone levels ? </td>
		<td>".$quest_8."</td>
		</tr>
		<tr>
		<td>Q9: Food sensitivities, intolerances, allergies ? </td>
		<td>".$quest_9."</td>
		</tr>

		<tr>
		<td>Q10: Use of antibiotics / nsaids , anti depressants , oral contraceptives ? </td>
		<td>".$quest_10."</td>
		</tr>

		<tr>
		<td>Q11: Use of antibiotics / nsaids , anti depressants , oral contraceptives ?</td>
		<td>".$quest_11."</td>
		</tr>
		</table>
		</body>
		</html>";

		// Always set content-type when sending HTML email
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= "From: ".$name."<yogasutrachd@gmail.com>" . "\r\n";
		//$headers .= 'Bcc: yogasutraholisticliving@gmail.com' . "\r\n";

		if(wp_mail($to,$subject,$message,$headers)){
			user_mail_new($name, $email);
		}else{
			echo 'mail not sent';

			//echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Some things error to send mail']);
		}

}


function user_mail_new($name, $email){

		$to = $email;
		$subject = "Results Of Gut Health Quiz";
		$message .= '

		<html>
		<head>
		<meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<title>YogaSutra</title>
			<link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
		</head>
		<body style="font-family: Open Sans,Helvetica,Arial,sans serif; margin:0;">
		        	
			<div style="background-color:#fafafa; width:100%; margin:auto; padding: 50px 0 20px;">
		        <table border="0" cellpadding="0" cellspacing="0" style="width:100%; max-width:600px; margin:auto;background-color: #fff1f7; background-image:url(https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/email-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center bottom; text-align: center; border-top: 4px solid #ee8486;">
		            <tbody>
		                <tr>
		                    <td style="padding:30px 55px 46px;">
		                        <img src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/logo.png" width="300px">

		                        <p style="font-size:16px; text-align: left;">
		                        	You should enroll for the 1 Month Gut Cleanse & Lifestyle Modification Program. Let’s heal your gut micro biome and identify your personal symptoms and triggers and reverse the issues you face once and for all.<br><br>
                            		Alternatively, you could also start with a One Time Consultation with Shivani Bajwa.<br><br>
									Have a look at the Program details & if you have any questions feel free to message us. We are happy to answer them.
		                        </p>
		                    </td>
		                </tr>
		            </tbody>	
		        </table>
		        <table border="0" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:600px; margin: 20px auto 0; text-align:center;">
		        	<tbody>
		            	<tr>
		                	<td>
		                    	<p style="margin: 10px 0 0;">
		                            <img src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/logo-icn.png" width="70px">
		                        </p>
		                        <p style="margin: 0 0 4px; color:#474747; font-size:14px;">follow us on <a href="https://www.instagram.com/shivanibajwayogasutra/" style="margin:0 10px 0 0;"><img style="position: relative; top:3px" src="https://yogasutra.sdnaprod.com/wp-content/uploads/2023/02/instagram.png" width="18px"></a></p>
		                        <p style="color:#474747; font-size:14px; margin: 0 0 30px 0;">
		                            Copyright © 2023. All rights reserved.<br>
		                            A better company begins with a personalised employee experience.                     
								</p>
		                    </td>
		                </tr>
		            </tbody>
		        </table>
		     </div>
		</body>
		</html>
		';

		// Always set content-type when sending HTML email
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= "From: ".$name."<yogasutrachd@gmail.com>" . "\r\n";
		if(wp_mail($to,$subject,$message,$headers)){
			//echo json_encode(['status'=>true, 'statuscode'=>200,'message'=>'Your quize data saved']);
		}else{
			echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Some things error to send mail']);
		}

}

// Get all country with their related states

function country_states(){

	if(isset($_POST['action'])){

		$countryId = $_POST['countryId'];
		global $wpdb;
		$table = $wpdb->prefix . 'states';
		$query = "select * from $table where country_id = ".$countryId;
		$allStates = $wpdb->get_results($query);

		echo json_encode(['status'=>true, 'statuscode'=>200,'message'=>'','data'=>$allStates]);


	}else{
		echo json_encode(['status'=>false, 'statuscode'=>201,'message'=>'Selected country not found !']);
	}

	
	exit();

}

add_action('wp_ajax_nopriv_country_states', 'country_states');
add_action('wp_ajax_country_states', 'country_states');


// Custome Api

add_action( 'rest_api_init', 'fetch_all_country' );
 
function fetch_all_country(){
    register_rest_route(
        'wp/v2',
        '/country',
        array(
            'methods' => 'GET',
            'callback' => 'get_country',
        )
    );
}
 
function get_country() {
    global $wpdb;
	$table = $wpdb->prefix . 'countries';
	$query = "select * from $table";
	$allCountry = $wpdb->get_results($query);
	echo json_encode(['status'=>true, 'statuscode'=>200,'message'=>'','data'=>$allCountry]);

}


// Select State

add_action( 'rest_api_init', function () {
  register_rest_route( 'wp/v2', '/state/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_state_func',
  ) );
} );


function my_state_func($data) {

	global $wpdb;
  	$countryId = $data['id'];
	$table = $wpdb->prefix . 'states';
	$query = "select * from $table where country_id = ".$countryId;
	$allStates = $wpdb->get_results($query);
	echo json_encode(['status'=>true, 'statuscode'=>200,'message'=>'','data'=>$allStates]);


  }

  	// Prevent Multi Submit on all WPCF7 forms
	add_action( 'wp_footer', 'prevent_cf7_multiple_emails' );

	function prevent_cf7_multiple_emails() {
	?>

	<script type="text/javascript">
	var disableSubmit = false;
	jQuery('input.wpcf7-submit[type="submit"]').click(function() {
		jQuery(".LifestyleGoogleForm").text("Thank you for your response");
	    jQuery(':input[type="submit"]').attr('value',"Sending...");
	    if (disableSubmit == true) {
	        return false;
	    }
	    disableSubmit = true;
	    return true;

	})
	  
	var wpcf7Elm = document.querySelector( '.wpcf7' );
	wpcf7Elm.addEventListener( 'wpcf7_before_send_mail', function( event ) {
	    jQuery(':input[type="submit"]').attr('value',"Sent");
	    disableSubmit = false;
	}, false );

	wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
	    jQuery(':input[type="submit"]').attr('value',"Submit")
	    disableSubmit = false;
	}, false );
	</script>
	<?php
} 