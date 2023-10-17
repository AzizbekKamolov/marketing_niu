$(document).ready(function () {

    $('.deleteData').click(function () {

        var question = confirm('Bu ma\'lumot o\'chirib yuborilgach qayta tiklashning imkoni yo\'q. Davom etasizmi?');

        if (question === true) { return true; }
        else { return false; }
    });


    $('.dropify').dropify();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('.delete').click(function () {

        var question = confirm('Bu ma\'lumot o\'chirib yuborilgach qayta tiklashning imkoni yo\'q. Davom etasizmi?');

        if (question === true)
        {
            var id = $(this).data('id');

            $.ajax({
                url: "country/" + id,
                type: 'POST',
                data: {
                    id: id,
                    _method: 'DELETE'
                },
                success: function (data) {
                    if(data === true)
                    {
                        window.location.reload();
                    }
                },
                error: function () {
                    console.log('Chto to poshla ne tak');
                }
            });
        }

    });

});