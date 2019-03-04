<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/trix/trix.css">
    <link rel="stylesheet" href="/resources/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Painel Administrativo</title>
</head>
<body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-dark bg-dark">
            <span>
                <a href="/admin" class="navbar-brand">Admin</a>
                <span class="navbar-text">Painel Administrativo</span>
            </span>
            <a href="/admin/auth/logout" class="btn btn-danger">
                <i class="fas fa-sign-out-alt"></i>
                Sair
            </a>
        </nav>
    </div>
    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                    <li class="nav-item">
                        <span class="nav-link text-white-50"><small>Menu</small></span>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/pages" class="nav-link <?php echo (resolve('/admin/pages.*') ? 'active' : ''); ?>">
                            <i class="fas fa-file-alt"></i>
                            Páginas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/users" class="nav-link <?php echo (resolve('/admin/users.*') ? 'active' : ''); ?>">
                            <i class="far fa-user"></i>
                            Usuários
                        </a>
                    </li>
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content; ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/resources/trix/trix.js"></script>
    <script src="/resources/pnotify/pnotify.custom.min.js"></script>

    <script>
        document.addEventListener('trix-attachment-add', function() {
            const attachment = event.attachment;
            if (!attachment.file) {
                return;
            }
            const form = new FormData();
            form.append('file', attachment.file);

            $.ajax({
                url: '/admin/upload/image',
                method: 'POST',
                data: form,
                contentType: false,
                processData: false,
                xhr: function() {
                    const xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener('progress', function(e) {
                        let progress = e.loaded / e.total * 100;
                        attachment.setUploadProgress(progress);
                    });
                    return xhr;
                }
            })
            .done(function(response) {
                console.log("success", response);
                attachment.setAttributes({
                    url: response,
                    href: response
                })
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
        });

        <?php flash(); ?>

        const confirmEl = document.querySelector('.confirm');
        if (confirmEl) {
            confirmEl.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Tem certeza que quer fazer isso?')) {
                    window.location = e.target.getAttribute('href');
                }
            });
        }
    </script>
</body>
</html>