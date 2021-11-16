<html>
    <head>
        <title>Aqu&iacute; weyy</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body class="bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container" style="width: 450px">
                <a class="navbar-brand fs-4"  style="font-family: consolas" href="<?php echo e(route('inicio')); ?>">
                    <img src="https://images.vexels.com/media/users/3/145827/isolated/lists/357f06ecbaaa77d750259c459c0ed55f-ilustracion-de-roca-redonda.png" alt="" width="30" height="24">
                    PROJECT S&Iacute;SIFO
                </a>
                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown" style="padding-right: 20px">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Men&uacute;</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="<?php echo e(route('inicio')); ?>">Home</a></li>
                                <li><a class="dropdown-item disabled" href="#">Pr&aacute;cticas</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li align="center"><a href="<?php echo e(route('login')); ?>"><button type="button" class="btn btn-warning fs-5">LOGIN</button></a></li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#sticker">
                                Sticker
                            </button>
                            <div class="modal fade" id="sticker" tabindex="-1" aria-labelledby="stickerlabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                    <div class="modal-content" style="border-radius: 10px">
                                        <div class="modal-header" style="height: 30px">
                                            <h5 class="modal-title">@Alexis  Ceballos.</h5>
                                            <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex justify-content-center bg-dark" style="border-radius: 8px">
                                            <img src="https://i.imgur.com/j07xWXK.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('contenido'); ?>
    </body>

</html>
<?php /**PATH C:\laragon\www\sisifo\resources\views/includes/layout.blade.php ENDPATH**/ ?>
