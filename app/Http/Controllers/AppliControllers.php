<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Niveau;
use App\Models\Cycle;
use App\Models\Filier;
use App\Models\Secretaire;
use App\Models\etudiant;
class AppliControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('accueil');
    }
    public function connec()
    {
       return view('connexion');
    }

    public function inscrir()
    {
       return view('inscriptionad');
    }

    public function admi()
    {
       return view('admin');
    }
    public function secret()
    {
       return view('inscriptionsec');
    }
    public function etudiant()
    {
        $cycles = Cycle::all();
        $filiers = Filier::all();
        $niveaux = Niveau::all();
        return view('ajouteretu',[
            'cycles' => $cycles,
            'filiers' => $filiers,
            'niveaux' => $niveaux,
        ]);
    }

    public function etudee()
    {
       return view('ajoueretudian');
    }

    public function secretair()
    {
       return view('secretaire');
    }
    public function secretai()
    {
       return view('connecsecretaire');
    }

    //enregistrement dans la base de données 



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Admin $admin, Request $request)
    {
      $admin = new Admin();
      $admin->email = $request->input('email');
      $admin->email_verified_at = null;
      $admin->telephone = $request->input('telephone');
      $admin->password = bcrypt($request->input('password'));
      $admin->save();
      return redirect()->route('insc')->with('status', 'Données enregistrées avec succès.');
    }

    public function stor(Secretaire $secrtaire, Request $request)
    {
        $secrtaire = new Secretaire();
        $secrtaire->name = $request->input('name');
        $secrtaire->email = $request->input('email');
        $secrtaire->email_verified_at = null;
        $secrtaire->telephone = $request->input('telephone');
        $secrtaire->password = bcrypt($request->input('password'));
        $secrtaire->save();
        return redirect()->back()->with('success', 'Données enregistrées avec succès. !');
    }


    public function connexion(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = $request->filled('remember');
        if (Auth::guard('admin')->attempt($credentials)){
            // Authentification réussie
            return redirect()->route('administ')->with('success', 'Connexion réussie !');
        } else {
            // Échec de l'authentification
            return redirect()->back()->with('error', 'Identifiants de connexion invalides. !'); 
        }
    }

    public function connexionsec(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::guard('secretaire')->attempt($credentials)){
            // Authentification réussie
            return redirect()->route('secretaire')->with('success', 'Connexion réussie !');
        } else {
            // Échec de l'authentification
            return redirect()->back()->with('error', 'Identifiants de connexion invalides. !'); 
        }
    }


    public function niveau(Niveau $niveau, Request $request)
    {
        $niveau = new Niveau();
        $niveau->libelle_filiere = $request->input('libelle_filiere');
        $niveau->save();
        return redirect()->back()->with('success', 'Données enregistrées avec succès. !');
    }

    
    public function cylcle (Cycle $cycle, Request $request)
    {
        $cycle = new Cycle();
        $cycle->libelle_cycle = $request->input('libelle_cycle');
        $cycle->save();
        return redirect()->back()->with('success', 'Données enregistrées avec succès. !');
    }

    public function filier(Filier $filiers, Request $request)
    {
        $filiers = new Filier();
        $filiers->libelle_filiere = $request->input('libelle_filiere');
        $filiers->save();
        return redirect()->back()->with('success', 'Données enregistrées avec succès. !');
    }



    // public function creat()
    // {
        
    // }


    //enregistrement de letudiant 

    public function etudian(etudiant $etudiant, Request $request)
{
    $etudiant = new etudiant();
    $etudiant->matricule = $request->input('matricule');
    $etudiant->nom = $request->input('nom');
    $etudiant->prenom = $request->input('prenom');
    $etudiant->date_naissace = $request->input('date_naissace');
    $etudiant->email = $request->input('email');
    $etudiant->sexe = $request->input('sexe');
    $etudiant->nationalite = $request->input('nationalite');
    $etudiant->filiere = $request->input('filiere');
    $etudiant->cycle = $request->input('cycle');
    $etudiant->niveau_detude = $request->input('niveau_detude');
    $etudiant->annee_accademique = $request->input('annee_accademique');
   
    if ($request->hasFile('image')) {
        $etudiantPath = $request->file('image')->store('image', 'public');
        $etudiant->image = $etudiantPath;
    } else {
        $etudiant->image = 'image'; // Fournir une valeur par défaut pour le champ image
    }
    

    // $etudiant->image = $request->input('image');
    $etudiant->save();

    // Rediriger ou effectuer d'autres actions après l'enregistrement

    return redirect()->back()->with('success', 'Données enregistrées avec succès');
}




    public function deconnexion()
    {
            Auth::logout();
            return redirect()->route('accuiel') ;// Redirige vers la page d'accueil ou toute autre page après la déconnexion
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showAjouterEtuForm()
{
    $filiers = Filiere::all(); // Fetch all the filieres from the database

    

$cycles = Cycle::all(); // Assuming you have a model named Cycle for academic cycles

    return view('ajouteretu', compact('filiers', 'cycles')); // Pass the $filiers and $cycles variables to the view
}
}
