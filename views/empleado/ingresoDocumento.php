<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/banner.php') ?>

<div class="ui mg-40-top-bottom stackable container center aligned grid">
    

    <div class="eight wide column">
        <div class="ui pd-20-all segment">
                    <h2 class="ui orange header">Consultar Entradas y Salidas</h2>
                    <div class="ui divider"></div>

                    <form action="?class=Empleados&view=consulta" method="post">
                    <div class="field">
                        <div class="ui pd-20-top-bottom left icon big fluid input">
                            <i class="address card icon"></i>
                        <input type="number" name="documento" placeholder="N° Documento" required>
                    </div>
                </div>

                <button class="ui orange mg-10-top massive mg-10-bottom button">
                    <p>Registrar Entrada</p>
                </button>
                </form>

                </div>
    </div>
</div>

<?php require_once('views/layouts/footer.php') ?>
</body>
</html>