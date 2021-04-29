<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>School project</title>
    </head>
<body>
    <div class="container">
    <div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('etudiant.create')}}">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">About</a>
      </li>
    </ul>
  
  </div>
</nav>
</div>
        <h1>Create a student</h1>
        <form action="{{ route('etudiant.store') }}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="row mb-3">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nom :</label>
            <div class="col-sm-5">
              <input type="text" name="nom" class="form-control form-control-lg" id="colFormLabelLg" placeholder="name">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Prenom :</label>
            <div class="col-sm-5">
              <input type="text" name="prenom" class="form-control form-control-lg" id="colFormLabelLg" placeholder="last name">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email :</label>
            <div class="col-sm-5">
              <input type="email" name="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="give your email">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Téléphone :</label>
            <div class="col-sm-5">
              <input type="text" name="telephone" class="form-control form-control-lg" id="colFormLabelLg" placeholder="mobile phone">
            </div>
          </div>
          <div class="row">
            <label for="file" class="col-sm-2 col-form-label col-form-label-lg">Upload Photo :</label>
            <div class="col-sm-5">
              <input type="file" name="image" class="form-control form-control-lg" id="colFormLabelLg" placeholder="picture">
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="Create"/>
        </form>
    </div>
</body>
</html>