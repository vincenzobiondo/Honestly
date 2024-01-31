<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementsController extends Controller
{
//     public $announcements = [
//         [
//         'id' => 1,
//         'location'=> 'Cosenza',
//         'price' => 450,
//         'genre' => 'Ringhiera',
//         'img' => '/media/cosenza.avif'
//         ],
//         [
//         'id' => 2,
//         'location'=> 'Pescara',
//         'price' => 880,
//         'genre' => 'Palazzo',
//         'img' => '/media/pescara.avif'
//         ],
//         [
//         'id' => 3,
//         'location'=> 'Milano',
//         'price' => 980,
//         'genre' => 'Ringhiera',
//         'img' => '/media/milano.avif'
//         ],
//         [
//         'id' => 4,
//         'location'=> 'Irkutsk',
//         'price' => 350,
//         'genre' => 'Palazzine',
//         'img' => '/media/irkutsk.avif'
//         ],
// ];
    public function index(){
        $announcements = Announcement::all();
        return view('announcements.index', 
        // ['announcements'=>$announcements]);
        compact('announcements') //la stessa coasa della riga sopra
    );
    }

    public function show($id){ //dependancy injection
      
        // (Announcement $announcement)



        // $announcements = Announcement::where('id',$id)->get();//chiamata al database che mi ritornera collection filtrata per la richiesta fatta, il metodo get invece ci permette di recuperare l'oggetto che ci interessa dopo aver fatto la chiamata al database

        $announcements = Announcement::find($id);//con FIND mi ritornerà uno specifico dato in questo caso un annuncio specifico
        // dd($announcements);
        return view ('announcements.show',
        // ['announcement'=>$announcement] 
        compact('announcements')
    );
    }

    public function create(){

        return view('announcements.create');
    }

    public function store(AnnouncementRequest $request){
    
        // //in questo modo mi sono recuperato tutte le info che l'utente ha inserito nel form e le ho assegnate a una variabile ($location_request)

        $item_request = $request->input('item');
        $price_request = $request->input('price');
        $brand_name_request = $request->input('brand_name');
        $measurements_request = $request->input('measurements');
        $img_request = $request->file('img');
        
        //qui utilizziamo il metodo file xk il file da recuperare è un UploadedFile
        // //2 modi per creare i record nei database
        // //METODO SBAGLIATO (piccola bugia)
        // $announcement = new Announcement();
        // $announcement->location = $location_request;
        // //sto attribuendo al mio modello Announcement come attributo location il dato che ha inserito l'utente nel form
        // $announcement->price = $price_request;
        // $announcement->genre = $genre_request;

        // $announcement->save();//qui chiedo a Laravel di salvare questo modello come record nel database

        // return redirect(route('announcements.create'))->with('message','Grazie per aver inserito un annuncio');
        // }

        //METODO CORRETTO - MASS ASSIGNEMENT (funziona solo se in Announcement.php c'è il $fillable)
        $announcement = Announcement::create(
            ['item'=>$item_request,
             'price'=>$price_request,
             'brand_name'=>$brand_name_request,
             'measurements'=>$measurements_request,
             'img'=> $img_request->store('public/img')//il metodo store salva il file che l'utente sta caricando dal form, nella cartella storage/app. con il parametro reale che passo al metodo (in questo caso 'public/img') gli sto specificando di salvarlo in questo percorso => storage/app/public/img
             ]
        );

        return redirect(route('announcements.create'))->with('message','Grazie per aver inserito un annuncio');
    }
}