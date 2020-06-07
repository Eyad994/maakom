$(document).on('click','.btns_login',function() {
    login();
});
$(document).on('keypress','.txts_login',function(e) {
    if(e.which == 13) {
        login();
    }
});
function login()
{
    user = $('#txt_user_name').val();
    password = $('#txt_password').val();
    $.post( "index.php", { type: "admin_login", user: user,password:password })
    .done(function( data ) {
        if(data=='1')
        {
            document.location = document.location;
        }
        else
        {
            sweetAlert("خطأ", "يوجد خطأ بعملية الدخول، تأكد من اسم المستخدم أو كلمة السر!", "error");
        }
    });
}
$(document).on('click','#btn_logout',function() {
    $.post( "index.php", { type: "admin_logout"})
        .done(function( data ) {
        if(data=='1')
        {
            document.location = document.location;
        }
    });
});

function delete_product_img(id)
{
    swal({
        title: "هل انت متأكد من حذف الصورة؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "نعم",
        cancelButtonText: "لا",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
            $.post( "index.php", {type:'delete_img_product', id: id })
            .done(function( data ) {
            if(data=='1')
            {
                $('#div_show_product_img_'+id).hide(0);
                swal({
                        title: "Auto close alert!",
                        text: "تم الحذف",
                        timer: 1000,
                        type: "success",
                        showConfirmButton: false
                      });
                    
            }
            });
        } else {
            swal({
                title: "تم إلغاء الحذف ",
                timer: 1200,
                type: "error",
                showConfirmButton: false
              });
          
        }
      });
}

function save_banner()
{
    var formData = new FormData($("#form_add_banner")[0]);
    $.ajax({
        url: window.location.pathname,
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            if(data=='1')
            {
                document.location = document.location;
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
}
function delete_banner(id)
{
    swal({
        title: "هل انت متأكد من حذف الصورة؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "نعم",
        cancelButtonText: "لا",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
            $.post( "index.php", {type:'delete_banenr', id: id })
            .done(function( data ) {
            if(data=='1')
            {
                swal({
                        title: "Auto close alert!",
                        text: "تم الحذف",
                        timer: 1000,
                        type: "success",
                        showConfirmButton: false
                      });
                      $('#div_show_banner_'+id).hide(0);
                     
                //document.location = document.location;
            }
            });
        } else {
            swal({
                title: "تم إلغاء الحذف ",
                timer: 1200,
                type: "error",
                showConfirmButton: false
              });
          
        }
      });
    
}
$(document).on('click','#OpenBannerUpload',function(e) {
    $('#file_banner_img').trigger('click');
});
function show_product(id)
{
    $( '.hide' ).each(function(  ) {
        $(this).removeClass('hide');
    });
    $( '.hide_product' ).each(function(  ) {
        $(this).addClass('hide');
    });
    $( '.hide_product'+id ).removeClass('hide');
    $( '#btn_product_info'+id).addClass('hide');
}
function hide_product(id)
{
    $( '.hide_product'+id ).addClass('hide');
    $( '#btn_product_info'+id).removeClass('hide');
}
pro_id=0;
function show_products_imgs(id)
{
    pro_id = id;
 $.post( "index.php", {type:'get_admin_product_imgs', id: id})
    .done(function( data ) {
        $('#div_product_admin_boxe_img'+id).html(data);
        $('#div_product_admin_boxe_img'+id).append('<button id="OpenImgUpload"> </button> <form id="form_add_product_img"> <input type="hidden" name="type" value="add_product_img"> <input type="hidden" name="product_id" value="'+id+'"> <input type="file" name="product_img" id="imgupload" style="display:none"/> </form>');
  });   
}
function delete_product(id)
{
    swal({
        title: "هل انت متأكد من حذف المنتج؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "نعم",
        cancelButtonText: "لا",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
            $.post( "index.php", {type:'delete_product', id: id })
            .done(function( data ) {
            if(data=='1')
            {
                swal({
                        title: "Auto close alert!",
                        text: "تم الحذف",
                        timer: 1000,
                        type: "success",
                        showConfirmButton: false
                      });
                      $('#divs_product_admin_boxes'+id).hide(300);
                    //document.location = document.location;
            }
            });
        } else {
            swal({
                title: "تم إلغاء الحذف ",
                timer: 1200,
                type: "error",
                showConfirmButton: false
              });
          
        }
      });
}
$(document).on('click','#OpenImgUpload',function(e) {
    $('#imgupload').trigger('click');
});
$(document).on('click','.EditArticleImg',function(e) {
    id = this.id;
    $('#img_edit_articl_'+id).trigger('click');
});

function img_article_uploud(id)
{
     var formData = new FormData($("#form_edit_artilce_img")[0]);
    $.ajax({
        url: window.location.pathname,
        type: 'POST',
        data: formData,
        async: true,
        success: function (data) {
            $('#img_articl_'+id).attr('src','http://localhost/hijazzy/access_files/upload_center/'+data) 
        },
        cache: false,
        contentType: false,
        processData: false
    });
}
function img_product_uploud()
{
     var formData = new FormData($("#form_add_product_img")[0]);
    $.ajax({
        url: window.location.pathname,
        type: 'POST',
        data: formData,
        async: true,
        success: function (data) {
            if(data=='1')
            {
                //document.location = document.location;
                show_products_imgs(pro_id);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
}
$(document).on('change','#imgupload',function(e) {
    img_product_uploud()
});
editable_id =0;
function make_editable_product(id)
{
    if(editable_id!=id)
    {
        $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_title').attr('contenteditable','true');
        $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_desc').attr('contenteditable','true');
        $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_price').attr('contenteditable','true');
        $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_title').addClass('div_editable');
        $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_desc').addClass('div_editable');
        $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_price').addClass('div_editable');

        editable_id = id;
    }
    else
    {
        product_id=id;
        product_name=$.trim($('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_title').text());
        product_desc=$('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_desc').html();
        product_price=$.trim($('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_price').text());
        $.post( "index.php", {type:'edit_product', product_id:product_id,product_name:product_name,product_desc:product_desc,product_price:product_price })
        .done(function( data ) {
            if(data=='1')
            {
                $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_title').attr('contenteditable','false');
                $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_desc').attr('contenteditable','false');
                $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_price').attr('contenteditable','false');
                $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_title').removeClass('div_editable');
                $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_desc').removeClass('div_editable');
                $('#divs_product_admin_boxes'+id+' .divs_product_admin_boxes_price').removeClass('div_editable');
                editable_id =0;
            }
        });
    }
}
function show_article(id)
{
    $( '.hide' ).each(function(  ) {
        $(this).removeClass('hide');
    });
    $( '.hide_article' ).each(function(  ) {
        $(this).addClass('hide');
    });
    
    $( '.hide_article'+id ).removeClass('hide');
    $( '#btn_article_info'+id).addClass('hide');
}
function hide_article(id)
{
    $( '.hide_article'+id ).addClass('hide');
    $( '#btn_article_info'+id).removeClass('hide');
}
editable_article_id = 0;
function make_editable_article(id)
{
    if(editable_article_id!=id)
    {
        $('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_title').attr('contenteditable','true');
        $('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_desc').attr('contenteditable','true');
        $('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_title').addClass('div_editable');
        $('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_desc').addClass('div_editable');
        editable_article_id = id;
    }
    else
    {
        article_id=id;
        article_title=$('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_title').text();
        article_text=$('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_desc').text();
        $.post( "index.php", {type:'edit_article', article_id:article_id,article_title:article_title,article_text:article_text })
        .done(function( data ) {
            if(data=='1')
            {
                $('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_title').attr('contenteditable','false');
                $('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_desc').attr('contenteditable','false');
                $('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_title').removeClass('div_editable');
                $('#div_article_admin_boxe'+id+' .divs_article_admin_boxes_desc').removeClass('div_editable');
                editable_article_id =0;
            }
        });
    }
}
function delete_article(id)
{
    swal({
        title: "هل انت متأكد من حذف المقال؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "نعم",
        cancelButtonText: "لا",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
            $.post( "index.php", {type:'delete_article', id: id })
            .done(function( data ) {
            if(data=='1')
            {
                swal({
                        title: "Auto close alert!",
                        text: "تم الحذف",
                        timer: 1000,
                        type: "success",
                        showConfirmButton: false
                      });
                    //document.location = document.location;
                    $('#div_article_admin_boxe'+id).hide(0);
            }
            });
        } else {
            swal({
                title: "تم إلغاء الحذف ",
                timer: 1200,
                type: "error",
                showConfirmButton: false
              });
          
        }
      });
}
function save_articl()
{
    $('#txt_article_content').html(CKEDITOR.instances.txt_article_content.getData());
    var formData = new FormData($("#form_add_article")[0]);
    $.ajax({
        url: window.location.pathname,
        type: 'POST',
        data: formData,
        async: true,
        success: function (data) {
            if(data=='1')
            {
                document.location = document.location;
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
}
function save_product()
{
    $('#txt_product_content').html(CKEDITOR.instances.txt_product_content.getData());
    var formData = new FormData($("#form_add_products")[0]);
    $.ajax({
        url: window.location.pathname,
        type: 'POST',
        data: formData,
        async: true,
        success: function (data) {
            if(data=='1')
            {
                document.location = document.location;
            }
        },
        error: function (request, status, error) {
        alert(request.responseText);
        },
        cache: false,
        contentType: false,
        processData: false
    });
    
}
function save_event()
{
    var formData = new FormData($("#form_add_event")[0]);
    $.ajax({
        url: window.location.pathname,
        type: 'POST',
        data: formData,
        async: true,
        success: function (data) {
            if(data=='1')
            {
                document.location = document.location;
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
    
}
function delete_event(id)
    {
    swal({
        title: "هل انت متأكد من حذف المناسبة؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "نعم",
        cancelButtonText: "لا",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
            $.post( "index.php", {type:'delete_event', id: id })
            .done(function( data ) {
            if(data=='1')
            {
                swal({
                        title: "Auto close alert!",
                        text: "تم الحذف",
                        timer: 1000,
                        type: "success",
                        showConfirmButton: false
                      });
                      $('#div_event_admin_boxe'+id).hide(0);
                     
                //document.location = document.location;
            }
            });
        } else {
            swal({
                title: "تم إلغاء الحذف ",
                timer: 1200,
                type: "error",
                showConfirmButton: false
              });
          
        }
      });
    }
    content_event_id = 0;
    function show_event_data(id)
    {
        content_event_id = id;
        $.post( "index.php", {type:'get_event_contents', id: id })
            .done(function( data ) {
                $('#div_events_content'+id).html(data);
        });
    }
    function delete_event_content(id)
    {
        swal({
        title: "هل انت متأكد من حذف ملف المناسبة؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "نعم",
        cancelButtonText: "لا",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
            $.post( "index.php", {type:'delete_event_content', id: id })
            .done(function( data ) {
            if(data=='1')
            {   
                swal({
                        title: "Auto close alert!",
                        text: "تم الحذف",
                        timer: 1000,
                        type: "success",
                        showConfirmButton: false
                      });
                      $('#div_event_content'+id).hide(0);
                     
                //document.location = document.location;
            }
            });
            } else {
                swal({
                    title: "تم إلغاء الحذف ",
                    timer: 1200,
                    type: "error",
                    showConfirmButton: false
                  });

            }
      });
    }
upload_type = 1;
$(document).on('click','#div_upload_img',function(e) {
    if(!upload_loading)
    {
        upload_type = 1;
        $('#file_upload_event').trigger('click');
    }
});
$(document).on('click','#div_upload_vid',function(e) {
    if(!upload_loading)
    {
        upload_type = 2;
        $('#file_upload_event').trigger('click');
    }
});
    upload_loading = false;
function uplaod_event_file(id)
{
    upload_loading = true;
    $('#file_upload_event_hidden').val(upload_type);
    var formData = new FormData($("#form_add_event_file")[0]);
    $.ajax({
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            $('#div_upload_status').removeClass('hide');
            xhr.upload.addEventListener("progress", function(evt) {
              if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                percentComplete = parseInt(percentComplete * 100);
                console.log(percentComplete);
                $('#div_percent_status'+id).css('width',percentComplete+'%');
                if (percentComplete === 100) {
                }

              }
            }, false);

            return xhr;
          },
        url: window.location.pathname,
        type: 'POST',
        data: formData,
        async: true,
        success: function (data) {
            show_event_data(content_event_id)
            upload_loading = false;
        }, 
        error: function (request, status, error) {
        alert(request.responseText);
        },
        cache: false,
        contentType: false,
        processData: false
    });
    
    
}
/*$(function() { $('#txt_article_content').froalaEditor(); });
$(function() { $('#txt_product_content').froalaEditor(); });
*/

/*CKEDITOR.replace( '#txt_product_content' , {
        language: 'ar'
} );*/
