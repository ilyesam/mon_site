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

$id_p= $_GET["id_p"];


$query_connecter = "SELECT * FROM connecter  where idc like  ".$_GET["idc"]; 
$connecter = $pdo->query($query_connecter);
$row_connecter = $connecter->fetch(PDO::FETCH_ASSOC) ;

if($row_connecter["etat"]=="0")
{
 Redirect($Str_Location = "../index.php?id=".$row_["id"], $Bln_Replace = 1, $Int_HRC = NULL);
}




$query_p = " SELECT * FROM patient , dosssier_medical where dosssier_medical.id_p = patient.id_p and dosssier_medical.id_p like ".$id_p; 
$p = $pdo->query($query_p);
$row_p = $p->fetch(PDO::FETCH_ASSOC) ;


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

$Antecedant = $_POST["Antecedant"];
$traitement_actuel = $_POST["traitement_actuel"];
$resultat_anal_biologiques = $_POST["resultat_anal_biologiques"];
$resultat_irm_radio = $_POST["resultat_irm_radio"];
$pathologie = $_POST["pathologie"];

  $dateTimeZone = new DateTimeZone('Africa/Algiers');
  $dateTime = new DateTime('now', $dateTimeZone);
  $date_ =  $dateTime -> format('d/m/Y H:s');

$insertSQL = " UPDATE `bdd_medical`.`dosssier_medical` SET `Antecedant` = \"$Antecedant\", `traitement_actuel` = \"$traitement_actuel\", `resultat_anal_biologiques` = \"$resultat_anal_biologiques\", `resultat_irm_radio` = \"$resultat_irm_radio\" , `pathologie` = \"$pathologie\"  WHERE `dosssier_medical`.`id_p` =  ".$id_p;
 
           $res = $pdo->prepare($insertSQL);
           $exec = $res->execute(); 
 
  $insertGoTo = "accueil.php";
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

    <title>patient</title>

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
            <div class="row"><Br><Br>
                <div class="col-lg-12">
                   <B> <p  id="st">Patient:  <?php echo $_GET["nom"]; ?></p> <p class="page-header" id="st">Date création  :  <?php echo $row_p["date_dossier"]; ?> </p> </B>
             
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
                                     <label> 	Antecedant</label>
                                            <textarea name="Antecedant" class="form-control" placeholder=" Enterez le Pseudo "> <?php echo $row_p["Antecedant"]; ?></textarea>
                                    </div>
                                    
                                      <div class="form-group">
                                     <label>traitement_actuel  </label>
                                            <textarea name="traitement_actuel" class="form-control" placeholder=" Enterez le Password "> <?php echo $row_p["traitement_actuel"]; ?></textarea>
                                    </div>
                                    
                                      <div class="form-group">
                                     <label>resultat_anal_biologiques </label>
                                            <textarea name="resultat_anal_biologiques" class="form-control" placeholder=" Enterez le Password "> <?php echo $row_p["resultat_anal_biologiques"]; ?></textarea>
                                    </div>
                                       
             
                                          <div class="form-group">
                                     <label>IRM RADIO </label>
                                            <textarea name="resultat_irm_radio" class="form-control" placeholder=" Enterez le Password "> <?php echo $row_p["resultat_irm_radio"]; ?></textarea>
                                     </div  
                                    
                                            ><div class="form-group">
                                     <label>Pathologie </label>
                                            <input name="pathologie" type="text" class="form-control" value=" <?php echo $row_p["pathologie"]; ?>" placeholder=" Enterez la Pathologie ">
                                     </div   
                                    
                                    
                                    
                                    
                                    
                                    ><div align="right">      <button type="submit" class="btn btn-primary">Valider</button></div>
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
<style>
#st{
        color:#337ab7;
        padding-left: 30px
    }
</style>
</html>

