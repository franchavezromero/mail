<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="row contactfoot d-flex justify-content-center" style="margin:auto; padding:5%">
    <div class="col-md-8">
        <h2 class="text-center">Contáctanos</h2><br><br>
        <form id="mail" method="post">
            <div class="form-row">
                <div class="col-sm-4">
                    <input type="text" class="form-control mt-4" placeholder="nombre" id="name" name="name">
                </div>
                <div class="col-sm-4">
                    <input type="tel" class="form-control mt-4" placeholder="teléfono" id="tel" name="tel">
                </div>
                <div class="col-sm-4">
                    <input type="email" class="form-control mt-4" placeholder="e-mail" id="email" name="email">
                </div>
            </div>
            <div class="form-row" style="">
                <div class="col-sm-8 mt-4">
                    <textarea class="form-control" id="comentario" name="comentario" placeholder="comentario"rows="5" maxlength="100"></textarea>
                </div>
                <div class="col-sm-4 text-center"style="margin:auto">
                    <button type="submit" class="btn btn-primary enviar">Enviar</button>
                </div>
            </div>
        </form><br>

            <!-- email response message -->

            <div class="row justify-content-center" id="hide">

                <div id="mail-response"></div>

            </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    $(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
    });





// send email.............



$(function (e) {

$("#mail").on('submit',(function(e) {
    console.log('submitted');
    e.preventDefault();

        $.ajax({

            url: "mail.php",

            type: "POST",

            data:  new FormData(this),

            contentType: false,

            cache: false,

            processData:false,

            success: function(data)

                {
                    console.log(data);
                    $("#mail-response").html(data);
            
                },

            error: function(err)

                {
                    console.log(err);
                }

        });

    $("#name").val("");

    $("#tel").val("");

    $("#email").val("");

    $("#comentario").val("");

}));

});


</script>
</body>
</html>