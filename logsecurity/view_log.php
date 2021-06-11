<?php include_once "header.php" ?>
        
        <main>
            <div class="text-secondary p-4 mx-4 my-2">
                <div class="row text-white">
                    <div class="col-md-12">
                        <h2 class="display-7 fw-bold">Informações do Log</h2>
                    </div>
                </div>
                <div class="text-white pb-3"><hr/></div>

                    <fieldset>
                        <div class="row">

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input type="text" value="" class="form-control form-cad" id="floatingInput" disabled>
                                <label for="floatingInput">Nome do Log</label>
                            </div>

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input type="url" value="" class="form-control form-cad" id="floatingInput" disabled>
                                <label for="floatingInput">Domínio</label>
                            </div>

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input type="text" value="" class="form-control form-cad" id="floatingInput" disabled>
                                <label for="floatingInput">Relevância</label>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input type="text" value="" class="form-control form-cad" id="floatingInput" disabled>
                                <label for="floatingInput">Identificação</label>
                            </div>

                            <div class="form-floating col-md-4 themed-grid-col pb-3">
                                <input type="password" value="" class="form-control form-cad" id="floatingInput" disabled>
                                <label for="floatingInput">Senha</label>
                            </div>

                            <div class="form-floating col-md-4 themed-grid-col pb-5">
                                <input type="text" value="" class="form-control form-cad" id="floatingInput" disabled>
                                <label for="floatingInput">Informações adicionais</label>
                            </div>

                        </div>

                    </fieldset>

                    <button class="btn btn-outline-info btn-md px-3 fw-bold" type="submit">Editar</button>
                    <a href="logs.php">
                        <button type="button" class="btn btn-outline-light btn-md px-3 fw-bold">Voltar</button>
                    </a>

            </div>
        </main>

        <?php include_once "footer.php" ?>
    </body>
</html>