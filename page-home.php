<?php
get_header();
?>
<section class="container-fluid webp-img" id="Services" style="padding: 66px 0; background-color:#293885;height: 589px;flex-direction: column;justify-content: center;-webkit-transition: background 1s;-moz-transition: background 1s;-o-transition: background 1s;transition: background 1s;">
<div class="container">
	<div class="row">
		<div class="col-12 d-flex justify-content-center align-items-center" style="flex-direction: column;">
			<h1 class="text-center m-0 text-white" style="padding:15px;">Helping people live <br> better together</h1>
			
			<p class="text-center text-white" style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua Ut<br> enim ad minim veniam.</p>
		</div>
	</div>
</div>
</section>
<section>
 <a class="comunitty_boton text-white">FIND A COMMUNITY</a>
</section>
<section class="container-fluid py-5" id="videos_sections">
	<h2>Welcome to Assisted Living</h2>
	<p class="text_principal_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
	<a class="learnmore_boton">LEARN MORE</a>
	<section class="container my-4" id="principal_video">
		<div class="row mt-4">
			<div class="col-md-12" style="display: flex;justify-content: start; align-items: center;">
				<span class="icon_span_play_full" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#VideoModal">
					<?php echo do_shortcode('[get_svg_icon icon="play"]');?>
				</span>
				<p class="mx-5 text-white" style="cursor:pointer;margin:0px;font-size:20px;" data-bs-toggle="modal" data-bs-target="#VideoModal">Lorem ipsum dolor sit <br> amet consectetur<br>
				<span><small>click to play</small></span></p>
			</div>
			<div class="col-md-12 container_videos d-lg-flex" style="justify-content: flex-end;align-items: flex-end;">	<div class="card m-3 p-2" style="width: 18rem;">
						<div class="img_video_card">
							<span class="icon_span_play_small" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#VideoModal">
								<?php echo do_shortcode('[get_svg_icon icon="play"]');?>
							</span>
						</div>
					  <div class="card-body">
						<p class="card-text text-center">Lorem ipsum dolor</p>
					</div>
				</div>
				<div class="card m-3 p-2" style="width: 18rem;">
					  <div class="img_video_card">
							<span class="icon_span_play_small" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#VideoModal">
								<?php echo do_shortcode('[get_svg_icon icon="play"]');?>
							</span>
						</div>
					  <div class="card-body">
						<p class="card-text text-center">Lorem ipsum dolor</p>
					</div>
				</div>
				<div class="card m-3 p-2" style="width: 18rem;">
					  <div class="img_video_card">
							<span class="icon_span_play_small" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#VideoModal">
								<?php echo do_shortcode('[get_svg_icon icon="play"]');?>
							</span>
						</div>
					  <div class="card-body">
						<p class="card-text text-center">Lorem ipsum dolor</p>
					</div>
				</div>
			</div>
		</div>		
	</section>
	<a class="learnmore_boton  my-5">VIEW MORE</a>
</section>
<section id="services" class="pt-5">
	<div class="container heart" >
	</div>
	<div id="information_services" class="container">	
		<h2>Assisted Living Services For You</h2>
		<p class="text_principal_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
		
		<div class="row mt-5 text-center">
			<div class="col-12 col-md-4 mb-3">
				<div class="card">
  					<img src="http://localhost/wordpress/wp-content/uploads/2022/09/card_img_info.jpg" class="card-img-top" alt="...">
					<span class="icon_span_services"><img class="icon_card" src="http://localhost/wordpress/wp-content/uploads/2022/09/vector_fondo_blue.png" class="card-img-top" alt="..."></span>
  					<div class="card-body" style="position:relative; top:-20px;">
    					<h3 class="card-title">Assisted Living</h3>
    					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. velit esse cillum dolore eu fugiat nulla pariatur. </p>
  					</div>
					<a href="#" class="btn btn_services py-3">Read more <span class="span_arrow px-2">&#8594;</span></a>
				</div>
			</div>
			<div class="col-12 col-md-4 mb-3">
				<div class="card" style="box-shadow: 3px 0px 21px 0px rgb(0 0 0 / 35%);">
  					<img src="http://localhost/wordpress/wp-content/uploads/2022/09/card_img_info.jpg" class="card-img-top" alt="...">
					<span class="icon_span_services" style="background-color: var(--peach-color)!important;"><img class="icon_card" src="http://localhost/wordpress/wp-content/uploads/2022/09/vector_fondo_blue.png" class="card-img-top" alt="..."></span>
  					<div class="card-body" style="position:relative; top:-20px;">
    					<h3 class="card-title">Assisted Living</h3>
    					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. velit esse cillum dolore eu fugiat nulla pariatur. </p>
  					</div>
					<a href="#" class="btn btn_services py-3 text-white" style="background-color: var(--peach-color)!important;">Read more <span class="span_arrow px-2 text-white">&#8594;</span></a>
				</div>
			</div>
			<div class="col-12 col-md-4 mb-3">
				<div class="card">
  					<img src="http://localhost/wordpress/wp-content/uploads/2022/09/card_img_info.jpg" class="card-img-top" alt="...">
					<span class="icon_span_services"><img class="icon_card" src="http://localhost/wordpress/wp-content/uploads/2022/09/vector_fondo_blue.png" class="card-img-top" alt="..."></span>
  					<div class="card-body" style="position:relative; top:-20px;">
    					<h3 class="card-title">Assisted Living</h3>
    					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. velit esse cillum dolore eu fugiat nulla pariatur. </p>
  					</div>
					<a href="#" class="btn btn_services py-3">Read more <span class="span_arrow px-2">&#8594;</span></a>
				</div>
			</div>
		</div>	
	</div>
</section>
<section id="activity" class="pt-5">
	<div class="container heart" >
	</div>
	<div id="information_activity"  class="container">	
		<h2>Number of Activity</h2>
		<p class="text_principal_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
		
		<div class="row mt-5 text-center justify-content-md-evenly">
			<div class="col-12 col-md-2 mb-3 py-3 p_nurse">				
				<img src="http://localhost/wordpress/wp-content/uploads/2022/09/p_nurse_05.jpg" class="p_nurse_img py-2" alt="...">
				<p class="m-0">Professional <br> Nurse</p>			
			</div>
			<div class="col-12 col-md-2 mb-3 py-3 p_nurse">
				<img src="http://localhost/wordpress/wp-content/uploads/2022/09/p_nurse_02.jpg" class="p_nurse_img py-2" alt="...">
				<p class="m-0">Professional <br> Nurse</p>
			</div>
			<div class="col-12 col-md-2 mb-3 py-3 p_nurse">
				<img src="http://localhost/wordpress/wp-content/uploads/2022/09/p_nurse_04.jpg" class="p_nurse_img py-2" alt="...">
				<p class="m-0">Professional <br> Nurse</p>
			</div>
			<div class="col-12 col-md-2 mb-3 py-3 p_nurse">
				<img src="http://localhost/wordpress/wp-content/uploads/2022/09/p_nurse_01.jpg" class="p_nurse_img py-2" alt="...">
				<p class="m-0">Professional <br> Nurse</p>
			</div>
			<div class="col-12 col-md-2 mb-3 py-3 p_nurse">
				<img src="http://localhost/wordpress/wp-content/uploads/2022/09/p_nurse_03.jpg" class="p_nurse_img py-2" alt="...">
				<p class="m-0">Professional <br> Nurse</p>
			</div>
		</div>	
	</div>
</section>
<section class="container-fluid senior_care pt-3 pb-5 text-center">
	<div class="container text-center pb-5">
		<h2 class="text-white">Competent Medical Senior Care</h2>
		<p class="text_principal_p text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>		
	</div>
	<a class="learnmore_boton text-white my-5" style="background-color:transparent;box-shadow: inset 0 0 0 1px white;">VIEW MORE</a>
</section>
<section id="our_blog" class="pt-5">
	<div class="container heart" >
	</div>
	<h2 id="information_blog">Our Blog</h2>
	<div id="" class="container"  style="z-index: 2;"> 			
		<div class="row">
			<div class="col-12 col-md-4 mb-5">
				<div class="card p-3">
  					<img src="http://localhost/wordpress/wp-content/uploads/2022/09/blog_img.png" class="card-img-top" alt="...">					
  					<div class="card-body px-0 text-left">
    					<h5 class="card-title">Lorem ipsum dolor sit amet, consectetur valleties consectetur notted essre</h5>
    					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. velit esse cillum dolore eu fugiat nulla pariatur. </p>
  					</div>					
					<a href="#" class="btn btn_blog py-3 text-white w-75">READ MORE</a>
				</div>
				
			</div>
			<div class="col-12 col-md-4 mb-5">
				<div class="card p-3">
  					<img src="http://localhost/wordpress/wp-content/uploads/2022/09/blog_img.png" class="card-img-top" alt="...">
  					<div class="card-body px-0 text-left">
    					<h5 class="card-title">Lorem ipsum dolor sit amet, consectetur valleties consectetur notted essre</h5>
    					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. velit esse cillum dolore eu fugiat nulla pariatur. </p>
  					</div>
					<a href="#" class="btn btn_blog py-3 text-white w-75" style="background-color: var(--peach-color)!important;">READ MORE</a>
				</div>
			</div>
			<div class="col-12 col-md-4 mb-5">
				<div class="card p-3">
  					<img src="http://localhost/wordpress/wp-content/uploads/2022/09/blog_img.png" class="card-img-top" alt="...">
  					<div class="card-body px-0 text-left">
    					<h5 class="card-title">Lorem ipsum dolor sit amet, consectetur valleties consectetur notted essre</h5>
    					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. velit esse cillum dolore eu fugiat nulla pariatur. </p>
  					</div>
					<a href="#" class="btn btn_blog py-3 text-white w-75">READ MORE</a>
				</div>
			</div>
		</div>	
	</div>	
	<div class="container d-md-none">
		<div class="row">
				<div class="col-12 banner_blue_movil">
					<div class="row text-center text-white pt-3">
						<div class="col-md-3" style="border-bottom: 1px solid white;">
							<h2 class="mt-0">100+</h2>
							<p>Motivational Trainings</p>
						</div>
						<div class="col-md-3" style="border-bottom: 1px solid white;">
							<h2 class="mt-0">10</h2>
							<p>Life Coaches</p>
						</div>
						<div class="col-md-3">
							<h2 class="mt-0">60</h2>
							<p>Seniors Club Members</p>
						</div>
						<div class="col-md-3" style="background: url(http://localhost/wordpress/wp-content/uploads/2022/09/gallery_05.png);background-repeat: no-repeat;background-size: cover;background-position: center;height: 200px;">
						</div>
					</div>
				</div>
			</div>
		</div>			
</section>
<div class="container-fluid big_heart_blog d-none d-md-block" >
	</div>	
<section>
	<div class="container-fluid text-white text-center" id="tour">
		<div class="container d-none d-md-block">
			<div class="row">
				<div class="col-12 banner_blue">
					<div class="row text-center text-white">
						<div class="col-md-3 my-5" style="border-right: 1px solid white;">
							<h2 class="mt-0">100+</h2>
							<p>Motivational Trainings</p>
						</div>
						<div class="col-md-3 my-5" style="border-right: 1px solid white;">
							<h2 class="mt-0">10</h2>
							<p>Life Coaches</p>
						</div>
						<div class="col-md-3 my-5">
							<h2 class="mt-0">60</h2>
							<p>Seniors Club Members</p>
						</div>
						<div class="col-md-3" style="background: url(http://localhost/wordpress/wp-content/uploads/2022/09/gallery_05.png);background-repeat: no-repeat;background-size: cover;background-position: center;">							
						</div>
					</div>					
				</div>
			</div>
		</div>
		<div class="container py-5">			
			<h2>Ready to Tour?</h2>
			<p class="text_principal_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>				
		</div>
		<a class="learnmore_boton text-white my-5" style="background-color:transparent;box-shadow: inset 0 0 0 1px white;">SCHEDULE HERE</a>
	</div>
</section>
<section class="container-fluid senior_care pt-3 pb-5 text-center">
	<div class="container text-center pb-5">
		<h2 class="text-white">Competent Medical Senior Care</h2>
		<p class="text_principal_p text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>		
	</div>
	<a class="learnmore_boton text-white my-5" style="background-color:transparent;box-shadow: inset 0 0 0 1px white;">VIEW MORE</a>
</section>
<section id="facilities" class="pt-5">
	<div class="container heart" >
	</div>
	<div id="information_facilities" class="container">	
		<h2>Facilities@ Assited Living</h2>
		<p class="text_principal_p text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>	
</section>
<section id="gallery">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-6" id="gallery_one_top_left">
						
					</div>
					<div class="col-6" id="gallery_two_top_left">
						
					</div>
					<div class="col-6" id="gallery_two_bottom_left">
						
					</div>
					<div class="col-6" id="gallery_one_bottom_left">
						
					</div>
				</div>
				
			</div>
			<div class="col-md-4" id="gallery_center">
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-12" id="gallery_one_top_right">
					</div>
					<div class="col-12" id="gallery_one_bottom_right">
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<section class="container-fluid" id="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center" id="nurse_faq">
				<img src="http://localhost/wordpress/wp-content/uploads/2022/09/nurse-removebg-preview.png" class="img-fluid" alt="..." style="height: 83%;">
			</div>
			<div class="col-md-6" id="information_faq">
				<h2>Have a question? <br> We're here to help</h2>
				<p class="text_principal_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<a class="learnmore_boton text-white my-5" style="background-color:var(--peach-color);box-shadow: inset 0 0 0 1px white;">CONTACT US</a>
			</div>
		</div>
	</div>
</section>
<section id="contact_us" class="container-fluid">
	<div class="container">
		<div class="row row_contact_us">
			<div class="col-md-4">
			</div>
			<div class="col-md-8 text-center" id="form_contact">
				<h3 class="text-white mb-4" style="font-size:30px">Contact us for more information</h3>
				<?php
					echo do_shortcode('[contact-form-7 id="57" title="Formulario de contacto home"]');
				?>
			</div>
			
		</div>
		
	</div>
</section>
<div class="modal fade" id="VideoModal" tabindex="-1" aria-labelledby="VideoModalLabel" aria-hidden="true">
	<div style="display:flex;align-items:center;height:100%">
		<div class="modal-dialog" style="max-width: 1200px;">
			<div class="modal-content" style="margin: 0 auto; background-color:transparent; border:none;">
				<div class="modal-header" style="border:none;">
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="d-none d-lg-block">
						<div id="div_yt_player_lg">
							<iframe width="900" height="506" src="https://www.youtube.com/embed/A3vb-IoUGno" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<div class="d-none d-md-block d-lg-none">
						<div id="div_yt_player_md">
							<iframe width="650" height="365" src="https://www.youtube.com/embed/A3vb-IoUGno" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<div class="d-md-none">
						<div id="div_yt_player_sm">
							<iframe width="320" height="180" src="https://www.youtube.com/embed/A3vb-IoUGno" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
<style>

.img_video_card
{
	background: url(http://localhost/wordpress/wp-content/uploads/2022/09/videos_play.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top;
    height: 153px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.icon_span_play_full > svg
{
	background-color: var(--peach-color);
    border-radius: 50%;
    width: 100px;
    height: 100px;
}
.icon_span_play_full > svg:hover
{
	background-color: var(--blue-color);
    border-radius: 50%;
    width: 100px;
    height: 100px;
}
.icon_span_play_small > svg
{
	background-color: var(--peach-color);
    border-radius: 50%;
    width: 50px;
    height: 50px;
}
.icon_span_play_small > svg:hover
{
	background-color: var(--blue-color);
    border-radius: 50%;
    width: 50px;
    height: 50px;
}
h2
{
	font-size:60px;
	text-align:center; 
	margin-bottom: 20px;
    margin-top: 50px;
}
#Services
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/banner_principal.png);
	background-repeat: no-repeat;background-size: cover;background-position: top;height:450px;flex-direction: column;display: flex;justify-content: center;
}
.comunitty_boton
{
	position:absolute;
	top:663px;
	margin-top:35px;
	padding:13px;
	width:229px;
	height:48px;
	border:none;
	background-color:var(--peach-color);
	left:calc(50% - 118px);
	text-decoration:none;
	text-align:center;
	cursor:pointer;
}

.learnmore_boton
{	
	padding: 13px 66px;	
	height:48px;
	color:black;
	background-color:white;
	left:calc(50% - 118px);
	text-decoration:none;
	text-align:center;
	cursor:pointer;
	box-shadow: inset 0 0 0 1px black;
	margin: 20px auto 36px auto;
}
#videos_sections
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/banner_videos.png);
	background-repeat: no-repeat;background-size: cover;background-position: top;min-height:1000px;flex-direction: column;display: flex;justify-content: center;
}
#principal_video {
    background: url(http://localhost/wordpress/wp-content/uploads/2022/09/nurse_banner_blue.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top;
    height: 698px;
	display: flex;
}
.heart
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/bk_heart-1.png);
	background-repeat: no-repeat;background-position: top;height: 130px;
    flex-direction: column;display: flex;justify-content: center;
	opacity:0.3;
	position: relative;
    z-index: 0;
}
#activity
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/banner_hojas.png);
	background-repeat: no-repeat;background-size: cover;background-position: top;
}
#information_services,
#information_activity,
#information_facilities,
#information_blog
{
	position:relative;
	top: -140px;
}
.text_principal_p
{
	text-align: center;
    max-width: 768px;
    margin: 0px auto 16px auto;
}
.span_arrow
{
	color: var(--blue-color);
}
.btn_services
{
	background-color:var(--boton-services-gray-color);
	border-radius: 0px;
}
.btn_blog
{
	background-color:var(--boton-blog-gray-color);
	border-radius: 0px;
	margin:auto;
	position: relative;
    top: 43px;
}
.icon_span_services
{
	background-color: var(--blue-color);
    border-radius: 50%;
    width: 100px;
    height: 100px;
    margin: auto;
    top: -41px;
    position: relative;
}
.icon_card
{
	height: auto;
    width: 100%;
}
.p_nurse
{
	background-color: white;
}
.p_nurse_img
{
	width: auto;
    height: 60px;
}
.senior_care
{
	background-color:var(--peach-color);
}
.big_heart_blog
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/heart_blog-2.png);
	background-repeat: no-repeat;
	background-position: top right;
	height: 300px;
    flex-direction: column;
	/*position: relative;*/
    z-index: 0;
	/*top: -121px;*/
	/*top: -228px;*/
}
.banner_blue
{
	background-color: var(--blue-color);
	position: relative;
    top: -111px;
}
.banner_blue_movil
{
	background-color: var(--blue-color);
}
#tour
{	
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/banner_house.png);
	background-repeat: no-repeat;background-position: bottom;height: 700px;
    z-index: 0;
	background-color: black;
}
#gallery_center
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/gallery_01.jpg);
	background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 400px;
}
#gallery_one_top_left
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/gallery_02.png);
	background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
}
#gallery_two_top_left
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/gallery_05.png);
	background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
}
#gallery_two_bottom_left
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/gallery_04.png);
	background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
}
#gallery_one_bottom_left
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/gallery_03.png);
	background-repeat: no-repeat;
   	background-size: cover;
    background-position: center;
    height: 200px;
}
#gallery_one_top_right
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/gallery_06.png);
	background-repeat: no-repeat;
   	background-size: cover;
    background-position: center;
    height: 200px;
}
#gallery_one_bottom_right
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/blog_img.png);
	background-repeat: no-repeat;
   	background-size: cover;
    background-position: center;
    height: 200px;
}
#faq
{	
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/banner_nurse_bootom-1.png);
	background-repeat: no-repeat;
   	background-size: cover;
    background-position: center;
    height: auto;
}
#information_faq,
#form_contact
{
	display: flex;
    justify-content: center;
    align-content: space-around;
    flex-direction: column;
}
#nurse_faq
{
	display: flex;
    align-items: self-end;
    justify-content: center;
}
#contact_us
{
	background:url(http://localhost/wordpress/wp-content/uploads/2022/09/Layer-32.png);
	background-repeat: no-repeat;
   	background-size: cover;
    background-position: center;
    height: 700px;
	
}
.row_contact_us
{
	height: 700px;
}
@media screen and (max-width:480px)
{
    
}

@media screen and (min-width:481px) and (max-width:767px)
{
	

}

@media screen and (max-width:767px)
{
    
    .comunitty_boton
	{
		    top: 625px;
	}
   
}
@media screen and (max-width:820px)
{
    
    #principal_video
	{
		height: auto;
	}
	.container_videos{display: contents;}
   
}

@media screen and (min-width:768px)
{  
    
       
}
@media screen and (max-width: 1024px)
{
    
   

}

@media screen and (min-width:768px) and (max-width:1024px)
{
	.comunitty_boton
	{
       top: 688px;
	}
}

@media screen and (min-width: 1024px)
{
    
   
}

@media screen and (min-width:1025px) and (max-width:1199px)
{

  .comunitty_boton
	{
       top: 728px;
	}
   
}

@media screen and (min-width:1440px)
{
	

}
@media screen and (min-width:1441px)
{
    

}
</style>
<script type="text/javascript">
//window.addEventListener('DOMContentLoaded', function()
$( document ).ready(function()
{
	//jQuery('#VideoModal').on('show.bs.modal', function (e) {toggleVideo('play');});
	$('#VideoModal').on('hidden.bs.modal', function (e) {toggleVideo('hide');});
	/*$(".modal-backdrop, #VideoModal .close, #VideoModal .btn").live("click", function() {
        $("#VideoModal iframe").attr("src", jQuery("#VideoModal iframe").attr("src"));
	});*/
});

function toggleVideo(state) 
{
	// if state == 'hide', hide. Else: show video
	var div = document.getElementById("div_yt_player_lg");
	var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
	//func = state == 'hide' ? 'pauseVideo' : 'playVideo';
	func = state == 'hide' ? 'pauseVideo' : 'playVideo';
	iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
	
	var div = document.getElementById("div_yt_player_md");
	var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
	func = state == 'hide' ? 'pauseVideo' : 'playVideo';
	iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
	
	var div = document.getElementById("div_yt_player_sm");
	var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
	func = state == 'hide' ? 'pauseVideo' : 'playVideo';
	iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
}
</script>
