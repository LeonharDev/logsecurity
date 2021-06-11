        <?php
            include_once "header.php" 
        ?>
        
        <main>
            <div class="text-secondary p-4 mx-4 my-2">
                <div class="row text-white">
                    <div class="col-md-12">
                        <h2 class="display-7 fw-bold">Cadastro de Log</h2>
                    </div>
                </div>
                <div class="text-white pb-3"><hr/></div>

                <form action="log/inserir.php" method="POST" class="needs-validation" novalidate>
                    <!-- Dados Pessoais -->
                    <fieldset>
                        <div class="row">

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input name="nome" type="text" class="form-control form-cad" id="floatingInput" placeholder="Nome do Log" autocomplete="off" required>
                                <label for="floatingInput">Nome do Log</label>
                                <div class="invalid-feedback">
                                    Campo obrigatório
                                </div>
                            </div>

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input name="dominio" type="url" class="form-control form-cad" id="floatingInput" placeholder="Domínio" autocomplete="off">
                                <label for="floatingInput">Domínio</label>
                            </div>

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <select name="relevancia" class="form-select form-cad" id="floatingSelect" required>
                                    <option value="" selected disabled>Selecione</option>
                                    <option value="1">Baixa</option>
                                    <option value="2">Moderada</option>
                                    <option value="3">Alta</option>
                                    <option value="4">Altíssima</option>
                                </select>
                                <label for="floatingSelect">Relevância</label>
                                <div class="invalid-feedback">
                                    Campo obrigatório
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input name="identificacao" type="text" class="form-control form-cad" id="floatingInput" placeholder="Identificação">
                                <label for="floatingInput">Identificação</label>
                            </div>

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input name="senha" type="password" class="form-control form-cad" id="floatingInput" placeholder="Senha" autocomplete="off" required>
                                <label for="floatingInput">Senha</label>
                                <div class="invalid-feedback">
                                    Campo obrigatório
                                </div>
                            </div>

                            

                        </div>

                        <div class="row">

                            <div class="form-floating col-md-12 themed-grid-col pb-5">
                                <input name="adicional" type="text" class="form-control form-cad" id="floatingInput" placeholder="Informações adicionais" autocomplete="off">
                                <label for="floatingInput">Informações adicionais</label>
                            </div>

                        </div>
                    </fieldset>

                    <button type="submit" name="salvar" class="btn btn-outline-info btn-md px-3 fw-bold">Salvar</button>
                    <a href="logs.php">
                        <button type="button" class="btn btn-outline-light btn-md px-3 fw-bold">Cancelar</button>
                    </a>
                </form>
            </div>
        </main>

        <?php include_once "footer.php" ?>
    </body>
</html>