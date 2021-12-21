<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba adminlte - Editar empleado</title>

    <script src="<?= base_url('recursos/js/empleados/viewEditEmpleado.js') ?>"></script>

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
							<h1 class="m-0 text-dark">Editar empleado</h1>
                        </div>
                        <!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('inicio') ?>">Inicio</a></li>
                                <li class="breadcrumb-item active">Editar empleado</li>
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
                <form method="post" action="<?= base_url('editEmpleado') ?>" ?>
                    <?php foreach($datos_empleado as $row): ?>
                        <div class="row">
                            <input hidden type="text" class="form-control" id="id" name="id" value="<?= $row->id ?>">
                            <div class="form-group col-6">
                                <label for="nombre">Nombre empleado</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $row->nombre ?>" placeholder="Introduzca el nombre" max="255" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="apellidos">Apellidos empleado</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $row->apellidos ?>" placeholder="Introduzca los apellidos" max="255" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="dni">DNI</label>
                                <input type="text" class="form-control" id="dni" name="dni" value="<?= $row->dni ?>" placeholder="Introduzca el DNI" pattern="[0-9]{8}[A-Za-z]{1}" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="nif">Empresa</label>
                                <select class="form-control" name="id_empresa" id="id_empresa" required>
                                    <option selected disabled>Seleccione una opción</option>
                                    <?php foreach($empresas as $empresa): ?>
                                        <?php if($empresa->id == $row->id_empresa): ?>
                                            <option selected value="<?= $empresa->id ?>"><?= $empresa->nombre ?></option>
                                        <?php else: ?>
                                            <option value="<?= $empresa->id ?>"><?= $empresa->nombre ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
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