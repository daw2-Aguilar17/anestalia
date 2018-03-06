<nav class="navbar navbar-expand-sm bg-dark navbar-dark text-center">
	<a class="navbar-brand" href="/">Empresa</a>
	<ul class="navbar-nav">
	
	
	<?php if($_SESSION['userSession']){ ?>
                
                
        <li class="nav-item <?php if($navbar == 'usuarios'){ ?>active<?php } ?>">
			<a class="nav-link" href="/usuarios">Usuaris</a>
		</li>
		<li class="nav-item <?php if($navbar == 'mutuas'){ ?>active<?php } ?>">
			<a class="nav-link" href="/mutuas">Mutues</a>
		</li>
		<li class="nav-item <?php if($navbar == 'empresas'){ ?>active<?php } ?>">
			<a class="nav-link" href="/empresas">Empreses</a>
		</li>
		<li class="nav-item <?php if($navbar == 'cirujanos'){ ?>active<?php } ?>">
			<a class="nav-link" href="#">Cirurgians</a>
		</li>
		<li class="nav-item <?php if($navbar == 'rolesUsuario'){ ?>active<?php } ?>">
			<a class="nav-link" href="/rolUsuarios">Rols de usuari</a>
		</li>	
                	
                
	<?php } ?>
	
	
	
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">user session</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Canviar contrasenya</a>
				<a class="dropdown-item" href="/usuarios/logIn">Iniciar sessio</a>
				<a class="dropdown-item" href="/usuarios/logOut">Tancar sessio</a>
			</div>
		</li>
	</ul>
</nav>