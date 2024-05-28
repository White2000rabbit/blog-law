<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'TITLE' ?></title>
    <!--- <base href="<?= PATH ?>/"> часть адреса, указаннная в атрибуте будет добавлена ко всем относительным ссылкам, которые указаны ниже (второй способ) --->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/main.css">   
    <!---стили указываем абсолютную ссылку (/), либо через константу с указанием абсолютного пути (первый способ) --->
</head>

<body>

    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>