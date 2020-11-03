<div class="center">
    <div class="child">

    <form class="login ml-5 mr-5""  action="<? echo base_url()?>loginc/login" method="POST">
    <div class="row">
        <div class="form-group col-12">            
            <input id="my-input" class="form-control"  placeholder="Usuario" type="text" name="username">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">            
            <input id="my-input" class="form-control" placeholder="Contraseña" type="password" name="password">
        </div>
    </div>    
        <hr>
        <button class="btn btn-danger btn-block ">Ingresar</button>
        <hr>
        <a class="btn btn-danger btn-block" href="<?php echo base_url('registerc');?>">Registrar</a>
    </form>
    <?php echo $error ?>
</div>
</div> 