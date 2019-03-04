<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
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
        </nav>
    </div>
    <div id="main">
        <div class="row justify-content-center">
            <div id="content" class="col-4 align-self-center">
                <?php include $content; ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/resources/pnotify/pnotify.custom.min.js"></script>

    <script>
        <?php flash(); ?>
    </script>
</body>
</html>