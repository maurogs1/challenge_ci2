


<nav class="navbar mb-5 navbar-expand-lg navbar-dark bg-dark">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <h5 class="text-white ">Bienvenido <?php echo $name ." ". $lastname?></h5>

        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
        <ul class="navbar-nav ml-auto flex-nowrap">
        <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url()?>homec">Principal</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>operationc">Operaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link logout" href="<?php echo base_url()?>loginc/logout">Cerrar sesión</a>
      </li>
        </ul>
    </div>
</nav>
<div class="container">
