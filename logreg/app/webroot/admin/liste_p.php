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
  
$query_p = " SELECT pathologie  FROM  dosssier_medical group by pathologie "; 
$p = $pdo->query($query_p);
$query_connecter = "SELECT * FROM connecter  where idc like  ".$_GET["idc"]; 
$connecter = $pdo->query($query_connecter);
$row_connecter = $connecter->fetch(PDO::FETCH_ASSOC) ;


if($row_connecter["etat"]=="0")
{
 Redirect($Str_Location = "../login.php?id=".$row_["id"], $Bln_Replace = 1, $Int_HRC = NULL);
}

$id = $_GET["id"] ;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>medecin</title>

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
                <h2 id="st">Espace assistant(e) </h2>

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
                                    <a href="liste_patients.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>">Liste de patients </a>
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
                        
                                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Médecins <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                  <a href="liste_med.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>">Liste Médecins</a>
                                </li>
                                    <li>
                                    <a href="liste_p.php?id=<?php echo $id; ?>&&idc=<?php echo $_GET["idc"]; ?>">Pathologies</a>
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
            <br><br><br><br>
             <div class="row">
 
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2 id="st">Liste des pathologies</h3>
                           
                            <div class="table-responsive">
                   		<table id="customers" class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th width="17%" >N°</th> 
    				<th width="20%" >Pathologies </th> 
   		          </tr> 
			</thead> 
			<tbody> 
            
              <?php $i = 1; while($row_p = $p->fetch(PDO::FETCH_ASSOC)) : ?>  
            
				<tr> 
   					<td width="10%"><?php echo $i; ?></td> 
    				<td><?php echo $row_p['pathologie']; ?></td> 
    			</tr> 
			
			     <?php $i = $i + 1 ;  endwhile; ?>
			</tbody> 
			</table>
                          </div>
                            <p></p>
                        </div>
                    </div>
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
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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