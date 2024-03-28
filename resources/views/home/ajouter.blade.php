<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Ajouter un Event</h1>
      <hr>
      @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
</ul>


      <form action="/ajouter/traitement" methode="POST" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label for="Nom_event" class="form-label">Nom Event</label>
    <input type="text" class="form-control" id="Nom_event" name="Nom_event">
  </div>
  <div class="mb-3">
    <label for="Description_event" class="form-label">Description Event</label>
    <textarea class="form-control" id="Description_event" name="Description_event" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="Date_event" class="form-label">Date Event</label>
    <input type="date" class="form-control" id="Date_event" name="Date_event">
  </div>
  
  <div class="mb-3">
    <label for="image" class="form-label">image</label><br>
    <input type="file" class="image" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter un Event</button>
  <br><br>
  <a href="/home" class="btn btn-danger">Retour à la liste des events</a>

</form>


      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
