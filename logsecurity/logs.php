    <?php 
      include_once "header.php";
      require_once "DAO/LogDAO.php";
      
      $logDAO=new LogDAO();
    ?>

    <!-- Buscar --> 
    <main>
      <form method="POST" class="site-header d-flex">
        <input type="search" name="busca" placeholder="Pesquisar" class="form-control form-search w-responsive" aria-label="Search" autocomplete="off">
        <button type="submit" class="btn btn-dark">
          <img src="img/buscar.svg" height="19">
        </button>
      </form>

      <div class="text-secondary p-4">
        <div class="row text-white">
          <div class="col-md-6">
            <h2 class="display-6 fw-bold">Logs</h2>
            
          </div>
          <div class="col-md-6 text-end align-self-center">
            <a href="cad_log.php">
              <button type="button" class="btn btn-outline-info btn-md px-4 fw-bold">Cadastrar</button>
            </a>
          </div>
        </div>
        <div class="text-white pb-3"><hr/></div>
        
        <div class="table-responsive">
          <table class="table table-dark table-striped text-center border shadow">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Domínio</th>
                <th scope="col">Usuário</th>
                <th scope="col">Backup</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

            <?php foreach($logDAO->listarAll($_POST['busca']) as $linha) { ?>
              <tr>
                <td><?= $linha["nome"] ?></td>
                <td><?= $linha["dominio"]=="" ? 'N/A' : $linha["dominio"]; ?></td>
                <td><?= $linha["idftion"] ?></td>
                <td><?= $linha["backup"]=="0" ? 'Não' : 'Sim' ?></td>
                <td>

                  <button type="button" class="btn btn-outline-info btn-sm px-2 fw-bold" data-bs-toggle="modal" data-bs-target="#myModal<?= $linha["idlog"] ?>">
                    <span data-feather="eye" class="feather-18 text-white"></span>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal<?= $linha["idlog"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content bg-gray border-ultra">
                        <div class="modal-header">
                          <h4 class="modal-title text-white" id="exampleModalLabel"><?= $linha["nome"] ?></h4>
                          <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                            <span data-feather="x" class="feather-22 text-white"></span>
                          </button>
                        </div>
                        <div class="modal-body m-5">
                      
                          <div class="container col-xxl-8">
                            <img src="img/logsecurity.svg" class="mb-2" alt="" width="50" height="50">
                            <h1 class="h4 mb-4 fw-normal text-white">Autentique-se!</h1>

                            <form class="needs-validation" novalidate>
                              <fieldset>
                                
                                <div class="form-floating themed-grid-col pb-4">
                                  <input type="password" class="form-control form-cad bg-transparent" id="floatingInput" placeholder="Autenticação" autocomplete="off" required>
                                  <label class="text-white" for="floatingInput">Palavra-chave</label>
                                  <div class="invalid-feedback">
                                      Campo obrigatório
                                  </div>
                                </div>

                                <button class="w-100 btn btn-outline-info btn-md" type="submit">Autenticar</button>
                              </fieldset>
                            </form>
                          </div>   

                        </div>
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-outline-info btn-sm px-2 fw-bold">
                    <span data-feather="edit-2" class="feather-18 text-white"></span>
                  </button>

                  <button type="button" class="btn btn-outline-info btn-sm px-2 fw-bold">
                    <span data-feather="trash-2" class="feather-18 text-white"></span>
                  </button>

                </td>
              </tr>
            <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </main>


    <?php include_once "footer.php" ?>
  </body>
</html>
