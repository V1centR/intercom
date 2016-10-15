/* 
 * RWS JS Functions
 */;
var palavraBuscada = "";

function PHP() {
}
;
PHP.prototype = {
    ajax: function(dados, func) {
        alert('query ->' + JSON.stringify(dados));
        $("#loader-master").css("visibility", "visible");
        $("#loader-master").css("opacity", "1");
        $("#loader-master").css("transition-delay", "0");
        jQuery.ajax({
            type: "POST",
            url: "/home/login",
            dataType: "myData",
            //data: "dados=" + JSON.stringify(dados),
            success: function(result) {
                $("#loader-master").css("transition-delay", "0");
                $("#loader-master").css("visibility", "hidden");
                $("#loader-master").css("opacity", "0");
                $("#loader-master").css("transition", "visibility 0s linear 0.3s,opacity 0.3s linear");
                func(result);
                //alert('sucess ->' + JSON.stringify(result));
                //alert('sucess ->' + result.responseText);
            },
            error: function(result) {
                alert('error ->' + JSON.stringify(result));
                $("#loader-master").css("transition-delay", "0");
                $("#loader-master").css("visibility", "hidden");
                $("#loader-master").css("opacity", "0");
                $("#loader-master").css("transition", "visibility 0s linear 0.3s,opacity 0.3s linear");
                if (result.status === 200 && result.statusText === "OK")
                {
                    func(result.responseText);
                }
                else
                {
                    //alert(JSON.stringify(result));
                    alert("Ocorreu um erro durante a requisição, tente novamente daqui alguns minutos. - " + result.status);
                }
            }
        });
    }
};

function RWSModal() {
}
;
RWSModal.prototype = {
    load: function(c, m, d) {
        var dados = new Object();
        dados.space = "Application/Controller";
        dados.act = c;
        dados.metodo = m;
        dados.vars = d;
        dados.modal = "S";
        new PHP().ajax(dados, onLoadRWSModalComplete);
    }
};
function onLoadRWSModalComplete(result) {
    $(".modal-ativo").modal("hide");
    $(".modal-backdrop").remove();
    if (!$("#" + result.boxPai).length) {
        $("#modal-master").append('<div id="' + result.boxPai + '"></div>');
    }
    $("#" + result.boxPai).html(result.box);
    $("#" + result.boxNome).modal('show');
}

function RWSCall() {
}
;
RWSCall.prototype = {
    load: function(d, func) {
        var dados = new Object();
        dados.space = "";
        dados.act = "AdminController";
        dados.metodo = "ajax";
        dados.vars = d;
        dados.modal = "N";
        new PHP().ajax(dados, function(result) {
            func(result);
        });
    }
};

function inherit(p)
{
    if (p == null)
        throw TypeError();
    if (Object.create)
        return Object.create(p);
    var t = typeof p;
    if (t !== "object" && t !== "function")
        throw  TypeError();
    function f() {
    }
    ;
    f.prototype = p;
    return new f();
}

function roundNumber(rnum) {
    return Math.round(rnum * Math.pow(10, 2)) / Math.pow(10, 2);
}

function float2moeda(num) {
    x = 0;

    if (num < 0) {
        num = Math.abs(num);
        x = 1;
    }
    if (isNaN(num))
        num = "0";
    cents = Math.floor((num * 100 + 0.5) % 100);

    num = Math.floor((num * 100 + 0.5) / 100).toString();

    if (cents < 10)
        cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.'
                + num.substring(num.length - (4 * i + 3));
    ret = num + ',' + cents;
    if (x == 1)
        ret = ' - ' + ret;
    return ret;
}

function moeda2float(moeda) {
    moeda = moeda.replace(".", "");
    moeda = moeda.replace(",", ".");
    return parseFloat(moeda);
}

function verStringVazia(item)
{
    var retorno = true;
    var chars = item.toString();
    var vazio = 0;

    for (var i = 0; i < chars.length; i++)
    {
        if (chars.charAt(i) == ' ')
        {
            vazio++;
        }
    }

    if (chars.length == vazio || chars.length == 0)
    {
        retorno = false;
    }

    if (item == '')
    {
        retorno = false;
    }

    return retorno;
}

jQuery(document).ready(function() {
    $(".btn-logar").click(function(e) {
        new RWSModal().load("/home/logar", "logarPortalRequest", {portal: "S"});
    });
    /*
    $(".btn-esqueci").click(function(e) {
        new RWSModal().load("Cadastro", "esqueciSenha", {email: $("#email").val()});
    });
    */
});

// convert bytes into friendly format
function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB'];
    if (bytes == 0)
        return 'n/a';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
}
;

// check for selected crop region
function checkForm() {
    if (parseInt($('#w').val()))
    {
        $('#loader-img').html('<img src="images/assets/loader.gif" alt="Enviando..."/> Enviando...');
        $('#upload_form').ajaxForm({
            target: '#preview'
        }).submit();
        return false;
    }
    $('.error').html('Por favor marque o local da imagem e clique em Upload').show();
    return false;
}
;

// update info by cropping (onChange and onSelect events handler)
function updateInfo(e) {
    $('#x1').val(e.x);
    $('#y1').val(e.y);
    $('#x2').val(e.x2);
    $('#y2').val(e.y2);
    $('#w').val(e.w);
    $('#h').val(e.h);
}
;

// clear info by cropping (onRelease event handler)
function clearInfo() {
    $('.info #w').val('');
    $('.info #h').val('');
}
;

function fileSelectHandler() {

    // get selected file
    var oFile = $('#image_file')[0].files[0];

    // hide all errors
    $('.error').hide();

    // check for image type (jpg and png are allowed)
    var rFilter = /^(image\/jpeg|image\/png)$/i;
    if (!rFilter.test(oFile.type)) {
        $('.error').html('Selecione uma imagem valida (jpg e png são permitidos)').show();
        return;
    }

    // check for file size
    if (oFile.size > 5000 * 1024) {
        $('.error').html('Imagem muito grande, selecione uma imagem menor (5mb é o permitido).').show();
        return;
    }

    // preview element
    var oImage = document.getElementById('preview');

    // prepare HTML5 FileReader
    var oReader = new FileReader();
    oReader.onload = function(e) {

        // e.target.result contains the DataURL which we can use as a source of the image
        oImage.src = e.target.result;
        oImage.onload = function() { // onload event handler

            // display step 2
            $('.step2').fadeIn(500);

            // display some basic image info
            var sResultFileSize = bytesToSize(oFile.size);
            $('#filesize').val(sResultFileSize);
            $('#filetype').val(oFile.type);
            $('#filedim').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);

            // Create variables (in this scope) to hold the Jcrop API and image size
            var jcrop_api, boundx, boundy;

            // destroy Jcrop if it is existed
            if (typeof jcrop_api != 'undefined')
                jcrop_api.destroy();

            // initialize Jcrop
            $('#preview').Jcrop({
                minSize: [32, 32], // min crop size
                maxSize: [558, 600],
                aspectRatio: 1, // keep aspect ratio 1:1
                bgFade: true, // use fade effect
                bgOpacity: .3, // fade opacity
                onChange: updateInfo,
                onSelect: updateInfo,
                onRelease: clearInfo,
                setSelect: [0, 0, 558, 558]
            }, function() {

                // use the Jcrop API to get the real image size
                var bounds = this.getBounds();
                boundx = bounds[0];
                boundy = bounds[1];

                // Store the Jcrop API in the jcrop_api variable
                jcrop_api = this;
            });
        };
    };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
}

jQuery(document).ready(function() {
    $(".jcarousel-skin-pika").PikaChoose({carousel: true, carouselVertical: true});
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 3500
        });
    });
});