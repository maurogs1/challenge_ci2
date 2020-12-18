<div class="center">
<div class="register">
<h1 class="text-center mb-3"> Registrar usuario</h1>
<p><?php $error ?></p>
<form  class="ml-5 mr-5" action="<?php echo base_url()?>registerc/register" method="POST">
<div class="row">
    <div class="form-group col-12">
        <input id="nombre" placeholder="Nombre" class="form-control" type="text" name="nombre">
    </div>   
    <div class="form-group col-12">
        <input id="apellido" placeholder="Apellido" class="form-control"type="text" name="apellido">
    </div>
</div>
<div class="row">
    <div class="form-group col-12">
        <input id="dni" placeholder="Dni" class="form-control" maxlength="8" type="text" name="dni">
    </div>
    <div class="form-group col-12">
        
        <input id="email" placeholder="correo@hotmail.com" class="form-control" type="email" name="email">
    </div>
</div>
<div class="row">
<div class="form-group col-12">
    
        <input id="username" placeholder="Nombre de usuario" class="form-control" type="text" name="username">
</div>
    <div class="form-group col-12">
        
        <input id="password" placeholder="Contraseña" class="form-control" type="password" name="password">
    </div>
 
</div>
<div class="row">
<div class="form-group col-6">
    <button class="btn btn-success btn-block" type="submit" >Aceptar</button>
</div>
<div class="form-group col-6">
    <a class=" btn btn-success btn-block " href="<?php echo base_url('loginc'); ?>">Logearse</a>
</div>
    </div>
</form>


<!-- <script type="text/javascript">
    var baseurl ="<?php #echo base_url();?>";
</script> -->
</div>
</div>