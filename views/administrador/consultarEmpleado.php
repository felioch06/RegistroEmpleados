<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/bannerAdmin.php') ?>

<div class="ui stackable center aligned mg-40-top-bottom grid">
    <div class="four wide column">
        <div class="ui segment">
            <form action="?class=Administradores&view=consultarEmpleado" method="post">
                <div class="ui orange header">
                    Documento
                </div>
                <div class="ui divider"></div>
                <div class="ui fluid input">
                <input type="number" name="documento" required>
                </div>

                <button class="ui fluid mg-10-top green button">Enviar</button>
            </form>
        </div>

        <div class="ui segment">
            <form action="?class=Administradores&view=consultarEmpleado" method="post">
                <div class="ui orange header">
                    Fecha
                </div>
                <div class="ui divider"></div>
                <div class="ui fluid input">
                <input type="date" name="fecha" required>
                </div>

                <button class="ui fluid mg-10-top green button">Enviar</button>
            </form>
        </div>

    </div>
    <div class="twelve wide column">
        <?php if(isset($_REQUEST['documento'])){ ?>
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Nombres y Apelldos</th>
                    <th>Documento</th>
                    <th>Fecha</th>
                    <th>Hora de Entrada</th>
                    <th>Hora de Salida</th>
                </tr>
            </thead>
            <tbody>

            <?php 
            $documento = $_REQUEST['documento'];
            $consultaEmpleados = parent::consultaDocumento($documento);
            $consultaEmpleadosAll = parent::consultaDocumentoAll($documento);
            $consultaConsulta = parent::consultaControl($consultaEmpleados->id_usuario);
            foreach($consultaEmpleadosAll as $r){
                foreach($consultaConsulta as $o){
            ?> 

                <tr>
                <td ><?php echo $r->nombres.' '. $r->apellidos?></td>
                <td ><?php echo $r->documento ?></td>
                <td ><?php echo $o->fecha ?></td>
                <td ><?php echo $o->hora_entrada ?></td>
                <td ><?php echo $o->hora_salida ?></td>
                
                </tr>
            <?php } } ?>
            </tbody>
        </table>       
        <?php } ?>
        
        <?php if(isset($_REQUEST['fecha'])){ ?>
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Hora de Entrada</th>
                    <th>Hora de Salida</th>
                </tr>
            </thead>
            <tbody>

            <?php 
            $fecha = $_REQUEST['fecha'];
            $consultaFecha = parent::consultaFecha($fecha);

                foreach($consultaFecha as $r){
            ?> 

                <tr>
                <td><?php echo $r->nombres ?></td>
                <td><?php echo @$r->fecha ?></td>
                <td><?php echo @$r->hora_entrada ?></td>
                <td><?php echo @$r->hora_salida ?></td>
                
                </tr>
            <?php }  ?>
            </tbody>
        </table>
                <?php } ?>
    </div>
</div>

<?php $consultaFecha = parent::consultaTodaFecha();
    foreach($consultaFecha as $r)
    $pipe = $r->fecha.'-';
    $cosa = explode('-', $pipe);
    echo $cosa[0];
    echo $cosa[1];
    echo $cosa[2];
    echo $cosa[3];
    
?>

<?php require_once('views/layouts/footer.php') ?>
</body>
</html>