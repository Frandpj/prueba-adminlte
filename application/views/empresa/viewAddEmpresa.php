<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba adminlte - Editar empresa</title>
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
							<h1 class="m-0 text-dark">Editar empresa</h1>
                        </div>
                        <!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('inicio') ?>">Inicio</a></li>
                                <li class="breadcrumb-item active">Editar empresa</li>
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
                <form method="post" action="<?= base_url('addEmpresa') ?>" ?>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="nombre">Nombre empresa</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca el nombre de la empresa" max="255" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="direccion">Direcci??n empresa</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Introduzca la direcci??n de la empresa" max="255" required>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.main content -->
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /.wrapper -->
</body>

</html>