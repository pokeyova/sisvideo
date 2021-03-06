<?php require RUTA.'/vistas/inc/header.php';?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h3 class="titulo_form">VIDEOS</h3>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="titulo_panel">3 primeras películas mas alquilados y con poco stock</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4" style="padding:10px;">
                            <div class="contenedor_info" style="border:solid 1px gray; padding:7px;">
                                <h4 class="subrrayado">Peliculas mas alquiladas con poco stock</h4>
                                <?php if(count($datos['videos']) > 0): ?>
                                <table border="1" style="width:100%;" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th width="15%">Préstamos</th>
                                            <th width="15%">Stock</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($datos['videos'] as $video):?>
                                        <tr>
                                            <td><?php echo $video->titulo?></td>
                                            <td class="centreado"><?php echo $video->cantidad?></td>
                                            <td class="centreado"><?php echo $video->stock?></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>                                    
                                <?php else : ?>
                                No hay registros
                                <?php endif;?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require RUTA.'/vistas/inc/footer.php';?>

</body>
</html>