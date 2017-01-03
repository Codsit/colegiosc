/**
 * Created by Jhordy on 17/12/2016.
 */
$(document).ready(function () {

    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
function subirfto() {
    
} {
    if($('#tab-1').hasClass('active')){
      $('#prev').css('display','none');
    }
    $('#subir').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = new FormData($('#upload_form')[0]);
        console.log(formData);
        $.ajax({
            url:'fileUpload',
            data:formData,
            method:'Post',
            cache: false,
            contentType : false,
            processData : false,
            beforeSend : function () {
            },
            success:function (d) {
                console.log(d);
                $('#resul_img').attr('src',d);
            },
            error: function (err) {
                console.log(err+"error");
            }
        });
    });


}