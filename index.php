<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Clients</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">Generador de KATA</div>
                    <div class="card-body">
                        <div id="error" class="alert alert-danger" hidden>
                        </div>
                        <form id="form_kata" action="javascript:generaKata()" method="POST">
                            <div class="form-row">
                                <div class="col-sm-5">
                                    <input type="text" id="birdName" name="birdName" class="form-control" placeholder="Bird Name" required>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary">Generar</button>
                                </div>
                            </div>
                        </form>
                        <div id="success" class="alert alert-success" role="alert" hidden>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript">
        function generaKata(){
            $('#error').attr('hidden', true);
            $('#success').attr('hidden', true);

            $.post("kata.php", {birdName: $('#birdName').val()}, 
		        function(response){
                    console.log(response);
                    let jsonResponse = JSON.parse(response);
                    if (jsonResponse.success == true) {
                        $('#success').html(jsonResponse.message);
                        $('#success').attr('hidden', false);
                    } else {
                        $('#error').html(jsonResponse.message);
                        $('#error').attr('hidden', false);
                    }
                }
            );
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>