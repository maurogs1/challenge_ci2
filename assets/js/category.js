$.post(baseurl+"categoryc/getAll",function(data){
    var c = JSON.parse(data);
    $.each(c, function(i,item){
        $('#cbxCategory').append('<option value="'+item.id+'">'+item.name+'</option> ')
    })
});

// $('#cbxCategory').change(function(){
//     alert($('#cbxCategory').val());
// })