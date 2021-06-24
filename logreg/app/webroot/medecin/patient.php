<?php

function Redirect($Str_Location, $Bln_Replace = 1, $Int_HRC = NULL)
{
        if(!headers_sent())
        {
            header('location: ' . urldecode($Str_Location), $Bln_Replace, $Int_HRC);
            exit;
        }

    exit('<meta http-equiv="refresh" content="0; url=' . urldecode($Str_Location) . '"/>'); 
    return;
}

?>
<?php

 require_once('../Connections/conn.php');
 
 session_start();
 
$id = $_GET["id"]; 


$query_connecter = "SELECT * FROM connecter  where idc like  ".$_GET["idc"]; 
$connecter = $pdo->query($query_connecter);
$row_connecter = $connecter->fetch(PDO::FETCH_ASSOC) ;

if($row_connecter["etat"]=="0")
{
 Redirect($Str_Location = "../index.php?id=".$row_["id"], $Bln_Replace = 1, $Int_HRC = NULL);
}




$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

$nom_p= $_POST["nom_p"];
$prenom_p= $_POST["prenom_p"];
$date_naiss_p= $_POST["date_naiss_p"];
$adresse_p= $_POST["adresse_p"];
$tel_p= $_POST["tel_p"];
$email_p= $_POST["email_p"];
$sexe_p= $_POST["sexe_p"];
$n_securite_social= $_POST["n_securite_social"];
$ville_p= $_POST["ville_p"];
$pays_p= $_POST["pays_p"];
$id_p = rand() ;


$insertSQL = " INSERT INTO `bdd_medical`.`patient` (`id_p`, `nom_p`, `prenom_p`, `date_naiss_p`, `adresse_p`, `tel_p`, `email_p`, `sexe_p`, `n_securite_social`, `ville_p`, `pays_p`, `id_med`) VALUES (\"$id_p\", \"$nom_p\" , \"$prenom_p\" , \"$date_naiss_p\" , \"$adresse_p\"  , \"$tel_p\" , \"$email_p\" , \"$sexe_p\" , \"$n_securite_social\" , \"$ville_p\"  , \"$pays_p\"  , \"$id\") ";
 
           $res = $pdo->prepare($insertSQL);
           $exec = $res->execute(); 

  $insertGoTo = "patient_suite.php?nom=".$nom_p.$prenom_p."&&tel=".$tel_p."&&email=".$email_p."&&id_p=".$id_p."&&id=".$id;
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo)); 
  
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nouveau patient</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <h2 id="st">Espace médecin </h2>
            </div>
            <!-- /.navbar-header -->

  
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                
                    <ul class="nav" id="side-menu">
                     <li class="sidebar-search">
                     
                     <form action="recherche.php" method="get">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Recherche...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                         </form>   
                            
                            <!-- /input-group -->
                        </li>
                        <li>
          
                          
                            <a href="accueil.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>"><i class="fa fa-dashboard fa-fw"></i> Accueil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Patient<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                    <li>
                                    <a href="patient.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>">Nouveau Patient </a>
                                </li>
                                <li>
                                    <a href="liste_patients.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>">Liste des patients </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    
            
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> RDV <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="rdv.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>">Nouveau RDV</a>
                                </li>
                                <li>
                                    <a href="liste_rdv.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>">Liste RDV</a>
                                </li>
                        
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                        
                                <li>
                                    <a class="fa fa-sign-out fa-fw"     href="logout.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>">Sortir</a>
                                </li>
                   
                   
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" id="st">Patient</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
 
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Ajouter un Patient</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="form1">
                       
                                    
                                    <div class="form-group">
                                     <label>Nom </label>
                                            <input class="form-control"pattern="[a-zA-Z]*[\s]*[a-zA-Z]*[\s]*[a-zA-Z]*"  placeholder=" Entrez le Nom " name="nom_p">
                                    </div>
                                    
                                      <div class="form-group">
                                     <label>Prénom </label>
                                            <input class="form-control" pattern="[a-zA-Z]*[\s]*[a-zA-Z]*[\s]*[a-zA-Z]*" placeholder=" Entrez le Prénom " name="prenom_p">
                                    </div>
                                    
                                      <div class="form-group">
                                     <label>Date de Naissance </label>
                                            <input class="form-control" placeholder=" Entrez la Date de naissance  " name="date_naiss_p" type="date">
                                    </div>
                                    
                                      <div class="form-group">
                                     <label>Adresse </label>
                                            <input class="form-control" placeholder=" Entrez l'adresse " name="adresse_p">
                                    </div>
                                    
                                      <div class="form-group">
                                     <label>Téléphone </label>
                                            <input class="form-control" placeholder=" Entrez le n° de Téléphone"required="required" pattern="^(0[1-7][0-9]{8})$"  name="tel_p">
                                    </div>
                                    
                                      <div class="form-group">
                                     <label>Courriel </label>
                                      <input class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,3}$" placeholder=" Entrez l'adresse électronique " name="email_p">
                                      </div>
                                    
                                      <div class="form-group">
                                     <label>Sexe </label>
                                     <select name="sexe_p" id="sexe" class="form-control">
                                        <option value="f">Femme</option>
                                        <option value="m">Homme</option>
                                    </select>

                                    </div>
                                    
                                    
                                    <div class="form-group">
                                            <label>N° Sécurité social  </label>
                                            <input class="form-control" placeholder=" Entrez le n° de Sécurité social " name="n_securite_social" minlength="13" maxlength="15">
                                    </div>
                                    
                                         <div class="form-group">
                                            <label> Ville </label>
                                            <input class="form-control" placeholder=" Entrez le nom de la Ville de résidence " name="ville_p">
                                    </div>
                                    
                                    
                                         <div class="form-group">
                                            <label>Pays </label>
                                            <input class="form-control" placeholder=" Entrez le Pays " name="pays_p">
                                    </div>
                                    
                                    
                              <div align="right">      <button type="submit" class="btn btn-primary">Valider</button></div>
                                    <input type="hidden" name="MM_insert" value="form1">
                                  </form>
                              </div>
        
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            
                    
        </div>
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
<style>
#st{
        color:#337ab7;
        padding-left: 30px
    }
</style>
