
@extends('./layout/header')

@section('page-content')


<style>
    .active {
      color: red !important; /* Changer la couleur ici */
    }
  </style>
<div class="row">
 <div class="card col-3">
    <div class="card-body">
       <div id="le">
           | 
         </div>
        <H1 id="be">
         MENU
       </H1>

       <div class='d-flex mt-5' >
        <!-- <img src="{{ asset('image/accueil.jpg')}}" alt="" id='im1'> -->
        <a id="a2"  href="{{route('administ')}}">Accueil</a>
       </div>

       <div class='d-flex mt-3'>
        <!-- <img src="{{ asset('image/secretaire.jpg')}}" alt="" id='im1'> -->
        <a id="a2" class='text-primary' href="">Sécretaire</a>
       </div>

       <div class='d-flex mt-3'>
        <!-- <img src="{{ asset('image/etudiant.jpg')}}" alt="" id='im1'> -->
        <a id="a2"  href="{{route('etude')}}">Etudiant</a>
       </div>

       <div class='d-flex mt-3'>
        <!-- <img src="{{ asset('image/3.png')}}" alt="" id='im1'> -->
        <a id="a2"  href="">Carte</a>
       </div>

       <div class='d-flex mt-3'>
        <!-- <img src="{{ asset('image/Gmail.png')}}" alt="" id='im1'> -->
        <a id="a2"  href="">Envoyer un mail</a>
       </div>

       <div class='d-flex mt-3'>
        <!-- <img src="{{ asset('image/deconnexion.png')}}" alt="" id='im1'> -->
        <a id="a2"  href="">Deconnexion</a>
       </div>        
    </div>
   </div>


   <div class="col-9">
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     Ajouter
   </button>

   <table class="container table table-responsive mt-3">
   <tr class="table table-dark">
        <th>Nom</th>
        <th>Email</th>
        <th>Numéro</th>
        <th>Action</th>
    </tr>
    </table>
       
   </div>      
</div>




<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
           <div class="card">
            <div class="card-body " >
              <h3 class="text-center">Inscrire une Sécretaire</h3>
                 <h5 class="text-center">Veuillez bien entrer les identifiants</h5>
                    <form action="{{route('secre')}}" class='form' method='post'>
                           @method('post')
                           @csrf
                    <div class='form-group  mt-3'>
                            <label for="">Nom</label>
                            <input type="text" name='name' class="form-control" value="{{ old('email') }}" required >
                        </div>

                        <div class='form-group  mt-3'>
                            <label for="">Email</label>
                            <input type="email" name='email' class="form-control" value="{{ old('email') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Numéro</label>
                            <input type="text" name='telephone' class="form-control " value="{{ old('numeron') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Mot de passe</label>
                            <input type="pasword" name='password' class="form-control " value="{{ old('pasword') }}" required >
                        </div>

                        <button type="submit" class='btn btn-dark mt-3'>Inscrire</button>
                    </form>
             </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection