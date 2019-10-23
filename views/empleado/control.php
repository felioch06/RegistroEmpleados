<?php require_once('views/layouts/header.php') ?>
<body>
<?php require_once('views/layouts/banner.php') ?>

<?php
    $documento = $_POST['documento'];
    $consulta = parent::consultaDocumento($documento);
    $consultaEmpleados = parent::consultaEmpleados();
    $consultaControlEmpleado = parent::consultaTodoRegistroEmpleado($consulta->id_usuario);
?>

<div class="ui mg-40-top-bottom stackable container center aligned grid">
    <div class="sixteen wide column">
        <h2 class="ui orange header">
            <?php 
                    echo $consulta->nombres.' '. $consulta->apellidos .'<br>'. $consulta->documento; 
                
            ?>
        </h2>
        <div class="ui divider"></div>

            <table class="ui celled table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora de Entrada</th>
                    <th>Hora de Salida</th>
                </tr>
            </thead>
                <tbody>

                <?php 
                    
                    foreach($consultaControlEmpleado as $r){
                        
                ?>  

                    <tr>
                    <td ><?php echo $r->fecha ?></td>
                    <td ><?php echo $r->hora_entrada ?></td>
                    <td ><?php echo $r->hora_salida ?></td>
                    </tr>

                    <?php } ?>
                </tbody>
        </table>       

        </div>
</div>

<?php require_once('views/layouts/footer.php') ?>
</body>
</html>