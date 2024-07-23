<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->Section('contenido'); ?>

<?php echo $this->include('plantillas/menu'); ?>

<div class="container-fluid justify-content-center ">

    <br>

    <div class="p-3 m-5">
        <h1 class="p-1">Ciudadanos</h1>
        <a href="nuevo_ciudadano" class="btn btn-primary  ">Nuevo Ciudadano</a>

    </div>
    <div class="container">

        <div class="list-group-horizontal position-relative overflow-auto w-100" 
        
        style="margin: 4px, 4px;
            padding: 4px;
            width: 100%;
            height: 600px;
            overflow: auto;
            white-space: wrap;
            ">


            <table class="table table-hover s-2 e-0 ">
                <thead class="table table-dark row">
                    <th class="col-xl-1 col-1">DPI</th>
                    <th class="col-xl-1 col-1">Apellido</th>
                    <th class="col-xl-1 col-1">Nombre</th>
                    <th class="col-xl-1 col-1">direccion</th>
                    <th class="col-xl-1 col-1">tel_casa</th>
                    <th class="col-xl-1 col-1">tel_movil</th>
                    <th class="col-xl-1 col-1">email</th>
                    <th class="col-xl-1 col-1">fechanac</th>
                    <th class="col-xl-1 col-1">cod_nivel_acad</th>
                    <th class="col-xl-1 col-1">cod_muni</th>
                    <th class=" col-xl-1 col-1"></th>
                    <th class="col-xl-1 col-1"></th>
                </thead>
            <tbody>
                <?php foreach ($datos as $ciudadanos) : ?>
                    <tr class="row">
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['dpi']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['apellido']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['nombre']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['direccion']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['tel_casa']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['tel_movil']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['email']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['fechanac']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['cod_nivel_acad']; ?></td>
                        <td class=" col-xl-1 col-1"><?php echo $ciudadanos['cod_muni']; ?></td>
                        <td class=" col-xl-1 col-1" style="width: 120px; ">
                            <a href="" class="btn btn-success" style="border-radius: 50px;">Actualizar</a>
                        </td>
                        <td class=" col-xl-1 col-1" style="width: 10px; ">
                            <a href="eliminar_ciudadano/<?php echo $ciudadanos['dpi']; ?>" class="btn btn-danger" style="border-radius: 50px;">Eliminar</a>
                        </td>
                    </tr>
                    
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>



<?php echo $this->endSection(); ?>