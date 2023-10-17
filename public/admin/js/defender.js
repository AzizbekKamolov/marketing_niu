
    $.validate({
        modules : 'date,file,location',
        onValidate: function(){

            delayBeforeFire(function(){
                app.spy();
            },100);

        }
    });


$(document).ready(function () {
    $('.dynamic').change(function(){
        if($(this).val()!='')
        {
            var select = $(this).attr("id");
            var value = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "/backoffice/teacher/fetch/"+value,
                method: "GET",
                data: {
                    select: select,
                    value: value,
                    _token: _token,
                    dependent: dependent
                },
                success: function(result){
                    $('#area').html(result);
                    $('#list').addClass('form-control');
                }
            })
        }
    });

    $('#passwordshower').click(function(){
        var url = $(this).data('url');
        var id = $(this).data('idec');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "/backoffice/"+url+"/fetch/"+id,
            method: "GET",
            data: {
                id: id,
                _token: _token,
            },
            success: function(result){
                document.getElementById('passwordshower').style.display="none"
                document.getElementById('item_v').innerHTML = result;
            }
        })
    });
    $('#passwordshower2').click(function(){
        var url = $(this).data('url');
        var id = $(this).data('idec');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "/backoffice/"+url+"/fetch/"+id,
            method: "GET",
            data: {
                id: id,
                _token: _token,
            },
            success: function(result){
                document.getElementById('newpassword').value = result;
                document.getElementById("newpassword").readOnly = false;
                document.getElementById("newpassword").type = 'text';
                document.getElementById('passwordshower2').style.display="none"
            }
        })
    });
    $('#region_id').change(function(){
        if($(this).val()!='')
        {
            var text = $('#region_id option:selected').text();
            var short = "";
            short = text.substr(0,3);
            if(text=="Qashqadaryo viloyati")
                short = text.substr(0,4);
            if(text=="Surxondaryo viloyati")
                short = text.substr(0,4);
            if(text=="Toshkent shahri")
                short = text.substr(0,4)+"_sh";
            if(text=="Toshkent viloyati")
                short = text.substr(0,4)+'_v';
            document.getElementById('login').value = short+"_";

        }
    })
})

function password_generator( len ) {
    var length = (len)?(len):(10);
    var string = "abcdefghijklmnopqrstuvwxyz"; //to upper
    var numeric = '0123456789';
    var punctuation = '!@#$&*_.=';
    var password = "";
    var character = "";
    var crunch = true;
    while( password.length<length ) {
        entity1 = Math.ceil(string.length * Math.random()*Math.random());
        entity2 = Math.ceil(numeric.length * Math.random()*Math.random());
        entity3 = Math.ceil(punctuation.length * Math.random()*Math.random());
        hold = string.charAt( entity1 );
        hold = (entity1%2==0)?(hold.toUpperCase()):(hold);
        character += hold;
        character += numeric.charAt( entity2 );
        character += punctuation.charAt( entity3 );
        password = character;
    }
    document.getElementById('password').value = password;
}
function studenID_generator()
{
    var id = "ST"+Math.floor((Math.random()*(8076543+1))+1034567);
    document.getElementById('student_id').value = id;
}
function new_password_generator( len ) {
    var length = (len)?(len):(10);
    var string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMONOPQRSTUVWXYS"; //to upper
    var numeric = '0123456789';
    var punctuation = '!@#$%^&*()_+}{[]:;?><.=';
    var password = "";
    var character = "";
    var crunch = true;
    while( password.length<length ) {
        entity1 = Math.ceil(string.length * Math.random()*Math.random());
        entity2 = Math.ceil(numeric.length * Math.random()*Math.random());
        entity3 = Math.ceil(punctuation.length * Math.random()*Math.random());
        hold = string.charAt( entity1 );
        hold = (entity1%2==0)?(hold.toUpperCase()):(hold);
        character += hold;
        character += numeric.charAt( entity2 );
        character += punctuation.charAt( entity3 );
        password = character;
    }
    document.getElementById("newpassword").readOnly = false;
    document.getElementById("newpassword").type = 'text';
    document.getElementById('newpassword').value = password;
}


