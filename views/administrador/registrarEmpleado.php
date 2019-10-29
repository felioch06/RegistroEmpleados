<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/bannerAdmin.php') ?>

    <div class="ui stackable center aligned mg-40-top-bottom container grid">  

        <div class="eight wide column">
            
        <?php if(isset($_REQUEST['correcto'])){ ?>
                <div id="yaIngreso" class="ui blue message">
                    <i class="check large icon"></i>    
                    ¡El Documento ingresado ya tiene un registro hoy!
                </div>
            <?php } ?> 

            <div class="ui segment">
                <div class="ui orange huge header">                    
                    <h1>Registrar Empleado</h1>
                    <div class="ui divider"></div>         
                </div>
                    <form action="?class=Administradores&view=store" method="post">

                        <div class="ui left icon huge fluid mg-20-top-bottom input">
                            <input type="text" name="nombres" placeholder="Nombres" required>
                            <i class="user icon"></i>
                        </div>

                        <div class="ui left icon huge fluid mg-20-top-bottom input">
                            <input type="text" name="apellidos" placeholder="Apellidos" required>
                            <i class="user outline icon"></i>
                        </div>

                        <div class="ui left icon huge fluid mg-20-top-bottom input">
                            <input type="email" name="correo" placeholder="Correo" required>
                            <i class="mail icon"></i>
                        </div>

                        <div class="ui left icon huge fluid mg-20-top-bottom input">
                            <input type="password" name="contra" placeholder="Contraseña" required>
                            <i class="lock  icon"></i>
                        </div>
                        
                        <div class="ui mg-20-top-bottom form">
                            <div class="field ">
                                <select name="fk_tipo_documento" class="ui dropdown">
                                    <option value="">Seleccionar Tipo Documento</option>

                                    <?php foreach(parent::consultaTipoDocumento() as $r){ ?>
                                    <option value="<?php echo $r->id_tipo_documento ?>"><?php echo $r->tipo_documento ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>

                        <div class="ui left icon huge fluid mg-20-top-bottom input">
                            <input type="number" name="documento" placeholder="Documento" required>
                            <i class="id card icon"></i>
                        </div>

                        <div class="ui mg-20-top-bottom form">
                            <div class="field ">
                                <select name="fk_cargo" class="ui dropdown" >
                                    <option value="">Seleccionar Cargo</option>
                                    
                                    <?php foreach(parent::consultaCargo() as $r){ ?>
                                    <option value="<?php echo $r->id_cargo ?>"><?php echo $r->cargo ?></option>
                                    <?php } ?>             

                                </select>
                            </div>
                        </div>

                        <input type="hidden" value="2" name="fk_rol">

                        <input type="hidden" value="<?php echo date("Y-m-d") ?>" name="fecha_creacion">

                        <button class="ui olive huge button">
                            Entrar
                        </button>
                    </form>
            </div>
        </div>
    </div>

<?php require_once('views/layouts/footer.php') ?>
</body>
</html>