<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>exercisephp</title>
  </head>

  <body>
    <header>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">fly smooth skyline</h1>
    <img src="assets/agences.jpg" />
    <p class="lead">.</p>
  </div>
</div>
</header>

<section>
    <h1>Agence de voyage</h1>
    <form action="data.php" method="post" class="col-10">
    <div class="form-group row">
      <label for="civil" class="col-sm-3 col-form-label">Civilité </label>
  <label class="my-1 mr-2" for="FormCustomSelect"></label>
  <select class="custom-select my-1 mr-sm-1" id="inlineFormCustomSelectPref">
    <option class="col" selected>Choose...</option>
    <option value="1">Mme</option>
    <option value="2">Mr</option>
  </select>
      
    </div>
    <div class="form-group row">
      <label for="inputnom3" class="col-sm-2 col-form-label">Nom</label>
      <div class="col-sm-3">
        <input type="nom" class="form-control" id="inputnoml3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputprenom3" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-3">
      <input type="prenom" class="form-control" id="inputprenom3">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">voyage</legend>
      <div class="col-sm-10">
        <div class="form-check">
       
            
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Exercusion</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
             </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="suite" class="btn btn-primary">suite</button>
    </div>
  </div>
</form>
</section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>