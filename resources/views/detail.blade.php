<!DOCTYPE html>
<html lang="en">
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
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  
  </div>
</nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card h-100">
            <img src="{{asset('/images/'.$etudiant['image_path'])}}" alt="" class="card-img-top">
            </div>
        </div>
        <div class="col-sm-6">
            <h4>Nom: {{$etudiant['nom']}} </h4>
            <h4>Prenom : {{$etudiant['prenom']}}</h4>
            <h4>Email : {{$etudiant['email']}} </h4>
            <h4>Telephone : {{$etudiant['telephone']}} </h4>
            <br><br>
            <button class="btn btn-info"><a href="/">Go Back</a></button>
            <br><br>
        </div>
    </div>
</div>
</body>
</html>