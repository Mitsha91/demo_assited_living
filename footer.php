<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo
 */

?>

	<footer id="colophon" class="site-footer">		
		<div class="container-fluid py-5" style="background-color:#2f404d;">
			<div class="container py-5">
				<div class="row pb-5">
					<div class="col-md-6">
						<p style="color:white;font-size: 25px;">STAY WHIT US, GET OUR NEWSLETTER</p>
					</div>
					<div class="col-md-6">
						<form action="#" novalidate="">
							<div class="g-0 row justify-content-center">
								<div class="col-md-8 mb-3">
									<div class="d-block">
										<div class="position-relative">
											<input id="email" class="form-input d-block w-100" name="email" placeholder="Email address" type="email" autocomplete="off" value="">
										</div>
									</div>
								</div>
								<div class="col-4">
									<button type="submit" class="btn btn-primary submit_footer submit w-100">Sign up</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="nv_footer_simplified text-white">
					<div class="mb-3">
						<img class="icon_card" src="http://localhost/wordpress/wp-content/uploads/2022/09/logo-letras-blancas.png" class="img-fluid" alt="...">
						<p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						<div style="display: flex;justify-content: space-evenly;">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
						</div>
					</div>
					<div class="link_footer mb-3">
						<h4>QUICK MENU</h4>
						<a href="#">HOME</a><br>
						<a href="#">ABOUT</a><br>
						<a href="#">SERVICES</a><br>
						<a href="#">PROJECTS</a><br>
						<a href="#">TESTIMONIALS</a><br>
						<a href="#">CONTACT US</a>
					</div>
					<div class="link_footer mb-3">
						<h4>SERVICES</h4>
						<a href="#">ASSISTED LIVING</a><br>
						<a href="#">INDEPENDENT LIVING</a><br>
						<a href="#">MEMORY CARE</a><br>
						<a href="#">RESPITE CARE</a><br>
						<a href="#">PERSONAL CARE</a>
						<a href="#">SKILLED NURSING</a>
					</div>
					<div class="mb-3">
						<h4>CONTACT US</h4>
						<p>Address:</p>
						<p>(843) 846-2230 20 Island Tank Rd<br>
						Beaufort, South Carolina(SC).</p>
						<p>Call Now:</p>
						<p>+2 568 964 793 682 <br>
						+8 6967 329 863 46</p>
					</div>
				</div>
			</div>				
		</div>
		<section class="container-fuid py-5" style="background-color:#26343f;">
			<div id="footer_logo" class="container justify-content-md-between d-md-flex text-center" style="align-items: center;">
				<a href="https://isning.com/" target="_blank">
					<figure>
						<img src="http://localhost/wordpress/wp-content/uploads/2022/09/Logo_isning.png" alt="Isning Multimedia" class="img-fluid" style="height: 44px;">
					</figure>
				</a>
				<p class="mb-0 text-white">© Copyright 2022 - Assisted Living by Design. All rights reserved.</p>
			</div>	
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<style>
.submit {
    border-radius: 0;
    box-sizing: border-box;
    border: 2px solid #d4b01c;
    content: "";
    display: block;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 0;
    transition: .2s ease-in-out;
	background-color: white;
    border-color: #2f404d;
    color: black;

}
.form-input {
    background-color: #4d5f6d!important;
    border: 1px solid #4d5f6d !important;
    border-radius: 0 !important;
    font-size: 18px!important;
    height: 46px !important;
    padding: 13px 16px 11px !important;
	color:white !important;
}
.form-input::placeholder {
  color:white !important;
}
.nv_footer_simplified
{
    display: grid;
    grid-template-columns: 28% 20% 20% 28%;
    grid-column-gap: 1rem;
}
.link_footer > a:visited
{
    color: white !important;
}
.link_footer > a
{
	text-decoration: none;
	color: white !important;
}
.link_footer
{
	display: flex;
    flex-direction: column;
}
@media screen and (max-width:767px)
{
	.nv_footer_simplified
	{
		display: grid;
		grid-template-columns: 100%;
		grid-column-gap: 1rem;
		text-align: center;
	}
}
</style>
