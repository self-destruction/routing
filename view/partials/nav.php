<nav class="navbar navbar-expand-lg navbar-light bg-light d-print">
    <a class="navbar-brand" href="#">JS test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Главная <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Характеристики</a>
            <a class="nav-item nav-link" href="/prices">Цены</a>
        </div>
    </div>
    <?php
    if (!isset($_SESSION['username'])) {
        ?>
        <button class="btn btn-outline-success my-2 my-sm-0" id="sign_up"><a href="../../register">Зарегестрироваться</a></button>
        <?php
    }
    ?>
</nav>