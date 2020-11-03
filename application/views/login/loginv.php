<div class="center">
<div class="child">
    <form class="login-form"  action="loginc/login" method="POST">
        <div class="form-group">            
            <input id="my-input" class="form-control"  placeholder="Usuario" type="text" name="username">
        </div>
        <div class="form-group">            
            <input id="my-input" class="form-control" placeholder="Contraseña" type="password" name="password">
        </div>
        <hr>
        <button class="btn btn-danger btn-block ">Ingresar</button>
        <hr>
        <a class="btn btn-danger btn-block" href="<?php echo base_url();?>">Registrar</a>
    </form>
</div>
</div>