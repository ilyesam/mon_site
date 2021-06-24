<!DOCTYPE html>

<?php    require_once('Connections/conn.php');        




$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

$idm= $_GET["id"];

$date= $_POST["date"];
$nom= $_POST["nom"];
$prenom= $_POST["prenom"];
$tel= $_POST["tel"];


$insertSQL = " INSERT INTO `rdv` (`id_rdv`, `id_p`, `id_m`, `date_heure_rdv`, `nom`, `prenom`, `tel`) VALUES (NULL, NULL,  \"$idm\" ,  \"$date\" ,  \"$nom\" ,  \"$prenom\" ,  \"$tel\" ) ";
 
           $res = $pdo->prepare($insertSQL);
           $exec = $res->execute(); 

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo)); 
  
  }
  
  ?>

<html>
<meta charset="utf-8">
<head>

	<title>Prise de RDV</title>
	


	<!-- Canonical -->
	<link rel="canonical" href="https://www.rdvtoubib.com/">
	<!-- BASE CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">
	<link href="./css/menu.css" rel="stylesheet">
	<link href="./css/vendors.css" rel="stylesheet">
	<link href="./css/css" rel="stylesheet">
	<link href="./css/all_icons_min.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
    <link href="./css/custom.css" rel="stylesheet">

	
	<link href="./css/liquid-icon.min.css" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/theme-vendors.min.css" rel="stylesheet">
    <link href="./css/theme.min.css" rel="stylesheet">
    <link href="./css/creative.css" rel="stylesheet">
    <link href="./css/app2.min.css" rel="stylesheet">   
	


<style id="theia-sticky-sidebar-stylesheet-TSS">.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style></head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="modern" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199" style="overflow: visible;">
	
	<div id="wrap">
	<header class="main-header main-header-overlay" data-sticky-header="true" data-sticky-options="{ &quot;stickyTrigger&quot;: &quot;first-section&quot; }">
				<!--Partie modile debut-->
						<div class="col" style="position:absolute;">
								
							<div class="collapse navbar-collapse" id="main-header-collapse"><button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames="{ &quot;html&quot;: &quot;mobile-nav-activated overflow-hidden&quot; }">
										<span class="sr-only">Toggle navigation</span>
										<span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>										</span>
									</button>							
										
											<a href="login.php">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt" style="color:white;">Se connecter</span>												</span>											</a>
										
										<br>
											<a href="inscription_medecin.php" id="signup_medecin_button">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt" style="color:white;">Vous êtes médecin?</span>												</span>											</a>							</div><!-- /#main-header-collapse -->
						</div><!-- /.col -->
						<!--Partie mobile fin-->
			<div class="lqd-sticky-placeholder hide" style="height: 37px;"></div><div class="lqd-sticky-placeholder hide" style="height: 33px;"></div><div class="mainbar-wrap">
				<div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
					
				<div class="container-fluid mainbar-container">
					<div class="mainbar">
						<div class="row mainbar-row align-items-lg-stretch px-4">
							
							<div class="col-12 col-sm-12 col-md-9">
								<div class="navbar-header">
									<a class="navbar-brand" href="index.php" title="HOME" rel="home">
										<span class="navbar-brand-inner" style="  padding: 2px; width: 150px;">
	RDV en ligne										<img src="./css/logo.png" alt="RdvToubib" width="50"> 										</span>									</a>
									<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile mobile-nav-trigger-cloned" data-toggle="collapse" data-target="#main-header-collapse-clone" aria-expanded="false" data-changeclassnames="{ &quot;html&quot;: &quot;mobile-nav-activated overflow-hidden&quot; }">
										<span class="sr-only">Toggle navigation</span>
										<span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>										</span>									</button>
								</div><!-- /.navbar-header -->
							</div><!-- /.col -->
								<nav class="col-6 col-md-6">
										<ul id="top_access" style="height:10px">
																								<li>
													
													<div class="col text-right">
														<div class="header-module">
															<a href="http://localhost/logreg/login.php" class="btn btn-default text-uppercase circle btn-bordered border-thick font-size-12 font-weight-semibold btn-white" title="Se connecter">
																	<span class="btn btn-solid text-uppercase circle btn-bordered border-thin font-size-10 font-weight-semibold">Se connecter</span>															</a>														</div><!-- /.header-module -->
													</div><!-- /.col -->
												</li>
												<li>
													<div class="col text-right">
														<div class="header-module">
															<a href="http://localhost/logreg/inscription_medecin.php" id="signup_medecin_button" class="btn btn-default text-uppercase circle btn-bordered border-thick font-size-10 font-weight-semibold btn-white" title="S&#39;inscrire">
																<span style="border: 2px solid #000080">
																	<span class="btn-txt">Vous êtes médecin?</span>																</span>															</a>														</div><!-- /.header-module -->
													</div><!-- /.col -->
												</li>
										</ul>
										<!-- /main-menu -->
								</nav>						
						</div><!-- /.col -->
					</div><!-- /.mainbar-row -->
				</div><!-- /.mainbar -->
			</div><!-- /.mainbar-container -->
		</header></div><div class="collapse navbar-collapse navbar-collapse-clone" id="main-header-collapse-clone" aria-expanded="false"><button type="button" class="navbar-toggle collapsed nav-trigger style-mobile mobile-nav-trigger-cloned" data-toggle="collapse" data-target="#main-header-collapse-clone" aria-expanded="false" data-changeclassnames="{ &quot;html&quot;: &quot;mobile-nav-activated overflow-hidden&quot; }">
										<span class="sr-only">Toggle navigation</span>
										<span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>										</span>									</button>							
										
											<a href="https://www.rdvtoubib.com/login">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt" style="color:white;">Se connecter</span>												</span>											</a>
										
										<br>
											<a href="https://www.rdvtoubib.com/inscription/medecin" id="signup_medecin_button">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt" style="color:white;">Vous êtes médecin?</span>												</span>											</a>
										
							</div><!-- /.mainbar-wrap -->
		
	<!-- /.main-header -->
	
	<main id="content" class="content">
		
		<section class="vc_row fullheight d-flex flex-wrap align-items-center pt-80 pb-80">

			<div class="lqd-particles-bg-wrap">

				<div class="ld-particles-container">				</div>
			</div><!-- /.lqd-particles-bg-wrap -->

			<div class="container">
				<div class="row d-flex flex-wrap align-items-center">

	   <div class="col-sm-12">

						<div class="ld-fancy-heading mask-text">
						<h1 > Prenez rendez-vous en ligne avec le DR <?php echo $_GET["nom"]; ?>	</h1> 
						</div><!-- /.ld-fancy-heading -->
</div>
					<div class="row">

							<div class="lqd-column col-sm-12">

								<div id="Doctor_B">
								<br> <br>  <br>
						      <form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="form1">
										<div id="custom-search-input">
									
                                      
                                      	<div class="form-inline">
                                    	       
                                     
										
                                              <tr>
                                                    <th width="600" scope="col">     <div align="center">
                                                      <input  type="text" class="form-control search-query ui-autocomplete-input"  placeholder="Nom" name="nom" > 
                                                      
                                                      <input  type="text" class="form-control search-query ui-autocomplete-input"  placeholder="Prénom" name="prenom" >                         
                                                      
                                                      <input type="text" class="form-control search-query ui-autocomplete-input"  placeholder="Date et heure " name="date" >  
                                                      
                                      
                                                         <input type="text" class="form-control search-query ui-autocomplete-input"  placeholder="N° de Téléphone" name="tel" >             
                                                         
                                                        </br>                     
                                                                             
                                                      
                                                      <input class="btn btn-solid text-uppercase circle btn-bordered border-thin font-size-14 font-weight-semibold" type="submit"  id="btn_search" value="Valider">
                                                    </div></th>
                                                  </tr>
                                       <input type="hidden" name="MM_insert" value="form1">
                                              </form>
											</div>
										</div>
			</div><!-- /.container -->
		<div class="lqd-sticky-sentinel invisible pos-abs" style="top: auto; bottom: 35px;"></div></div></section>
		<!--<section class="vc_row pt-30">
			<div class="container">
				<div class="row">

					<div class="lqd-column col-md-10 col-md-offset-1 text-center" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;initValues&quot;:{&quot;translateY&quot;:80,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;opacity&quot;:1}}">

						<header class="fancy-title fancy-title-big mb-6">
							<h2 data-split-text="true" data-split-options="{&quot;type&quot;:&quot;lines&quot;}">
							
								<br>
								<span class="font-size-2-15x lh-15 text-primary" data-fittext="true" data-fittext-options="{ &quot;maxFontSize&quot;: 70, &quot;minFontSize&quot;: 40, &quot;compressor&quot;: 0.5 }" style="font-size: 40px;"></span>							</h2>
						</header>
					</div> 
				</div>
			</div> 
		</section>-->
	</main><!-- /#content.content -->
	<div id="toTop"></div>
    <!-- Back to top button -->
	<footer class="main-footer pt-30">
		<section class="mt-10">

			<div class="container">
				<div class="row">
					<div class="lqd-column col-md-3">
	
						<h3 class="widget-title">A Propos</h3>
						<li> Mention Legal</li>
                         	</div> 
					<div class="lqd-column col-md-3">
					<h3 class="widget-title">Contact</h3>
                        <li>N° de telephone  <br>
						01 99 99 99 99</li>
                         	</div> 
                             	<div class="lqd-column col-md-3"> 
                        <h3 class="widget-title">Coordonnees </h3>
                        <li> 36 Avenue de la Republique,75011 Paris </li>
                   	</div> 
                    <div class="lqd-column col-md-3"  class="space" >    
					<h3 class="widget-title"> Trouver Nous sur</h3>
						<ul style="display:flex;">
						<i><img src="img/Active-Instagram-3-icon.png" width="20" height="20"></i>
						  <li><img src="img/social-facebook-box-blue-icon.png"><img src="img/twitter-icon.png"></li>	
							<li><img src="img/youtube-icon.png"></li>
                            	<li></li>
						</ul>
                    </div><!-- /.col-md-3 col-sm-6 --></footer> 
</body></html>