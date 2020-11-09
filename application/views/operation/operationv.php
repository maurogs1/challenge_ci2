


<div class="container">
<div class="row">
    <div class="col-10 text-center"> Últimas 10 operaciones  </div>
    <button class="col-2" class="btn btn-block "  data-toggle="modal" data-target="#operationModal"><i class="fas fa-plus"></i></button>
</div>
</div>



<div class="table-responsive">
<table id="tblOperations" class="table table-hover table-dark">
  <thead>
            <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Tipo</th>
                <th scope="col">Concepto</th>
                <th scope="col">Fecha</th>    
                <th scope="col">Cantidad</th>
                <th scope="col">Acciones</th>
                </tr>
  </thead>
  <tbody>
    
    
  </tbody>
</table>
</div>



<div class="modal fade" id="operationModal" tabindex="-1" role="dialog" aria-labelledby="operationModalTittle" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="operationModalTittle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
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
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit" >Aceptar</button>
      </div>
    </form>
    </div>
  </div>
</div>




<div class="modal fade" id="operationUpdate" tabindex="-1" role="dialog" aria-labelledby="operationUpdateTittle" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="operationUpdateTittle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<form  class="ml-5 mr-5" action="<?php base_url()?>operationc/update" method="POST">
<div class="row">
<input id="mdate" name="mdate" hidden>
<input id="mtype" name="mtype" hidden>
<input id="mid" name="mid" hidden>
    <div class="form-group col-6">
      <label for="mamount">Cantidad</label>
        <input id="mamount" placeholder="Cantidad"  class="form-control" type="text" name="mamount">
    </div>   
    <div class="form-group col-6">
    <label for="mconcept">Concepto</label>
        <input id="mconcept" placeholder="Concepto"  class="form-control"type="text" name="mconcept">
    </div>
</div>
<div class="row">
<div class="form-group col-12"> 

    <select id="mcbxCategory" name="mcategory" class="form-control form-control-md">
        <option disabled selected>Selecciona una categoría</option>
        
      </select>
</div>    
</div>


</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit" >Actualizar</button>
      </div>
    </form>
    </div>
  </div>
</div>


