$.post(baseurl+"operationc/getAll",function(data){
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

selectOperation = function(id,category,type,concept,date,amount){
    $('#mid').val(id);
    $('#mcategory').val(category);
    $('#mtype').val(type);
    $('#date').val(date);
    $('#mconcept').val(concept);
    $('#mamount').val(amount);
    
};

deleteOperation =function(operationId){
    alert('click');
    $.post(baseurl+"operationc/delete",{
        id: operationId,
    },function(data){
    }); 
}

$('#btnUpdate').click(function(){
    alert("clic");
    location.reload();
})