<?php    require_once('Connections/conn.php');        


$var = $_GET['s'];

$query_medecins = " SELECT * FROM medecin where concat(nom_med, prenom_med, specialite_med, adresse , ville) like \"%$var%\"   ";
$medecins = $pdo->query($query_medecins);




   ?>


<!DOCTYPE html>


<html>
<meta charset="utf-8">
<head>




	<title>PRDV_Médical</title>
	


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
						<h1 id="st" > Prenez rendez-vous en ligne	</h1><br><br>
						</div><!-- /.ld-fancy-heading -->
</div>
					<div class="row">

							<div class="lqd-column col-sm-12">

								<div id="Doctor_B">
								
							
										<div id="custom-search-input">
									
                                      
                                      	<div class="form-inline">
                                    	       
                                               <table width="900"   id="customers" class="tablesorter">
                                            <tr>
                                            	 <th scope="col">N°</th>
                                              	 <th scope="col">Nom du Médecin</th>
                                              	 <th scope="col">Spécialité</th>
                                              	 <th scope="col">Adresse</th>
                                         
                                            </tr>
                            <?php  $i =1;  while ($row_medecins = $medecins->fetch(PDO::FETCH_ASSOC)) : ?> 
                                            <tr>
                                              <td> <?php echo $i; ?> </td>
                                              <td> <?php echo $row_medecins["prenom_med"]." "; ?><?php echo $row_medecins["nom_med"]; ?>  </td>
                                              <td> <?php echo $row_medecins["specialite_med"]; ?> </td>
                                              <td> <?php echo $row_medecins["adresse"]." ".$row_medecins["ville"]; ?> </td>

                                              <th scope="col"> <a href="rdv.php?nom=<?php echo $row_medecins["nom_med"]." ".$row_medecins["prenom_med"]; ?>&&id=<?php echo $row_medecins["id_med"]; ?>"> RDV </a> </th>
 
                                            </tr>
                           <?php $i = $i + 1  ;  endwhile; ?> 


                                          </table>
										  </div>
										</div>
                        
							
											</div>
										</div>
                        
			</div><!-- /.container -->
		<div class="lqd-sticky-sentinel invisible pos-abs" style="top: auto; bottom: 37px;"></div></div><div class="lqd-sticky-sentinel invisible pos-abs" style="top: auto; bottom: 33px;"></div></section>
		
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
		
</body>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #337ab7;
  color: white;
}
#st{
        color:#337ab7;
        padding-left: 30px
    }

</style>
</html>