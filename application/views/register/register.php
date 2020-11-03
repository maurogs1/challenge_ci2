<div class="center">
<div class="child">
<h1 class="text-center"> Registrar usuario</h1>

<form  class="ml-5 mr-5" method="POST">
<div class="row">
    <div class="form-group col-6">
        <label class="text-center" for="nombre">Nombre</label>
        <input id="nombre" class="form-control" type="text" name="nombre">
    </div>   
    <div class="form-group col-6">
        <label for="apellido">Apellido</label>
        <input id="apellido" class="form-control"type="text" name="apellido">
    </div>
</div>
<div class="row">
    <div class="form-group col-6">
        <label for="dni">DNI</label>
        <input id="dni" class="form-control" maxlength="8" type="text" name="dni">
    </div>
    <div class="form-group col-6">
        <label for="email">Correo</label>
        <input id="email" class="form-control" type="email" name="email">
    </div>
</div>
<div class="row">
    
    <div class="form-group col-6">
        <label for="ciudad">Ciudad</label><br>
        <select name="ciudadId" id="cmbCiudades" class="form-control ">
             <option>Seleccionar Tipo de usuario</option>
        </select>
    </div>
</div>
<div class="row">
<div class="form-group col-6">
    <label for="username">Usuario</label>
        <input id="username" class="form-control" type="text" name="username">
</div>
    <div class="form-group col-6">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name="password">
    </div>
 
</div>
<div class="row">
<div class="form-group col-6">
    <button class="btn btn-danger btn-block" type="submit" >Registrar</button>
</div>
<!-- <div class="form-group col-6">
    <a class=" btn btn-danger btn-block " href="<?php #echo base_url(); ?>loginc">Logearse</a>
</div> -->
    </div>
</form>


<!-- <script type="text/javascript">
    var baseurl ="<?php #echo base_url();?>";
</script> -->
</div>
</div>