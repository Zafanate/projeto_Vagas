<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>
    <h2 class="mt-3">Cadastar vaga</h2>

    <form method="post">
        <div class="form-group">
            <label>TITULO</label>
            <input type="text" class="form-control" name="titulo">
        </div>

        <div class="form-group">
            <label>DESCRIÇAO</label>
            <textarea class="form-control" name="descricao" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label>STATUS</label>

        </div>
        <div class="form-check form-check-inline" >
            <label class="form-control">
                <input type="radio" name="ativo" value="s" checked>ATIVO
            </label>
        </div>

        <div class="form-check form-check-inline">
            <label class="form-control">
                <input type="radio" name="ativo" value="s">INATIVO
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">ENVIAR</button>
        </div>
    </form>
</main>