<!DOCTYPE html>
<?php    require_once('Connections/conn.php');        




$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

$nom= $_POST["nom"];
$prenom= $_POST["prenom"];
$specialite= $_POST["specialite"];
$email= $_POST["email"];
$adresse= $_POST["adresse"];
$ville= $_POST["ville"];

$insertSQL = " INSERT INTO `bdd_medical`.`medecin` (`id_med`, `nom_med`, `prenom_med`, `specialite_med`, `email`, `mp`, `adresse`, `ville`) VALUES (NULL, \"$nom\" , \"$prenom\" , \"$specialite\" , \"$email\" , NULL , \"$adresse\" , \"$ville\" ) ";
 
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


	<title>inscription_medecin</title>
	


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
																	<span class="btn-txt">Vous êtes médecin?</span>	</span>	</a>												
                                  		</div><!-- /.header-module -->
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
													<span class="txt" style="color:white;">Vous �tes m�decin?</span>												</span>											</a>
										
							</div><!-- /.mainbar-wrap -->
		
	<!-- /.main-header -->
	
	<main id="content" class="content">
		
		<section class="vc_row fullheight d-flex flex-wrap align-items-center pt-80 pb-80">

			<div class="lqd-particles-bg-wrap">

				<div class="ld-particles-container">				</div>
			</div><!-- /.lqd-particles-bg-wrap -->

			<div class="container">
				<div class="row d-flex flex-wrap align-items-center">

					<div class="row">
					  <div class="lqd-column col-md-10 col-md-offset-1">
                        <div class="contact-form contact-form-inputs-underlined contact-form-button-circle">
                         <form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="form1">
                            <div class="row d-flex flex-wrap">
                              <div class="lqd-column col-md-5 mb-20">
                                <!-- Nom   -->
                                <input class="lh-25 mb-30" type="text" pattern="[a-zA-Z]*[\s]*[a-zA-Z]*[\s]*[a-zA-Z]*" maxlength="20" minlength="2" title=" veuillez saisir votre nom" id="nom" name="nom" required="required" placeholder="Nom *">
                                <!-- Prenom   -->
                                <input class="lh-25 mb-30" type="text" pattern="[a-zA-Z]*[\s]*[a-zA-Z]*[\s]*[a-zA-Z]*" title=" veuillez saisir votre pr&eacute;nom" id="prenom" name="prenom" required="required" placeholder="Pr&eacute;nom *" minlength="2" maxlength="20">
                                <!-- Email   -->
                                <input class="lh-25 mb-30" type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,3}$" required="required" placeholder="Adresse Email">
                                <!-- T&eacute;l&eacute;phone   -->
                                <input class="lh-25 mb-30" type="tel" id="telephone" name="telephone" pattern="^(0[5-7][4-9][0-9]{7})$" required="required" title="0(5|6|7)XXXXXXXX" placeholder="T&eacute;l&eacute;phone *" value="">
                              </div>
                              <!-- /.col-md-6 -->
                              <div class="lqd-column col-md-6 mb-20">
                                <div class="form-group col-md-16">
                                  <label for="spe">Sp&eacute;cialit&eacute;</label>
                                  <select id="spe" name="specialite" class="form-control" required="">
                                    <option selected="">S&eacute;lectionner la Sp&eacute;cialit&eacute;...</option>
                                    <option value="Acupuncture">Acupuncture</option>
                                    <option value="Allergologie">Allergologie</option>
                                    <option value="Anesth&eacute;sie-r&eacute;animation">Anesth&eacute;sie-r&eacute;animation</option>
                                    <option value="54">Autres</option>
                                    <option value="2">Cardiologie</option>
                                    <option value="4">Chirugie Cardiaque</option>
                                    <option value="5">Chirurgie G&eacute;n&eacute;rale</option>
                                    <option value="50">Chirurgie Maxillo-Faciale</option>
                                    <option value="7">Chirurgie Oncologique</option>
                                    <option value="8">Chirurgie Orthop&eacute;dique</option>
                                    <option value="9">Chirurgie P&eacute;diatrique</option>
                                    <option value="10">Chirurgie Plastique</option>
                                    <option value="11">Chirurgie Thoracique</option>
                                    <option value="12">Chirurgie Vasculaire</option>
                                    <option value="1">Dentiste</option>
                                    <option value="13">Dermatologie</option>
                                    <option value="15">Endocrino-Diab&eacute;tologie</option>
                                    <option value="16">Endocrinologie</option>
                                    <option value="17">Gastro-Ent&eacute;rologie</option>
                                    <option value="19">Gyn&eacute;co-Obst&eacute;trique</option>
                                    <option value="20">H&eacute;matologie</option>
                                    <option value="21">H&eacute;modialyse</option>
                                    <option value="22">Inf&eacute;ctiologie</option>
                                    <option value="44">Kin&eacute;sith&eacute;rapie</option>
                                    <option value="23">M&eacute;decine du Travail</option>
                                    <option value="49">M&eacute;decine esth&eacute;tique</option>
                                    <option value="24">M&eacute;decine G&eacute;n&eacute;rale</option>
                                    <option value="25">M&eacute;decine Interne</option>
                                    <option value="26">M&eacute;decine Sportive</option>
                                    <option value="51">M&eacute;decine vasculaire</option>
                                    <option value="27">Neonatalogie</option>
                                    <option value="28">N&eacute;phrologie</option>
                                    <option value="30">Neuro-psychiatrie </option>
                                    <option value="29">Neurochirurgie</option>
                                    <option value="6">Neurologie</option>
                                    <option value="48">Nutritionniste</option>
                                    <option value="31">Oncologie</option>
                                    <option value="32">Ophthalmologie</option>
                                    <option value="ORL">ORL</option>
                                    <option value="Orthop&eacute;die">Orthop&eacute;die</option>
                                    <option value="Orthop&eacute;die-Traumatologie">Orthop&eacute;die-Traumatologie</option>
                                    <option value="Orthophonie">Orthophonie</option>
                                    <option value="P&eacute;diatrie">P&eacute;diatrie</option>
                                    <option value="Pneumo-Allergologue">Pneumo-Allergologue</option>
                                    <option value="Pneumo-Phtysiologie">Pneumo-Phtysiologie</option>
                                    <option value="Psychiatrie">Psychiatrie</option>
                                    <option value="Psychologie">Psychologie</option>
                                    <option value="Psyciatrie">Psyciatrie</option>
                                    <option value="Radiologie">Radiologie</option>
                                    <option value="Radioth&eacute;rapie">Radioth&eacute;rapie</option>
                                    <option value="R&eacute;animation Chirurgicale">R&eacute;animation Chirurgicale</option>
                                    <option value="Rhumatologie">Rhumatologie</option>
                                    <option value="Senologie">Senologie</option>
                                    <option value="Urologie">Urologie</option>
                                  </select>
                                </div>
                                <textarea cols="8" rows="2" name="adresse" aria-required="true" aria-invalid="false" placeholder="Adresse" required=""></textarea>
                                <div class="form-group col-md-6">
                                  <label for="wilaya">Ville</label>
                                  <select id="ville" required="" class="form-control" name="ville" onChange="countryChanged(this);">
                                    <option selected="">S&eacute;lectionner la ville...</option>
                                    <option value="paris">
                                      paris</option>
                                    <option value="Autre">
                                      Autre</option>
                                  </select>
                                </div>
                            
                           
                                <script>
																

													
                                <script async="" defer="" src="./inscription_medecin_files/js(2)"></script>
                              </div>
                              <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="lqd-column col-md-12">
                              <p class=""> <em>Un membre de l'&eacute;quipe vous contactera dans les plus brefs d&eacute;lais afin de vous accompagner &agrave; la souscription et l'utilisation de notre service*</em> </p>
                              <br>
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="lqd-column col-md-8 text-md-right">
                              <input type="submit" value="Valider" class="font-size-13 ltr-sp-1 font-weight-bold">
                            </div>
                            <!-- /.col-md-6 -->
                            
                               <input type="hidden" name="MM_insert" value="form1">
                            
                          </form>
                          
                          <div class="contact-form-result hidden"></div>
                          <!-- /.contact-form-result -->
                        </div>
					    <!-- /.contact-form -->
                      </div>
					  <!-- /login -->
                                        </div>
                                      </div>
</main>
									</div>
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
                  <!-- /.container -->
                  
	

    
    
	</main>
  <!-- /#content.content -->
	<div id="toTop"></div>
    <!-- Back to top button -->
     
   

</body>
</html>