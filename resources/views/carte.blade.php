
@extends('./layout/header')

@section('page-content')


<style>
    .active {
      color: red !important; /* Changer la couleur ici */
    }
  </style>
<div class="row">
  <div class="col-3">
    <div class="card">
       <div id="le">
           | 
         </div>
        <div id="be">
         Bienvenue sur l'appli de <br>
         Université NAZI/BONI 
       </div>

       <div class='d-flex mt-5' >
        <img src="{{ asset('image/accueil.jpg')}}" alt="" id='im1'>
        <a id="a2"  href="{{route('administ')}}">Accueil</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/secretaire.jpg')}}" alt="" id='im1'>
        <a id="a2"  href="{{route('admin')}}">Sécretaire</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/etudiant.jpg')}}" alt="" id='im1'>
        <a id="a2" class='text-primary' href="">Etudiant</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/carte.webp')}}" alt="" id='im1'>
        <a id="a2"  href="">Carte</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/Gmail.png')}}" alt="" id='im1'>
        <a id="a2"  href="">Envoyer un mail</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/deconnexion.png')}}" alt="" id='im1'>
        <a id="a2"  href="">Deconnexion</a>
       </div>       
    </div>
   </div> 
   
   
     <div class="col-9">
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     Ajouter
   </button>

   <table class="container table table-responsive mt-3 table-bordered border-dark">
   <tr class="table-dark">
        <th>N</th>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Clycle</th>
        <th>Niveau</th>
        <th>Année </th>
        <th>Action</th>
    </tr>
    </table>
     </div>
 </div>
    


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card">
          <div class="card-body " >
              <h3 class="text-center">Inscrivez-vous</h3>
                    <form action="" class='form'>
                        <div class='form-group  mt-3'>
                            <label for="">Matricule</label>
                            <input type="text" class="form-control" value="{{ old('nom') }}" required >
                        </div>
                        <div class='form-group  mt-3'>
                            <label for="">Nom</label>
                            <input type="text" class="form-control" value="{{ old('nom') }}" required >
                        </div>
                        <div class='form-group mt-3'>
                            <label for="">Prenom</label>
                            <input type="text" class="form-control " value="{{ old('prenom') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Filiere</label>
                            <input type="text" class="form-control " value="{{ old('Filiere') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">cycle</label>
                            <input type="text" class="form-control " value="{{ old('cycle') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Niveau d'étude</label>
                            <input type="text" class="form-control " value="{{ old('niveau_detude') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Année académique</label>
                            <input type="date" class="form-control " value="{{ old('annee_accademique') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                             <label for="photo">Photo :</label>
                            <input type="file" class="form-control " id="photo" name="photo" accept="image/*" required>
                        </div>

                        <button type="submit" class='btn btn-dark mt-3'>Inscrire</button>
                    </form>
            </div>
       </div>
     </div>
  </div>
</div>
@endsection