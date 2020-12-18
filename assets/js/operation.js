
/**
 * load the first interaction with the table in the crud of operations
 */
$.get(baseurl+"operationc/getAll",function(data){
        var operations = JSON.parse(data);
        $.each(operations, function(i,item){
            i+=1;
            $('#tblOperations').append(                
                '<tr >'+
                '<td>'+item.category+'</td>'+
                '<td>'+item.type+'</td>'+
                '<td>'+item.concept+'</td>'+
                '<td>'+item.date+'</td>'+
                '<td>'+item.amount+'</td>'+
                '<td>'+
                '<div class="row">'+
                '<a id="btnUpdate"  href="#" class="btn  btn-primary btn-sm col-5"  data-toggle="modal" data-target="#operationUpdate" '+
                'onClick="selectOperation(\''+item.id+'\',\''+item.category+'\',\''+item.type+'\',\''+item.concept+'\',\''+item.date+'\',\''+item.amount+'\');"><i class="fa fa-fw fa-edit"></i></a>' +
                '<a id="'+item.id+'" onClick="deleteOperation('+item.id+')"  class="btn btn-sm btn-danger col-5"><i class="fas fa-trash-alt"></i></a> '+
                '</div>'+
                ' </td>'+
                '</tr>'                
            );
        });
});

/**
 * get the las 10 operation from the user logged
 */
function getLastTen(){
    $.get(baseurl+"homec/getLastTen",function(data){
        var operations = JSON.parse(data);
        $.each(operations, function(i,item){
            $('#tblLastOperations').append(                
                '<tr >'+
                '<td>'+item.category+'</td>'+
                '<td>'+item.type+'</td>'+
                '<td>'+item.concept+'</td>'+
                '<td>'+item.date+'</td>'+
                '<td>'+item.amount+'</td>'+
                '</tr>'                
            );
        });
    });
}


/**
 * find the table by category
 */
$('#cbxCategoryHome').change(function(){
    var selected = $(this).children(":selected").val();
    $('#tblLastOperations tr').remove();

    if(selected == 'select')
        getLastTen();
    else
        getByCategory(selected);
});




function getByCategory(selected){
    console.log(selected);
    $.get(baseurl+"homec/getByCategory",{
        category: selected
    }, function(data){
        var operations = JSON.parse(data);
        console.log(operations);
        $('#tblLastOperations').append(
        '<tr>'+
        '<th scope="col">Categoria</th>'+
        '<th scope="col">Tipo</th>'+
        '<th scope="col">Concepto</th>'+
        '<th scope="col">Fecha</th>'+
        '<th scope="col">Cantidad</th>'+
        '</tr>'
        );
        
     $.each(operations, function(i,item){
        $('#tblLastOperations').append(
            
            '<tr >'+
            '<td>'+item.category+'</td>'+
            '<td>'+item.type+'</td>'+
            '<td>'+item.concept+'</td>'+
            '<td>'+item.date+'</td>'+
            '<td>'+item.amount+'</td>'+
            '<td>'+
            '</tr>'                
            );
     });

    });
    }




 

/**
 * get the row from the table to pass in to a modal to edit an operation
 */
selectOperation = function(id,category,type,concept,date,amount){
    $('#mid').val(id);
    $('#mcategory').val(category);
    $('#mconcept').val(concept);
    $('#mamount').val(amount);
    
};
/**
 * delete an operation
 */
deleteOperation = function(operationId){
 $.get(baseurl+"operationc/delete",
 {id: operationId},
     function(data){
        location.reload();
     });
};


$( document ).ready( getLastTen );





// VALIDATIONS

