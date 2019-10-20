<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/banner.php') ?>


<div class="ui stackable center container mg-10-bottom grid">
    <div class="row">
        <div class="four wide column"></div>
        <div class="eight wide column">
            <?php if(isset($_REQUEST['entrada'])){ ?>
                <div id="entrada" class="ui blue message">
                    <i class="check large icon"></i>    
                    ¡Entrada de Usuario Registrada con éxito!
                </div>
            <?php } ?>

            <?php if(isset($_REQUEST['salida'])){ ?>
                <div id="salida" class="ui blue message">
                    <i class="check large icon"></i>    
                    ¡Salida de Usuario registrada con éxito!
                </div>
            <?php } ?>

        </div>
    </div>

    <div class="row">
        <div class="one wide column"></div>

            <div class="seven wide center aligned column">
                <div class="ui pd-20-all segment">
                    <h2 class="ui orange header">Registrar Entrada</h2>
                    <div class="ui divider"></div>

                    <form action="?class=Empleados&view=index&entrada=" method="post">
                    <div class="field">
                        <div class="ui left icon big fluid input">
                            <i class="address card icon"></i>
                        <input type="number" name="documento" placeholder="N° Documento">
                    </div>
                </div>

                <button class="ui orange mg-10-top big button">
                    <p>Registrar Entrada</p>
                </button>
                </form>

                </div>
            </div>

        <div class="seven wide center aligned  column">
            <div class="ui pd-20-all center segment">
                <h2 class="ui orange header">Registrar Salida</h2>
                <div class="ui divider"></div>

                <form action="?class=Empleados&view=index&salida=" method="post">
                    <div class="field">
                        <div class="ui left icon big fluid input">
                            <i class="address card icon"></i>
                        <input type="number" name="documento" placeholder="N° Documento">
                    </div>
                </div>

                <button class="ui orange mg-10-top big button">
                        <p>Registrar Salida</p>
                </button>

                </form>

            </div>
        </div>

    </div>
</div>






<?php require_once('views/layouts/footer.php') ?>
</body>
</html>