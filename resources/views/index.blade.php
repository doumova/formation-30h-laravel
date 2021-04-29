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
        <a class="nav-link disabled" href="#">About</a>
      </li>
    </ul>
  </div>
</nav>
</div>
    <div class="container mt-3">
    @if ($message = Session::get('success'))
<div class="alert alert-success">
  {{$message}}
</div> 
@endif
        <table class="table table-striped">
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">email</th>
              <th scope="col">telephone</th>
              <th scope="col">photoprofil</th>
              <th scope="col">Action</th>


            </tr>
          @foreach ($etudiants as $etudiant)
            <tr>
              <th scope="row">{{$etudiant['id']}}</th>
              <td>{{$etudiant['nom']}}</td>
              <td>{{$etudiant['prenom']}}</td>
              <td>{{$etudiant['email']}}</td>
              <td>{{$etudiant['telephone']}}</td>
              <td><img src="{{asset('/images/'.$etudiant['image_path'])}}" class="img-thumbnail" width="80px";height="80px"/></td>
              <td>
                <a class="btn btn-primary" href="{{route('etudiant.show',$etudiant['id'])}}">Detail</a>
                <a class="btn btn-info" href="{{route('etudiant.edit',$etudiant['id'])}}">Edit</a>
                <a class="btn btn-danger" href="{{route('etudiant.destroy',$etudiant['id'])}} ">Delete</a>
              </td>   
            </tr>

          @endforeach
          
        </table>
    
    </div>
</body>
</html>