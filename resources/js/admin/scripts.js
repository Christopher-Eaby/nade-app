$('.image_upload').click(function(){
    var fd = new FormData();

    var files = $(this)[0].files;

    // Check file selected or not
    if(files.length > 0 ){

        fd.append('file',files[0]);

        $.ajax({
            url:'/admin/upload/image',
            type:'post',
            data:fd,
            dataType: 'json',
            contentType: false,
            processData: false,
            success:function(data){
                if(data.success){
                    $(this).val(data.image);
                    $(this).next().src(data.image);
                }
            }
        });
    }else{
        alert("Please select a file.");
    }
})