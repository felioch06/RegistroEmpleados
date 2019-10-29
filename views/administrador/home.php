<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/bannerAdmin.php') ?>

    <div class="ui stackable center aligned container  grid">
        <div class="eight wide column">
            <img src="assets/img/ico00.png" width="30%" alt="">
            <div class="ui massive mg-20-top-bottom pd-40-top-bottom segment">
                <div class="ui orange header">
                    <?php echo 'Bienvenido<br> '.$_SESSION['usuario']->nombres.' '. $_SESSION['usuario']->apellidos ?>
                </div>
                
                <div class="ui divider"></div>
                <a href="?class=Administradores&view=registrarEmpleado" class="ui green big mg-10-top button">Registrar Empleado</a>
                <a href="?class=Administradores&view=consultarEmpleado" class="ui green big mg-10-top button">Consultar Empleado</a>
            </div>
        </div>
    </div>

<?php require_once('views/layouts/footer.php') ?>
</body>
</html>