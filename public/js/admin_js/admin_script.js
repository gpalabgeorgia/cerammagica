$(document).ready(function() {
    // Check Admin Password is correct or not
    $("#current_pwd").keyup(function() {
        let current_pwd = $("#current_pwd").val();
        // alert(current_pwd);
        $.ajax({
            type: 'post',
            url: '/admin/check-current-pwd',
            data: {current_pwd:current_pwd},
            success: function(resp) {
                // alert(resp);
                if(resp=="false") {
                    $("#chkCurrentPwd").html("<font color='red'>Текущий пароль неверный!</font>");
                }else if(resp=="true") {
                    $("#chkCurrentPwd").html("<font color='green'>Текущий пароль верный!</font>");
                }
            }, error: function() {
                alert("Произошла Ошибка!");
            }
        });
    });

    $(".updateSectionStatus").click(function() {
        let status = $(this).text();
        let section_id = $(this).attr("section_id");
        $.ajax({
            type: 'post',
            url: '/admin/update-section-status',
            data: {status:status,section_id:section_id},
            success: function(resp) {
                if(resp['status']==0) {
                    $('#section-'+section_id).html('<a class="updateSectionStatus" href="javascript:void(0)">Неактивный</a>');
                }else if(resp['status']==1) {
                    $('#section-'+section_id).html('<a class="updateSectionStatus" href="javascript:void(0)">Активный</a>');
                }
            },error: function() {
                alert('Произошла ошибка!');
            }
        });
    });
    $(".updateCategoryStatus").click(function() {
        let status = $(this).text();
        let category_id = $(this).attr("category_id");
        $.ajax({
            type: 'post',
            url: '/admin/update-category-status',
            data: {status:status,category_id:category_id},
            success: function(resp) {
                if(resp['status']==0) {
                    $('#category-'+category_id).html('<a class="updateCategoryStatus" href="javascript:void(0)">Неактивный</a>');
                }else if(resp['status']==1) {
                    $('#category-'+category_id).html('<a class="updateCategoryStatus" href="javascript:void(0)">Активный</a>');
                }
            },error: function() {
                alert('Произошла ошибка!');
            }
        });
    });
});
