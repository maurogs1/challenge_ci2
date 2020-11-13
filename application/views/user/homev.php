<!-- La pantalla de inicio deberá mostrar el balance actual, es decir, el resultante de los ingresos y
egresos de dinero cargados, y un listado de los últimos 10 registrados. -->
<div class="container">
<div class="card bg-light mb-3 auto"  style="max-width: 18rem;">
  <div class="card-header">Balance actual</div>
  <div class="card-body">
    <p class="card-text">Ingresos: $<?php echo $entry ?></p>
    <p class="card-text">Egresos: $<?php echo $egress ?></p>
    <p class="card-text">Balance: $<?php echo $balance ?></p>
  </div>
</div>




    <div class=" text-center mt-5 mb-3" > <h2>Últimas 10 operaciones</h2></div>

   
      
      <div class="form-group">

        <select id="cbxCategoryHome" name="category" class="form-control ml-auto form-control-md col-md-4 col-sm-12" >
      |  <option value="select" selected>Selecciona una categoría</option>        
       </select>       
       </div>
      

<div class="table-responsive">
<table id="tblLastOperations" class="table table-hover table-dark">
  <thead>
            <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Tipo</th>
                <th scope="col">Concepto</th>
                <th scope="col">Fecha</th>    
                <th scope="col">Cantidad</th>
                </tr>
  </thead>
  <tbody>
    
    
  </tbody>
</table>
</div>

</div>