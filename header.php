<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link rel="profile" href="https://gmpg.org/xfn/11"-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-light p-0">
		<div class="container-fluid bg-light">
			<div id="nav_covid" class="container pt-2 pb-2 justify-content-md-between d-md-flex text-center" style="align-items: center;">
			 <p class="m-0"><span style="color:var(--peach-color);">COVID-19 Update</span> We’re welcoming brighter days while continuing to promote health and safety.</p>	
			 <p class="m-0">Find a Community  <span class="sep"> | </span>  About <a class="boton" href="http://laweb.com" target="_blank"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> (987) 654-3210</a></p>
		</div>
		</div>
		
          <div class="container  navbar-expand-lg pt-3 pb-3">
              
            <a class="navbar-brand m-0 p-0" href="/20220627_FT_Translate/es/inicio//"><img class="img-fluid"  style="width: 200px;height: auto;" src="http://localhost/wordpress/wp-content/uploads/2022/09/Assited_living.png"></a>
             
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 general_tittle text-center" style="font-family:var(--bs-font-monospace); font-weight:bold;";>
                <li class="nav-item">
                    
                        <a class="nav-link active" aria-current="page" href="http://localhost/wordpress/">HOME</a>
                    
                </li>
                <li class="nav-item">
                    
                         <a class="nav-link" href="/20220627_FT_Translate/es/servicios/">ABOUT US</a>
                    
                </li>
                <li class="nav-item">
                    
                        <a class="nav-link" href="/20220627_FT_Translate/es/inversion/">SERVICES</a>
                       
                </li>
                <li class="nav-item">
                   
                        <a class="nav-link " href="/20220627_FT_Translate/es/residencia/">GALLERY</a>
                   
                </li>
                <li class="nav-item">
                   
                        <a class="nav-link" href="/20220627_FT_Translate/es/proyectos/">TESTIMONIALS</a>
                     
                </li>
                <li class="nav-item">
                    
                        <a class="nav-link" href="/20220627_FT_Translate/es/paquetes/">EVENTS & PRESS</a>
                     
                </li>
                <li class="nav-item">
                    
                  <a class="nav-link">
                      <span class="" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#ContactModal">
                         
                            CONTACT US
                         
                      </span>
                    </a>
                </li>
				<li class="nav-item">                   
                  <a class="nav-link">
						<span>||</span> <!--img src="http://localhost/wordpress/wp-content/uploads/2022/09/lupa.png" alt="search" class="img-fluid" style="height: auto;"-->
						<i class="fa fa-search" aria-hidden="true"></i>
					</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
	</header><!-- #masthead -->
<style>
html {
     margin-top: 0px !important; 
}
.fa-search{
    color:var(--blue-color);
}
.fa-volume-control-phone
{
    color:white;
	transform: rotate(315deg);
}
.boton
{

padding: 10px 40px; /*espacio alrededor texto*/
background-color: var(--peach-color); /*color botón*/
color: #ffffff; /*color texto*/
text-decoration: none; /*decoración texto*/
text-transform: uppercase; /*capitalización texto*/
font-family: 'Helvetica', sans-serif; /*tipografía texto*/
}
a.active
{
	color:var(--peach-color) !important;
	text-decoration: underline var(--peach-color);
}

</style>