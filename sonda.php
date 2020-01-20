<?php include_once "banco.php"; ?>

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
  
  <script>
			$(function() {
			  $('.dates #usr1').datepicker({
				  'format': 'yyyy-mm-dd',
				  'autoclose': true
			  });
      });
      
      function filtro_media_movel(vetor_string) {
          const janela = 20;
          var filtrado = [];
          
          var vetor = [];
          for (let i = 0; i < vetor_string.length; i++) {
            vetor.push(parseFloat(vetor_string[i]));
          }

          for (let index = 0; index < vetor.length; index++) {
            var num_posicoes = (index < janela) ? index + 1 : janela;
            var inicio = index - num_posicoes + 1;
            var soma = 0;

            for (let i = inicio; i <= index; i++) {
              soma += vetor[i];
            }
            media = soma / num_posicoes;
            filtrado.push(media);
          }
          console.log(Math.max.apply(null, vetor) + " " + Math.min.apply(null, vetor));
          console.log(Math.max.apply(null, filtrado) + " " + Math.min.apply(null, filtrado));
          return filtrado;
      }
	</script>
  
  
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
            <h6 class="collapse-header">Lista das Sondas:</h6>
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

      <li class="nav-item">
          <a class="nav-link" href="#tensao">
            <i class="fas fa-fw fa-chart-line"></i>
            <span>Tensão</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#corrente">
          <i class="fas fa-fw fa-chart-line"></i>
          <span>Corrente</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-line"></i>
          <span>Impedância</span></a>
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
            <h1 class="h3 mb-4 text-gray-800">Sonda 1 - Light Aterramento</h1>
            <a href="sonda1.html" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-redo-alt fa-sm text-white-50"></i> Atualizar Dados</a>
          </div>
          <!--Status Sonda-->

          <div class="row">
            <div class="card card border-left-warning shadow h-100 py-2">
              <div class="container-fluid">
                <div class="card shadow mb-4"> 
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Status da Sonda</h6>
                  </div>
                </div>
                  <table class="table-responsive-md table-bordered" width="100%" cellspacing="100" text-align="center">
                    <thead class=" bg-gradient-primary sidebar-dark ">
                      <tr>
                        <td style="color:#e0b806">Propriedades: </td>
                        <td style="color:#e0b806">Valores</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="mb-4 text-gray-800">Localização Y:</td>
                        <td class="mb-4 text-gray-800"> 20 </td>
                      </tr>
                      <tr>
                        <td class="mb-4 text-gray-800">Localização X:</td>
                        <td class="mb-4 text-gray-800"> 145</td>
                      </tr>
                      <tr>
                        <td class="mb-4 text-gray-800">Taxa de Aquisição: </td>
                        <td>
                          <table>
                            <tr>
                              <td style="border:0;"><input class="form-control-plaintext" type="number" id="numero" name="numero" value="1"></td>
                              <td style="border:0;"><input class="form-control" type="button" value="Inserir"></td>
                            </tr>
                          </table>
                          <input class="form-control-range" type="range" id="edad" list="legendas" name="edad" min="0" max="100" step="1" value="0">
                          <datalist id="legendas">
                            <option value="0" label="0%"></option>
                            <option value="10"></option>
                            <option value="20"></option>
                            <option value="30"></option>  
                            <option value="40"></option>
                            <option value="50" label="50%"></option>
                            <option value="60"></option>
                            <option value="70"></option>
                            <option value="80"></option>
                            <option value="90"></option>
                            <option value="100" label="100%"></option>
                          </datalist>
                        </td>
                      </tr>
                      <tr>
                        <td class="mb-4 text-gray-800">Bateria: </td>
                        <td><input class="form-control-range" type="range" list="legendas" id="edad" name="edad" min="0" max="100" step="1" value="0"></td>
                        <datalist id="legendas">
                            <option value="0" label="0%"></option>
                            <option value="10"></option>
                            <option value="20"></option>
                            <option value="30"></option>  
                            <option value="40"></option>
                            <option value="50" label="50%"></option>
                            <option value="60"></option>
                            <option value="70"></option>
                            <option value="80"></option>
                            <option value="90"></option>
                            <option value="100" label="100%"></option>
                          </datalist>
                      </tr>
                      <tr>
                        <td class="mb-4 text-gray-800"> Condições: </td>
                        <td> Bom Funcionamento!</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
            <div class=" card card border-left-warning shadow h-100 py-2">
              <div class="container-fluid">
                <div class="card shadow mb-4"> 
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Seleção de dados</h6>
                  </div>
                </div>
                  <form class="form-horizontal">
                    <div class="form-group">
                      <fieldset class="fieldset">
                        <legend>Valores de pico por dia</legend>
                        <label>De:</label>
                        <input type="date" name="data_inicio">
                        <label>Ate:</label>
                        <input type="date" name="data_fim">
                        <button type="submit" class="btn btn-success">Pesquisar</button>
                      </fieldset>
                    </div>
                  </form>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          
          <div class="row">
            <div class=" card card border-left-warning shadow h-100 py-2">
              <div class="container-fluid">
                <div class="card shadow mb-4"> 
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Estatísticas da seleção de dados</h6>
                  </div>
                </div>
                
                <table class="table-responsive-md table-bordered" width="100%" cellspacing="100" text-align="center">
                  <thead class="bg-gradient-primary sidebar-dark ">
                    <tr>
                      <td style="color:#e0b806" width="65%">Estátisticas de Tensão </td>
                      <td style="color:#e0b806">Valores</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="mb-4 text-gray-800">Valor MAX/MIN</td>
                      <td class="mb-4 text-gray-800"> 74000/15000 </td>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800"> Valor Médio</td>
                      <td class="mb-4 text-gray-800"> Xxxxx</td>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800">Désvio Pradão </td>
                      <td class="mb-4 text-gray-800">yyyyyy</td>
                </table>

                <br>
                <table class="table-responsive-md table-bordered" width="100%" cellspacing="100" text-align="center">
                  <thead class="bg-gradient-primary sidebar-dark ">
                    <tr>
                      <td style="color:#e0b806" width="65%">Estátisticas de Corrente </td>
                      <td style="color:#e0b806">Valores</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="mb-4 text-gray-800">Valor MAX/MIN</td>
                      <td class="mb-4 text-gray-800"> 74000/15000 </td>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800"> Valor Médio</td>
                      <td class="mb-4 text-gray-800"> Xxxxx</td>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800">Désvio Pradão </td>
                      <td class="mb-4 text-gray-800">yyyyyy</td>
                </table>

                <br>
                <table class="table-responsive-md table-bordered" width="100%" cellspacing="100" text-align="center">
                  <thead class="bg-gradient-primary sidebar-dark ">
                    <tr>
                      <td style="color:#e0b806" width="65%">Estátisticas de Impedância</td>
                      <td style="color:#e0b806">Valores</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="mb-4 text-gray-800">Valor MAX/MIN</td>
                      <td class="mb-4 text-gray-800"> 74000/15000 </td>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800"> Valor Médio</td>
                      <td class="mb-4 text-gray-800"> Xxxxx</td>
                    </tr>
                    <tr>
                      <td class="mb-4 text-gray-800">Désvio Pradão </td>
                      <td class="mb-4 text-gray-800">yyyyyy</td>
                </table>


              </div>
            </div>
          </div>
          <br>
          <br>
          <br>

          <!-- TENSÃO -->
          <div class="row " id=tensao>
            <div class="card  card border-left-success shadow h-100 py-2">
                  <div class="container-fluid">
                      <div class="card shadow mb-4">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Corrente sem filtro</h6>
                        </div>
                      </div>
                        <div class="chart-area embed-responsive">
                          <?php
                            $tensao = buscar_medicoes_tensao_ac_todas($conexao);
                            $string_tensao = implode("|", $tensao);
                            
                            $instante = buscar_instantes_tensao_ac_todas($conexao);
                            $string_instante = implode("|", $instante);
                          ?>
                          <script type="text/javascript">
                            var tensao, string_tensao;
                            string_tensao = "<?php echo $string_tensao; ?>";
                            tensao = string_tensao.split("|");

                            var instante, string_instante;
                            string_instante = "<?php echo $string_instante; ?>";
                            instante = string_instante.split("|");
                          </script>
                          <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                  </div>           
                </div>
                <br>
            <div class="row" id="corrente">
              <!--CORRENTE-->
              <div class="card card border-left-info shadow h-100 py-2">
                  <div class="container-fluid">
                    <div class="card shadow mb-4">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Corrente com filtro (janela = 20)</h6>
                      </div>
                    </div>
                      <div class="chart-area">
                        <?php
                          $corrente = buscar_medicoes_corrente_ac_todas($conexao);
                          $string_corrente = implode("|", $corrente);
                        ?>
                        <script type="text/javascript">
                          var sem_filtro, corrente, string_corrente;
                          string_corrente = "<?php echo $string_corrente; ?>";
                          sem_filtro = string_corrente.split("|");
                          corrente = filtro_media_movel(sem_filtro);
                        </script>
                        <canvas id="ChartCorrente"></canvas>
                      </div>
                  </div> 
                </div>            
              </div>
              <br>
              <br>
              <br>

              <div class="row">
                  <!--IMPEDANCIA-->
                  <div class="card card border-left-danger shadow h-100 py-2">
                      <div class="container-fluid">
                        <div class="card shadow mb-4">
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Impedância</h6>
                            <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">OPÇÕES:</div>
                                <a class="dropdown-item" href="#">Limitante MAX</a>
                                <a class="dropdown-item" href="#">Limitante MIN</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Atualizar Dados</a>
                              </div>
                            </div>
                          </div>
                        </div>
                          <div class="chart-area">
                            <canvas id="ChartImpedancia"></canvas>
                          </div>
                    </div>            
                  </div>        
          </div>
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
