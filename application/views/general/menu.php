<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- navbar izquierda -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="<?= base_url('inicio') ?>" class="nav-link">Inicio</a>
			</li>
        </ul>
        <!-- navbar derecha -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-none d-sm-inline-block">
				<a href="<?= base_url('logout') ?>" class="nav-link">Cerrar sesión</a>
			</li>
        </ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="<?= base_url('inicio') ?>" class="brand-link">
			<span class="brand-text font-weight-light">Prueba adminlte</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="info">
					<a href="#" class="d-block">
						Prueba adminlte
					</a>
				</div>
			</div>
			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- inicio -->
                    <li class="nav-item">
                        <a href="<?= base_url('inicio') ?>" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <!-- /.inicio -->
					<!-- empresas -->
						<li class="nav-item has-treeview menu_tipo3">
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-building"></i>
								<p>Empresas<i class="right fas fa-angle-left"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('mainEmpresas') ?>" class="nav-link active">
										<i class="nav-icon far fa-building"></i>
										<p>Empresas</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('viewAddEmpresa') ?>" class="nav-link active">
										<i class="nav-icon far fa-building"></i>
										<p>Añadir empresa</p>
									</a>
								</li>
							</ul>
						</li>
                    <!-- /.empresas -->
					<!-- empleados -->
					<li class="nav-item has-treeview menu_tipo3">
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-users"></i>
								<p>Empleados<i class="right fas fa-angle-left"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('mainEmpleados') ?>" class="nav-link active">
										<i class="nav-icon fas fa-users"></i>
										<p>Empleados</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('viewAddEmpleado') ?>" class="nav-link active">
										<i class="nav-icon fas fa-users"></i>
										<p>Añadir empleados</p>
									</a>
								</li>
							</ul>
						</li>
                    <!-- /.empleados -->
                    <!-- cerrar sesion -->
                    <li class="nav-item mt-2">
                        <a href="<?= base_url() ?>logout" class="nav-link active">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Cerrar sesión</p>
                        </a>
                    </li>
                    <!-- /.cerrar sesion -->
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
</body>

<script>
	$(document).ready(function() {
		$('.menu_tipo3').addClass('menu-open');
	});
</script>

</html>
