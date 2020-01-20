<?php 
  include_once "banco.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Light Aterramento - Sonda 1</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
  <script src="js/bootstrap-datepicker.min.js"></script> 
  <script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            <br>  
            <img src="img/iconelight-copia.png"/>
            <img class="sidebar-brand-text mx-3" src="img/iconelight-copia2.png"/>            
            <div class="sidebar-brand-text mx-3 logo">
                <span style=" color:#fff;font-size: 12px; float:center;"> Aterramento</span>  
            </div>
        </div>
        
        
      </a>
      <br>
      <br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item dropdown no-arrow">
         
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li> 
      <hr class="sidebar-divider my-0">
      
      <hr class="sidebar-divider">  
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Página Inicial</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
          Dados do Funcionário:
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link " href="#">
            <i class="fas fa-user fa-sm fa-fw"></i>
            <span>Perfil</span>
          </a>
        </li>
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        Serviços
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-wifi"></i>
          <span>Sondas</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Lista de Sondas:</h6>
            <a class="collapse-item" href="sonda1.html">Sonda 1</a>
            <a class="collapse-item" href="sonda2.html">Sonda 2</a>
            <a class="collapse-item" href="sonda3.html">Sonda 3</a>
            <a class="collapse-item" href="sonda4.html">Sonda 4</a>
            <a class="collapse-item" href="sonda5.html">Sonda 5</a>
            <a class="collapse-item" href="sonda6.html">Sonda 6</a>
            <a class="collapse-item" href="sonda7.html">Sonda 7</a>
            <a class="collapse-item" href="sonda8.html">Sonda 8</a>
            <a class="collapse-item" href="sonda9.html">Sonda 9</a>
            <a class="collapse-item" href="sonda10.html">Sonda 10</a>
            <a class="collapse-item" href="sonda11.html">Sonda 11</a>
            <a class="collapse-item" href="sonda12.html">Sonda 12</a>
            <!--<h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>-->
          </div>
        </div>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#Parametros">
          <i class="fas fa-table"></i>
          <span>Parametros</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
            <span>Logout</span>
          </a>
        </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <br>
        <br>
        <!-- Begin Page Content -->        
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-4 text-gray-800">Sensor 01 - Light Aterramento</h1>
          </div>
          
          <!-- TENSÃO -->
          <div class="row " id=tensao>
            <div class="card  card border-left-success shadow h-100 py-2">
                  <div class="container-fluid">
                      <div class="card shadow mb-4">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Tensão medida</h6>
                        </div>
                      </div>
                      <div class="col-sm"> 
                        <form class="user" method="POST" action="S1.php">
                          <label>Selecione um impulso:</label>
                          <select name="impulsos">
                            <option>Selecione...</option>
                            <?php 
                              $query = "SELECT * FROM impulsos ORDER BY id_impulsos DESC";
                              $resultado = mysqli_query($conexao,$query);
                              while($prod = mysqli_fetch_assoc($resultado)){ ?>
                                <option value = "<?php echo $prod['id_impulsos']; ?>">
                                    <?php echo $prod['data'],' ',$prod['hora']; ?>
                                </option>
                              <?php } ?>
                          </select>
                          <input type="submit" value="Pesquisar" name="pesquisar" id="pesquisar">
                        </form>
                        
                      </div>
                      <div class="col-lg">
                        <div class="chart-area embed-responsive">
                          <?php
                            if(isset($_POST['impulsos'])){
                              $tensao = buscar_impulso_sonda($conexao, $_POST['impulsos']);
                              $string_tensao = implode("|", $tensao);  
                            }else{
                              $tensao = buscar_tensao_impulso($conexao);
                              $string_tensao = implode("|", $tensao);
                            }
                          ?>
                          <script type="text/javascript">
                            var Imax, Vmax, impedancia, resistencia;
                            
                            var tensao, string_tensao;
                            string_tensao = "<?php echo $string_tensao; ?>";
                            tensao = string_tensao.split("|");
                            diagnostico(tensao, tensao);
                              
                            var duracao = 140, // Duração do impulso em microsegundos
                                tamanho = tensao.length, // Número de pontos do array
                                passo = duracao/tamanho,
                                instante = Array(tamanho), tempo;

                            for (var i = 0; i < tamanho; i++){
                              tempo = i*passo.toFixed(1);
                              instante[i] = tempo.toString() + "us";
                            }

                            function diagnostico(Ifiltrada, Vfiltrada) {
                              Imax = Math.max.apply(null, Ifiltrada);
                              Vmax = Math.max.apply(null, Vfiltrada);
                              impedancia = Vmax/Imax;
                              
                              var instante_Imax = 0;
                              while (Ifiltrada[instante_Imax] < Imax) {instante_Imax++;}
                              resistencia = Vfiltrada[instante_Imax]/Imax;

                              console.log("Tensão máxima: " + Vmax + 
                                          "\nCorrente máxima: " + Imax + 
                                          "\nImpedância impulsiva: " + impedancia + 
                                          "\nResistência: " + resistencia);
                            }
                          </script>
                          <canvas id="myAreaChart"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
            <!-- Parâmetros calculados -->
          <div class="row" id="Parametros">
            <div class=" card card border-left-warning shadow h-100 py-2">
              <div class="container-fluid">
                <div class="card shadow mb-4"> 
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Parâmetros de Resistência e Impedância calculados</h6>
                  </div>
                </div>
                
                <table class="table-bordered" width="100%" cellspacing="100" text-align="center">
                  <thead class="bg-gradient-primary sidebar-dark ">
                    <tr>
                      <td style="color:#e0b806" width="65%">Parâmetros</td>
                      <td style="color:#e0b806">Valores</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="mb-4 text-gray-800">Tensão máxima (V)</td>
                      <script type="text/javascript">
                        document.write("<td class='mb-4 text-gray-800'>"+Vmax+"</td>");
                      </script>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800">Corrente máxima (A)</td>
                      <script type="text/javascript">
                        document.write("<td class='mb-4 text-gray-800'>"+Imax+"</td>");
                      </script>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800">Impedância Impulsiva</td>
                      <script type="text/javascript">
                        document.write("<td class='mb-4 text-gray-800'>"+impedancia+"</td>");
                      </script>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800">Resistência</td>
                      <script type="text/javascript">
                        document.write("<td class='mb-4 text-gray-800'>"+resistencia+"</td>");
                      </script>
                </table>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
        <!-- /.container-fluid -->

      <!-- End of Main Content -->
      
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Direitos Autorais &copy; Light Aterramento</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('edad').change(function(){
        $('numero').val($(this).val());
      });
    });
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>
