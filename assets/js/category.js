$.get(baseurl+"categoryc/getAll",function(data){ 
    var c = JSON.parse(data);
    $.each(c, function(i,item){
        $('#cbxCategory').append('<option value="'+item.id+'">'+item.name+'</option> ');
        $('#mcbxCategory').append('<option value="'+item.id+'">'+item.name+'</option> ');
        $('#cbxCategoryHome').append('<option value="'+item.id+'">'+item.name+'</option> ');

        
    });
});






