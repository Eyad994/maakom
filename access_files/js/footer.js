$(document).on("click", ".tds_clicable", function () {
    if ($(this).attr('url') != '')
    {
        window.location = $(this).attr('url');
    }
});
$(document).on("click", ".tds_delete_admin", function () {
    id = this.id;
    swal({
        title: "هل انت متأكد من الحذف؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
            function () {
                $.post("index.php", {type: 'delete_admin', id: id})
                        .done(function (data) {
                            if (data == 1)
                            {
                                $('#tr_' + id).hide();
                                swal("تم الحذف !", "", "success");
                            }
                        });


            });
});
function copy_link(latlng_str)
{
    text = "https://www.google.com/maps/place/" + latlng_str;
    var selected = false;
    var el = document.createElement('textarea');
    el.value = text;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    if (document.getSelection().rangeCount > 0) {
        selected = document.getSelection().getRangeAt(0)
    }
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    if (selected) {
        document.getSelection().removeAllRanges();
        document.getSelection().addRange(selected);
    }

    swal("تم نسخ الرابط!", "", "success");
}
$(document).on("click", "#update_user_data", function () {
    user_name = $('#u_name').val();
    phone = $('#phone').val();
    email = $('#u_email').val();
    full_name = $('#full_name').val();
    user_number = $('#user_number').val();
    pass = $('#pass').val();

    $.post("index.php", {type: 'update_profile', user_name: user_name, phone: phone,
        email: email, full_name: full_name
        , user_number: user_number, pass: pass})
            .done(function (data) {
                if (data == '1')
                {
                    swal("تم التعديل!", "", "success");
                } else
                {
                    swal(" ادخلت كلمة سر خاطئة!", "", "error");
                }
            });
});
$(document).on("click", "#update_new_pass", function () {
    old_pass = $('#old_pass').val();
    new_pass = $('#new_pass').val();
    re_new_pass = $('#re_new_pass').val();
    if (old_pass == '' || new_pass == '' || re_new_pass == '')
    {
        swal(" الرجاء تعبئة جميع الحقول!", "", "error");
    } else if (new_pass == re_new_pass)
    {
        $.post("index.php", {type: 'update_profile_pass', old_pass: old_pass,
            new_pass: new_pass})
                .done(function (data) {
                    if (data == '1')
                    {
                        $('#old_pass').val('');
                        $('#new_pass').val('');
                        $('#re_new_pass').val('');
                        swal("تم التعديل!", "", "success");
                    } else if (data = 'no')
                    {
                        swal(" ادخلت كلمة سر خاطئة!", "", "error");
                    } else if (data = 'fill')
                    {
                        swal(" الرجاء تعبئة جميع الحقول!", "", "error");
                    }
                });
    } else
    {
        swal(" كلمة السر غير متطابقة!", "", "error");
    }
});
$(document).on("click", ".tds_delete_survey", function () {
    id = this.id;
    swal({
        title: "هل انت متأكد من الحذف؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
            function () {
                $.post("index.php", {type: 'delete_survey', id: id})
                        .done(function (data) {
                            if (data == 1)
                            {
                                $('#tr_' + id).hide();
                                swal("تم حذف الاستطلاع!", "", "success");
                            }
                        });


            });
});

$(document).on("click", ".tds_delete_municipality", function () {
    id = this.id;
    swal({
        title: "هل انت متأكد من الحذف؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
            function () {
                $.post("index.php", {type: 'delete_municipality', id: id})
                        .done(function (data) {
                            if (data == 1)
                            {
                                $('#tr_' + id).hide();
                                swal("تم حذف بنجاح!", "", "success");
                            }
                        });


            });
});

$(document).on("click", ".tds_delete_news", function () {
    id = this.id;
    swal({
        title: "هل انت متأكد من الحذف؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
            function () {
                $.post("index.php", {type: 'delete_news', id: id})
                        .done(function (data) {
                            if (data == 1)
                            {
                                $('#tr_' + id).hide();
                                swal("تم حذف الخبر!", "", "success");
                            }
                        });


            });
});
$(document).on("click", ".tds_delete_tenders", function () {
    id = this.id;
    swal({
        title: "هل انت متأكد من الحذف؟",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
            function () {
                $.post("index.php", {type: 'delete_tender', id: id})
                        .done(function (data) {
                            if (data == 1)
                            {
                                $('#tr_' + id).hide();
                                swal("تم حذف الخبر!", "", "success");
                            }
                        });


            });
});

$(document).on("click", ".edit_survey", function () {
    id = this.id;

});
var edit_marker_child = false;
function initMap() {
    if ($("#div_map").length != 0) {
        if (null !== document.getElementById("div_map")) {
            lat = $("#div_map").attr("lat"), lng = $("#div_map").attr("lng"), myLatLng = {
                lat: parseFloat(lat),
                lng: parseFloat(lng)
            };
            var e = new google.maps.Map(document.getElementById("div_map"), {
                zoom: 17,
                center: myLatLng
            });
            edit_marker_child = new google.maps.Marker({
                position: myLatLng,
                map: e,
                title: "موقع البلاغ"
            })
        }
        search = $("#div_map").attr("saerch");
        if (search == 'enable')
        {

            var input = (document.getElementById('txt_map_search'));
            e.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            var searchBox = new google.maps.places.SearchBox(
                    (input));
            google.maps.event.addListener(searchBox, 'places_changed', function () {
                var places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }

                markers = [];
                var mLatLng;
                var bounds = new google.maps.LatLngBounds();
                for (var i = 0, place; place = places[i]; i++) {

                    if (edit_marker_child === false) {
                        edit_marker_child = new google.maps.Marker({
                            position: place.geometry.location,
                            map: e,
                            draggable: true
                        });
                        editMarkerLocationChild();
                        google.maps.event.addListener(edit_marker_child, 'dragend', function () {
                            editMarkerLocationChild();
                        });
                    } else {
                        edit_marker_child.setPosition(place.geometry.location);
                        editMarkerLocationChild();
                    }
                    mLatLng = place.geometry.location;
                }
                lat = mLatLng.lat();
                lng = mLatLng.lng();
                e.setCenter(mLatLng);
                e.setZoom(18);
                editMarkerLocationChild();
            });
        }

    }
}
function editMarkerLocationChild()
{
    var currentLocation = edit_marker_child.getPosition();
    $('#hdn_edit_municipality_lat').val(currentLocation.lat());
    $('#hdn_edit_municipality_lng').val(currentLocation.lng());
}
set_eidtor();
function set_eidtor()
{
    if ($("#txt_editor").length != 0)
    {
        CKEDITOR.replace('txt_editor');
    }

}
$(document).on("click", "#save_news", function () {
    if (inputs_validation("#form_news_data"))
    {
        $('#txt_editor').val(CKEDITOR.instances.txt_editor.getData());
        var formData = new FormData($("#form_news_data")[0]);
        $.ajax({
            xhr: function () {
                var xhr = new window.XMLHttpRequest();
                $('#div_upload_status').removeClass('hide');
                xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        console.log(percentComplete);
                        $('#div_percent_status').css('width', percentComplete + '%');
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
                if (data == '1')
                {
                    window.location = 'https://masarmobile.com/maakom/news';
                } else
                {
                    //window.location = window.location+'/'+data;
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
});

$(document).on("click", "#save_tender", function () {
    if (inputs_validation('#form_tender_data'))
    {
        $('#txt_editor').val(CKEDITOR.instances.txt_editor.getData());
        var formData = new FormData($("#form_tender_data")[0]);
        $.ajax({
            xhr: function () {
                var xhr = new window.XMLHttpRequest();
                $('#div_upload_status').removeClass('hide');
                xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        console.log(percentComplete);
                        $('#div_percent_status').css('width', percentComplete + '%');
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
                if (data == '1')
                {
                    window.location = 'https://masarmobile.com/maakom/tenders';
                } else
                {
                    //window.location = window.location+'/'+data;
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
});
function change_municipality_reports()
{
    municipality_id = $('#select_municipalities').val();
    $.post("index.php", {type: 'get_municipalitiy_reports', municipality_id: municipality_id})
            .done(function (data) {
                $('#div_main_municipality_reports').html(data)
                main_statistic()
            });
}
function change_municipality_id()
{
    val = $('#select_municipalities').val();
    $('#hdn_municipality_id').val(val);
}
function change_user_privileges()
{
    val = $('#select_user_privileges').val();
    $('#hdn_user_privileges').val(val);
}
$(document).on("click", "#save_user", function () {
    if ($("#txt_password").val() == $("#txt_re_password").val()&&inputs_validation("#form_users_data"))
    {
        var formData = new FormData($("#form_users_data")[0]);
        $.ajax({
            xhr: function () {
                var xhr = new window.XMLHttpRequest();
                $('#div_upload_status').removeClass('hide');
                xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        console.log(percentComplete);
                        $('#div_percent_status').css('width', percentComplete + '%');
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
                if (data == '1')
                {
                 
                     swal("تم الحفظ!", "تم الحفظ .", "success");
                    setTimeout(function () {
                        
                                window.location = 'https://masarmobile.com/maakom/users';
                        
                    }, 2000);

                    
                    
                } else
                {
                    //window.location = window.location+'/'+data;
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
    else if($("#txt_password").val() != $("#txt_re_password").val())
    {
     ($("#txt_password,#txt_re_password").parent()).append('<span class="spans_inputs_errors">كلمة السر غير متطابقة</span>');   
    }
});
$(document).on("click", "#save_municipality_data", function () {
    var formData = new FormData($("#form_users_data")[0]);
    $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            $('#div_upload_status').removeClass('hide');
            xhr.upload.addEventListener("progress", function (evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    percentComplete = parseInt(percentComplete * 100);
                    console.log(percentComplete);
                    $('#div_percent_status').css('width', percentComplete + '%');
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
            if (data == '1')
            {
                swal("تم الحفظ!", "تم الحفظ .", "success");
            } else
            {
                //window.location = window.location+'/'+data;
            }
        },
        error: function (request, status, error) {
            alert(request.responseText);
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
$(document).on("click", "#save_user_setting", function () {
    var formData = new FormData($("#form_users_data")[0]);
    $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            $('#div_upload_status').removeClass('hide');
            xhr.upload.addEventListener("progress", function (evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    percentComplete = parseInt(percentComplete * 100);
                    console.log(percentComplete);
                    $('#div_percent_status').css('width', percentComplete + '%');
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
            if (data == '1')
            {
                swal("تم الحفظ!", "تم حفظ الخبر.", "success");
            } else
            {
                //window.location = window.location+'/'+data;
            }
        },
        error: function (request, status, error) {
            alert(request.responseText);
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
$(document).on("click", "#save_survey", function () {
    if (inputs_validation('#tr_last_survey_titles'))
    {
        question = $('#txt_question').val();
        answer_1 = $('#txt_answer_1').val();
        answer_2 = $('#txt_answer_2').val();
        answer_3 = $('#txt_answer_3').val();
        answer_4 = $('#txt_answer_4').val();
        $.post("index.php", {type: 'add_servey', question: question, answer_1: answer_1
            , answer_2: answer_2, answer_3: answer_3, answer_4: answer_4})
                .done(function (data) {
                    if (data == "1")
                    {
                        window.location = window.location;
                    }
                });
    }
});
$(document).on("click", ".tds_edit_municipality", function () {
    id = this.id;
    $('#div_name' + id).addClass('hide');
    $('#div_edit_name_' + id).removeClass('hide');

});
$(document).on("click", ".spans_save_name", function () {
    id = this.id;
    name = $('#txt_name' + id).val();

    $.post("index.php", {type: 'edit_municipality', id: id, name: name})
            .done(function (data) {
                if (data == 1)
                {
                    swal("تم تعديل البلدية!", "", "success");

                    $('#div_name' + id).html(name);
                    $('#div_name' + id).removeClass('hide');
                    $('#div_edit_name_' + id).addClass('hide');
                }
            });


});

$(document).on("click", "#save_municipality", function () {
    municipality_name = $('#txt_municipality_name').val();
    $.post("index.php", {type: 'add_municipality', municipality_name: municipality_name})
            .done(function (data) {
                if (data == "1")
                {
                    window.location = window.location;
                }
            });
});

$(document).on("click", "#btn_print_survey", function () {
    window.print();
});
$(document).on("click", ".tds_show_surveys", function () {
    id = this.id;
    $.post("index.php", {type: 'survey_data', id: id})
            .done(function (data) {
                $('#report_statistics').html(data);


                var d1 = [];

                question = $('#question_' + id).html();
                ansewr_1 = $('#answer_1_' + id).html();
                ansewr_2 = $('#answer_2_' + id).html();
                ansewr_3 = $('#answer_3_' + id).html();
                ansewr_4 = $('#answer_4_' + id).html();

                persent_1 = $('#div_statistic_rate_1').width();
                persent_2 = $('#div_statistic_rate_2').width();
                persent_3 = $('#div_statistic_rate_3').width();
                persent_4 = $('#div_statistic_rate_4').width();
                d1.push([ansewr_1, (persent_1 / 2)]);
                d1.push([ansewr_2, (persent_2 / 2)]);
                d1.push([ansewr_3, (persent_3 / 2)]);
                d1.push([ansewr_4, (persent_4 / 2)]);

                $.plot("#div_statistic_drow", [d1], {
                    series: {
                        bars: {
                            show: true,
                            barWidth: 0.6,
                            align: "center"
                        }
                    },
                    xaxis: {
                        mode: "categories",
                        tickLength: 0
                    }
                });
            });
});
set_survey_statistic();
function set_survey_statistic()
{
    if ($(".statistic_drow").length != 0) {
        var d1 = [];
        ansewr_1 = $('.csa_1_1').html();
        ansewr_2 = $('.csa_2_1').html();
        ansewr_3 = $('.csa_3_1').html();
        ansewr_4 = $('.csa_4_1').html();

        persent_1 = $('#div_statistic_rate_1').width();
        persent_2 = $('#div_statistic_rate_2').width();
        persent_3 = $('#div_statistic_rate_3').width();
        persent_4 = $('#div_statistic_rate_4').width();

        d1.push([ansewr_1, (persent_1 / 2)]);
        d1.push([ansewr_2, (persent_2 / 2)]);
        d1.push([ansewr_3, (persent_3 / 2)]);
        d1.push([ansewr_4, (persent_4 / 2)]);

        $.plot("#div_statistic_drow", [d1], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.6,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            }
        });
    }
}
$(document).on("click", "#add_survey", function () {
    $('#tr_last_survey_titles').removeClass('tr_hide');
});
$(document).on("click", ".select_report_status", function () {
    id = this.id;
    status = $('#' + id).val();
    id = id.replace("select_", "");
    $.post("index.php", {type: 'change_report_status', id: id, status: status})
            .done(function (data) {
                if (data == '1')
                    swal("تم الحفظ!", "", "success");
            });
});
$(document).on("change", ".select_in_report_status", function () {

});
$(document).on("click", '#change_report_note', function () {
    note = $('#txt_report_note').val();
    $.post("index.php", {type: 'change_report_note', note: note})
            .done(function (data) {
                if (data == '1')
                {
                    status = $('.select_in_report_status').val();
                    $.post("index.php", {type: 'change_in_report_status', status: status})
                            .done(function (data) {
                                if (data == '1')
                                    swal("تم الحفظ!", "", "success");
                            });
                }
            });
});

$(document).on("click", '#btn_report_search', function () {
    report_status = $('#select_report_status').val();
    report_type = $('#select_report_type').val();
    report_date = $('#date_reports_search').val();
    if (report_status == '-1' && report_type == '0')
    {
        if (report_date == '')
        {
            window.location = window.location;
        }
    }
    $.post("index.php", {type: 'search_reports', report_status: report_status,
        report_type: report_type, report_date: report_date})
            .done(function (data) {
                $('#table_reports').html(data);
                $('#div_pages').hide(0);

            });
});

$(document).on("click", "#td_print_reports", function () {
    report_status = $('#select_report_status').val();
    report_type = $('#select_report_type').val();
    report_date = $('#date_reports_search').val();
    $.post("index.php", {type: 'search_reports', report_status: report_status,
        report_date: report_date, report_type: report_type})
            .done(function (data) {
                d = '<table width="100%">';
                d += data;
                d += '</table>'
                printDataReports(d)
            });

});
$(document).on("click", "#btn_news_search", function () {
    news_title = $('#txt_news_search').val();
    news_data = $('#date_news_search').val();
    $.post("index.php", {type: 'search_news', news_title: news_title,
        news_data: news_data})
            .done(function (data) {
                $('#table_news').html(data)
            });

});
$(document).on("click", "#btn_tender_search", function () {
    tender_title = $('#txt_tender_search').val();
    tender_data = $('#date_tender_search').val();
    $.post("index.php", {type: 'search_tender', tender_title: tender_title,
        tender_data: tender_data})
            .done(function (data) {
                $('#table_tenders').html(data)
            });

});

function printDataReports(data)
{
    var divToPrint = document.getElementById("table_reports");
    newWin = window.open("");
    newWin.document.write(data);
    newWin.document.close();
    newWin.focus();
    newWin.print();
}
$(function () {
    if ($("#date_news_search").length != 0) {
        $("#date_news_search").datepicker("option", "dateFormat", 'yy-mm-dd');
    }

});
$(function () {
    if ($("#date_reports_search").length != 0) {
        $("#date_reports_search").datepicker({dateFormat: 'yy-mm-dd'});
        ;
    }
});

$(document).on("click", "#div_forget_password", function () {
    swal("يرجى مراجعة قسم الـIT!", "", "success");

    swal({
        title: "نسيت كلمة السر!",
        text: "أدخل البريد الالكتروني الخاص بك",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        inputPlaceholder: "email@domail.com"
    }, function (inputValue) {
        if (inputValue === false)
            return false;
        if (inputValue === "" || !/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(inputValue)) {
            swal.showInputError("يجب إدخال بريد الكتروني");
            return false
        }
        $.post("index.php", {type: 'forget_password', email: inputValue})
                .done(function (data) {
                    if (data == '1')
                    {
                        swal("", "سيتم ارسال بريد الكتروني بكلمة المرور للبريد الالكتروني: " + inputValue, "success");
                    }
                     if (data == '0')
                    {
                        swal("", "لا يوجد بريد الكتروني مماثل في النظام: " + inputValue, "error");
                    }
                });
    });
});

$(document).on("click", ".btns_login", function () {
    login();
});
$('#txt_password').keypress(function (e) {
    var key = e.which;
    if (key == 13)  // the enter key code
    {
        login();
    }
});
$(document).on("click", "#span_logout,#li_logout", function () {

    $.post("index.php", {type: 'logout'})
            .done(function (data) {
                if (data == '1')
                {
                    window.location = 'https://masarmobile.com/maakom';
                }
            });

});
function login()
{
    user_name = $('#txt_user_name').val();
    password = $('#txt_password').val();
    $.post("index.php", {type: 'login', user_name: user_name,
        password: password})
            .done(function (data) {
                if (data == '1')
                {
                    window.location = window.location;
                } else
                {
                    swal("", "اسم المستخدم او كلمة المرور خاطئة يجرى التأكد منها!", "error");
                }
            });
}
$(document).on("mouseenter", "#div_admin", function () {
    if ($('#div_admin_list').hasClass('hide_list'))
    {
        $('#div_admin_list').removeClass('hide_list')
    }
});
$(document).on("mouseleave", "#div_admin", function () {
    if (!$('#div_admin_list').hasClass('hide_list'))
    {
        $('#div_admin_list').addClass('hide_list')
    }
});

main_statistic();
function main_statistic()
{
    if ($("#sales-chart").length != 0) {
        var donut = new Morris.Donut({
            element: 'sales-chart',
            resize: true,
            colors: ["#3c8dbc", "#f56954", "#00a65a"],
            data: [
                {label: "مغلق", value: $('#sales-chart').attr('closed')},
                {label: "قيد المعالجة", value: $('#sales-chart').attr('in_procces')},
                {label: "عالق", value: $('#sales-chart').attr('hang')}
            ],
            hideHover: 'auto'});
    }
}

function inputs_validation(perent_selector)
{
    var validation_flag = true;
    $(".spans_inputs_errors").each(function () {
        $(this).remove();
    });
    $("" + perent_selector + " [validation]").each(function () {
        var validation_arr = ($(this).attr("validation")).split(',');
        element = this;
        validation_arr.forEach(function (condition, index)
        {
            element_value = $(element).val();
            if (condition == 'empty' && !/([^\s])/.test(element_value)) {
                validation_flag = false;
                ($(element).parent()).append('<span class="spans_inputs_errors">يجب تعبئة الحقل</span>');
            } else if (condition == 'email' && !/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(element_value)) {
                validation_flag = false;
                ($(element).parent()).append('<span class="spans_inputs_errors">يجب تعبئة الحقل كبريد الكتروني</span>')
            } else if (condition == 'number' && !/^[0-9]*$/.test(element_value)) {
                validation_flag = false;
                ($(element).parent()).append('<span class="spans_inputs_errors">يجب تعبئة الحقل بأرقام فقط</span>')
            } else if (condition == 'url' && !/(http[s]?:\/\/)?[^\s(["<,>]*\.[^\s[",><]*/.test(element_value)) {
                validation_flag = false;
                ($(element).parent()).append('<span class="spans_inputs_errors">يجب تعبئة الحقل بصيغة رابط</span>')
            } else if (condition == 'date' && !/^\d{4}[\-\/\s]?((((0[13578])|(1[02]))[\-\/\s]?(([0-2][0-9])|(3[01])))|(((0[469])|(11))[\-\/\s]?(([0-2][0-9])|(30)))|(02[\-\/\s]?[0-2][0-9]))$/.test(element_value)) {
                validation_flag = false;
                ($(element).parent()).append('<span class="spans_inputs_errors">يجب تعبئة الحقل بتاريخ </span>')
            }
        });
    });
    return validation_flag;
}




drow_cycle();
function drow_cycle()
{
    /* jQueryKnob */

    $(".knob").knob({
        /*change : function (value) {
         //console.log("change : " + value);
         },
         release : function (value) {
         console.log("release : " + value);
         },
         cancel : function () {
         console.log("cancel : " + this.value);
         },*/
        draw: function () {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv)  // Angle
                        , sa = this.startAngle          // Previous start angle
                        , sat = this.startAngle         // Start angle
                        , ea                            // Previous end angle
                        , eat = sat + a                 // End angle
                        , r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor
                        && (sat = eat - 0.3)
                        && (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor
                            && (sa = ea - 0.3)
                            && (ea = ea + 0.3);
                    this.g.beginPath();
                    this.g.strokeStyle = this.previousColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });
    /* END JQUERY KNOB */
}