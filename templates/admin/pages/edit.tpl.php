<h3 class="mb-5">Edição de página</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input type="text" name="title" id="pagesTitle" required value="Página inicial"
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
        <input type="hidden" name="body" id="pagesBody" value="<h3>Página inicial</h3><p>Está é a página inicial do site</p>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>

<a href="/admin/pages/1" class="btn btn-secondary">Voltar</a>