<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba adminlte - Empleados</title>

    <script src="<?= base_url('recursos/js/empleados/mainEmpleados.js') ?>"></script>
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
							<h1 class="m-0 text-dark">Empleados</h1>
						</div>
						<!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url('inicio') ?>">Inicio</a></li>
								<li class="breadcrumb-item active">Empleados</li>
							</ol>
						</div>
						<!-- /.col -->
						<div class="col-sm-12">
							<a href="<?= base_url('inicio') ?>" class="btn btn-app float-sm-right"><i class="fas fa-arrow-left"></i> Volver</a>
						</div>
						<!-- /.col --> 
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->
			<!-- main content -->
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Empleados</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="tabla_empleados" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>ID empleado</th>
											<th>Nombre empleado</th>
											<th>Apellidos empleado</th>
											<th>DNI empleado</th>
											<th>Opciones</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($empleados as $empleado): ?>
											<tr>
                                                <td><?= $empleado->id ?></td>
												<td><?= $empleado->nombre ?></td>
												<td><?= $empleado->apellidos ?></td>
                                                <td><?= $empleado->dni ?></td>
												<td class="project-actions text-center">
													<a class="btn btn-primary btn-xs" href="<?= base_url('viewEditEmpleado/'.$empleado->id) ?>"><i class="fas fa-edit fa-ms"></i></a>
													<button id="<?= $empleado->id ?>" type="button" class="btn btn-danger btn-xs btn_eliminar"><i class="fas fa-trash-alt"></i></button>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<a href="<?= base_url('viewAddEmpleado') ?>" class="btn btn-primary">Añadir empleado</a>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
			<!-- /.main content -->
		</div>
		<!-- /.content-wrapper -->
	</div>
</body>

</html>