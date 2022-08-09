<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Tablero

            <small>Panel de Control</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Tablero</li>

        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">

             <div class="col-lg-3 col-xs-6">
            
                <div class="small-box bg-info">

                <div class="inner">

                <?php
                date_default_timezone_set('America/Costa_Rica');
                $fecha_actual = date("d-m-Y");
                $DateAndTime = date('h:i:s a', time());
                echo '<h4>Fecha:</h4>';
                echo '<h3 class="box-title">' . $fecha_actual . '</h3>';
               
                echo '<p>Hora:</p>';
                echo '<h3 class="box-title">' . $DateAndTime . '</h3>';
                ?>

                    

                
              </div>
              <div class="icon">
                <i class="iconify" data-icon="ion:date"></i>
              </div>
              <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

                
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="col-lg-3 col-xs-6">

                    <div class="small-box bg-aqua">

                        <div class="inner">

                            <h3>Personas</h3>

                            <p>Agregar y Buscar</p>

                        </div>

                        <div class="icon">

                            <i class="iconify" data-icon="ion:car-sport-sharp"></i>
  
                                    </div>
  
                                <a href="personas" class="small-box-footer">

                                Registrar <i class="fa fa-arrow-circle-right"></i>

                                </a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-green">

                            <div class="inner">

                                <h3>Capturas </h3>

                                <p>Ordenes de Captura del O.I.J</p>

                            </div>

                            <div class="icon">

                                <i class="iconify" data-icon="ion:build"></i>

                            </div>

                            <a href="capturas-oij" class="small-box-footer">

                                Ingresar <i class="fa fa-arrow-circle-right"></i>

                            </a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-yellow">

                            <div class="inner">

                                <h3>Vehículos</h3>

                                <p>Registro y consula de Vehículos</p>

                            </div>

                            <div class="icon">

                                <i class="iconify" data-icon="icon-park:ad-product" data-width="80" data-height="90"></i>

                            </div>

                            <a href="vehiculos" class="small-box-footer">

                                Ingresar <i class="fa fa-arrow-circle-right"></i>

                            </a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-red">

                            <div class="inner">

                                <h3>Reportes</h3>

                                <p>Realizar Reportes</p>

                            </div>

                            <div class="icon">

                                <i class="iconify" data-icon="ion:albums-sharp"></i>

                            </div>

                            <a href="reportes" class="small-box-footer">

                                Ingresar <i class="fa fa-arrow-circle-right"></i>

                            </a>

                        </div>

                    </div>Identificadas como 

                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-red">

                            <div class="inner">

                                <h2>Grupos Criminales</h2>

                                <p>GRupos Identificados</p>

                            </div>

                            <div class="icon">

                                <i class="iconify" data-icon="el:user" data-width="80" data-height="90"></i>

                            </div>

                            <a href="clientes" class="small-box-footer">

                                Ingresar <i class="fa fa-arrow-circle-right"></i>

                            </a>

                        </div>

                    </div>


                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-aqua">

                            <div class="inner">

                                <h2>Zonas Conflictivas</h2>

                                <p>Zonas conflictivas el cantón</p>

                            </div>

                            <div class="icon">

                                <i class="iconify" data-icon="mdi:point-of-sale" data-width="80" data-height="90"></i>

                            </div>

                            <a href=" vehiculo" class="small-box-footer">

                                Ingresar <i class="fa fa-arrow-circle-right"></i>

                            </a>

                        </div>

                    </div>


                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-green">

                            <div class="inner">

                                <h2>Los más Buscados</h2>

                                <p>Consulta de los más buscados</p>

                            </div>

                            <div class="icon">

                                <i class="iconify" data-icon="ic:baseline-point-of-sale" data-width="80" data-height="90"></i>

                            </div>

                            <a href="venta-mensual" class="small-box-footer">

                                Ingresar <i class="fa fa-arrow-circle-right"></i>

                            </a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-yellow">

                            <div class="inner">

                                <h3>Consultas</h3>

                                <p>Área de Consultas </p>

                            </div>

                            <div class="icon">

                                <i class="iconify" data-icon="et:document" data-width="60" data-height="70"></i>

                            </div>

                            <a href="mantenimiento" class="small-box-footer">

                                Ingresar <i class="fa fa-arrow-circle-right"></i>

                            </a>

                        </div>

                    </div>



                </div>

           
                
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->