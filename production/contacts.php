<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestion des listes</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/bootstrap/dist/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>


<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index_admin.html" class="site_title"><i class="fa fa-th-list"></i> <span> Gestion des listes</span></a>
                </div>
                <div class="clearfix"></div>
                <br/>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">

                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Gestion des utilisateurs <span
                                    class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="contacts.html">Liste des utilisateurs</a></li>
                                    <li><a href="ajouter_utilisateur.html">Ajouter un utilisateur</a></li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/img.jpg" alt="">Administrateur
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <span>Réglage</span>
                                    </a>
                                </li>

                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Contacts Design</h3>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Rechercher">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">ok</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" id="divUser">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <div class="page-title">
                                        <div class="title_right">
                                            <button class="btn btn-default" id="addUser"
                                                    data-toggle="modal" data-target="#message-box-edit-user"
                                                    data-placement="bottom" title="Ajouter utilistateur"
                                                    style="font-size:20px;"><span
                                                    class="fa fa-plus"></span></button>
                                            <button class="btn btn-info" id="modifyUser"
                                                    data-toggle="modal" data-target="#message-box-edit-user"
                                                    data-placement="bottom" title="Modifier utilisateur"
                                                    style="font-size:20px;"><span
                                                    class="fa fa-edit"></span></button>
                                            <button class="btn btn-danger" id="deleteUser"
                                                    onclick="$('#message-box-delete-user').modal('show')"
                                                    data-toggle="tooltip"
                                                    data-placement="bottom" title="Supprimer utilisateur"
                                                    style="font-size:20px;"><span
                                                    class="fa fa-trash"></span></button>
                                        </div>
                                        <div class="title_left">
                                            <ul class="pagination pagination-split">
                                                <li><a href="#">A</a></li>
                                                <li><a href="#">B</a></li>
                                                <li><a href="#">C</a></li>
                                                <li><a href="#">D</a></li>
                                                <li><a href="#">E</a></li>
                                                <li>...</li>
                                                <li><a href="#">W</a></li>
                                                <li><a href="#">X</a></li>
                                                <li><a href="#">Y</a></li>
                                                <li><a href="#">Z</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
<?php
include('php/connect_base.php');


$requete = "SELECT IdUser , pseudo  , passeword, permission,role 
			FROM utilisateur;";	
			
$resultat = mysql_query($requete) or die(mysql_error());
$r="";
while ($row=mysql_fetch_row($resultat)){
$role=$row[4];
if($role==0){$r="administrateur";}else{$r="utilisateur";}

                               echo'    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view">
                                            <div class="col-sm-12">
                                                <h4 class="brief"><i>'.$row[1].'</i></h4>
                                                <div class="left col-xs-7">
                                                  
                                                    <p><strong>A propos: </strong> Étudiant informatique </p>
                                                    <ul class="list-unstyled">
													
                                                        <li><i class="fa fa-building"></i> Rôle:'.$r.'</li>
                                                        <li><i class="fa fa-phone"></i> Permission :'.$row[3].'</li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <img src="images/user.png" alt="" class="img-circle img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-left">
                                                <div class="col-xs-12 col-sm-6 emphasis">

                                                    <input type="checkbox" checked data-toggle="toggle"
                                                           data-onstyle="warning" data-size="mini" name="userSelected"
                                                           id="userSelected" value=""/>';?>
                                                    <button type="button" class="btn btn-primary btn-xs" onclick="<?php editUser($row[0]) ?>">
                                                        <i class="fa fa-user"> </i> Voir profil
                                                    </button>
													<?php
												echo'	
                                                </div>
                                            </div>
                                        </div>
                                    </div>';

                                 
  }  
  
?>





                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                © Université Clermont Auvergne - Gestion des listes - 2018</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
<?php
function editUser($id){

echo "$('#message-box-edit-user').modal('show')";

$requete="select pseudo , passeword , permission,role 
			from utilisateur  where IdUser ='$id'";
$resultat=mysql_query($requete) or die(mysql_error());
$row=mysql_fetch_array($resultat);

}
?>


    <div class="modal fade" id="message-box-edit-user" tabindex="-1" style="left: 10%; width: 80%; margin-left: 0px;"
         role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="form-horizontal" id="userForm">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modifier un utilisateur</h4>
                    </div>

                    <div class="modal-body">
                        <div class="panel-body tab-content">
                            <div class="block">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">Pseudo: </label>
                                    <div class="form control col-md-6">
                                        <input type="text" class="form-control" id="pseudoUser" name="pseudoUser"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                <label class="col-md-4 control-label">Permission </label>
                                <div class="form control col-md-6">
                                    <input type="number" min="0" max="1" class="form-control" id="userPermission"
                                           name="userPermission" value="0"/>
                                </div>
                            </div>

                                <div class="form-group col-md-12">
                                <label class="col-md-4 control-label">Type</label>
                                <div div class="form control col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                   value="1" checked>
                                            Utilisateur
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                   value="0">
                                            Administrateur
                                        </label>
                                    </div>
                                </div>
                            </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('#datetimepicker1').datetimepicker();
                                    });
                                </script>
                                <!--<script type="text/javascript">-->
                                <!--$(function () {-->
                                <!--$('#dateBirth').datetimepicker();-->
                                <!--});-->
                                <!--</script>-->


                              <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">Mot de passe: </label>
                                    <div class="form control col-md-6">
                                        <input type="password" class="form-control" id="password" name="password"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label">Confirmer le mot de passe: </label>
                                    <div class="form control col-md-6">
                                        <input type="password" class="form-control" id="password2" name="password2"
                                               required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
					
                        <button class="btn btn-danger"
                                style="margin-left : 10px;"
								
                                onclick="$('#message-box-edit-user').modal('hide')"><i
                                class="fa fa-times-circle fa-right"></i> Annuler
                        </button>
                        <button class="btn btn-info" type="submit" onclick="saveUser()"><i
                                class="fa fa-floppy-o"></i> Modifier
                        </button>
						
                    </div>

                </form>
            </div>
        </div>
    </div>

		
	



</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../vendors/bootstrap/dist/js/bootstrap-toggle.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>