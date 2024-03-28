<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Événements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.0/font/bootstrap-icons.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40 !important;
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
            font-size: 24px;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: bold;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            background-color: #fff;
            border-radius: 10px;
        }
        .table th,
        .table td {
            border: none;
        }
        .table thead th {
            background-color: #343a40;
            color: #fff;
        }
        .btn-primary,
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #007bff !important;
            border-color: #007bff !important;
        }
        .btn-danger,
        .btn-danger:hover,
        .btn-danger:focus {
            background-color: #dc3545 !important;
            border-color: #dc3545 !important;
        }
        .table-primary td {
            background-color: #f8d7da !important;
        }
        .modal-content {
            border-radius: 10px;
        }
        .modal-header {
            background-color: #343a40;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .modal-footer {
            border-radius: 0 0 10px 10px;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Université Ucd</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Département</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Administration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recherche</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
    <div class="row"> <!-- ==ROW REGROUPE LOGO + BANNER=-->
        <!-- ====================LOGO A COTE DU BANNER======================-->
        <div class="col-lg-4 hidden-xs" style="background-color:; height: 234px;">
            <center>
                <table border="0"> <!-- Corrected attribute name to border -->
                    <tr><td style="height: 20px;"></td></tr>
                    <tr><td><img src="logo.png" alt="Logo"></td></tr>
                    <tr><td><img src="slide13.jpg" alt="Banner"></td></tr>
                </table>
            </center>
        </div>
    </div>
</div>

    </div>
</div>

            <div class="col-lg-8" >
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:325px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="slides" style="cursor:default;position:relative; margin:0 auto; top:0px;left:0px;width:980px;height:325px;overflow:hidden;">
            
<div> <img data-u="image" src="public/img-slide/slide27.jpg" /></div><div> <img data-u="image" src="slide26.jpg" /></div><div><a href="http://www.anapec.org/" target="_blank"> <img data-u="image" src="public/img-slide/slide21.jpg" /></a></div><div> <img data-u="image" src="public/img-slide/slide14.jpg" /></div><div> <img data-u="image" src="public/img-slide/slide13.jpg" /></div>            
            
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>     </div> <!-- ==FINcol-lg-8 =-->
    </div>
        </div>  <!-- ==FIN ROW REGROUPE LOGO + BANNER=-->
         </div>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Événements</h1>
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="/ajouter" class="btn btn-primary mb-3">Ajouter un Événement</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr @if($event->pinned) class="table-primary" @endif>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->Nom_event }}</td>
                            <td>{{ $event->Description_event }}</td>
                            <td>{{ $event->Date_event }}</td>
                            <td><img src="{{ asset('storage/app/public/events/' . $event->image) }}" alt="Event Image"></td>
                            <td>
                                <a href="/update_event/{{ $event->id }}" class="btn btn-sm btn-primary me-2">Modifier</a>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteEvent{{ $event->id }}">Supprimer</button>
                            </td>
                        </tr>
                        @if($event->deleted)
                            <tr>
                                <td colspan="5" class="text-danger"><i class="bi bi-exclamation-triangle-fill"></i> Cet événement a été supprimé</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Delete Event Modals -->
    @foreach($events as $event)
        <div class="modal fade" id="deleteEvent{{ $event->id }}" tabindex="-1" aria-labelledby="deleteEventLabel{{ $event->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteEventLabel{{ $event->id }}">Confirmation de Suppression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr de vouloir supprimer cet événement ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <form action="/delete_event/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

