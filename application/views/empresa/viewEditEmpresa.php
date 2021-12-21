<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba adminlte - Añadir empresa</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<!-- wrapper -->
	<div class="wrapper">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Añadir empresa</h1>
                        </div>
                        <!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('inicio') ?>">Inicio</a></li>
                                <li class="breadcrumb-item active">Añadir empresa</li>
							</ol>
                        </div>
                        <!-- /.col -->
                        <div class="container">
                            <div class="col-sm-12">
                                <a href="<?= base_url('inicio') ?>" class="btn btn-app float-sm-right"><i class="fas fa-arrow-left"></i> Volver</a>
                            </div>
                            <!-- /.col --> 
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
			</div>
            <!-- /.content-header -->
            <!-- main content -->
            <div class="container mt-4">
                <form method="post" action="<?= base_url('editEmpresa') ?>" ?>
                    <?php foreach($datos_empresa as $row): ?>
                        <div class="row">
                            <input hidden type="text" class="form-control" id="id" name="id" value="<?= $row->id ?>">
                            <div class="form-group col-6">
                                <label for="nombre">Nombre empresa</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $row->nombre ?>" placeholder="Introduzca el nombre de la empresa" max="255" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="direccion">Dirección empresa</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $row->direccion ?>" placeholder="Introduzca la dirección de la empresa" max="255" required>
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
            <!-- /.main content -->
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /.wrapper -->
</body>

</html>