<h3 class="mb-5">Administração de páginas!</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input type="text" name="title" id="pagesTitle" required
            class="form-control" placeholder="Aqui vai o título da página...">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input type="text" name="url" id="pagesUrl"
                class="form-control" placeholder="URL amigável, deixe em branco para informar a página inicial...">
        </div>
    </div>

    <div class="form-group">
        <input type="hidden" name="body" id="pagesBody">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>

<a href="/admin/pages" class="btn btn-secondary">Voltar</a>