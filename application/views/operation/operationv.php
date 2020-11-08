
<form  class="ml-5 mr-5" action="<?php base_url()?>operationc/add" method="POST">
<div class="row">
    <div class="form-group col-6">
        <input id="amount" placeholder="Cantidad"  class="form-control" type="number" name="amount">
    </div>   
    <div class="form-group col-6">
        <input id="concept" placeholder="Concepto"  class="form-control"type="text" name="concept">
    </div>
</div>
<div class="row">
<div class="form-group col-6"> 

    <select id="cbxCategory" name="category" class="form-control form-control-md">
        <option disabled selected>Selecciona una categoría</option>
        
      </select>
</div>    
<div class="form-group col-6"> 

    <select name="type" class="form-control form-control-md">
    <option disabled selected>Selecciona un tipo</option>
        <option value="entry" >Ingreso</option>
        <option value="egress" >Egreso</option>
      </select>
</div>
</div>

<div class="row">
<div class="form-group col-6">
    <button class="btn btn-success btn-block" type="submit" >Aceptar</button>
</div>
<div class="form-group col-6">
    <a class=" btn btn-success btn-block "  type="reset"">Logearse</a>
</div>
    </div>
</form>


