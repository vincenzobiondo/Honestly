<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class PublicController extends Controller
{
  public function homepage(){

    $articoli = [
      [
        'id'=>1,
        'item'=> 'Divano',
        'price'=> '650',
        'brand_name'=> 'Ikea',
        'measurements'=> '300x400',
        'img'=>'/public/divanoikea.avif',
      ], 
      [
        'id'=> 2,
        'item'=> 'Comodino',
        'price'=> '200',
        'brand_name'=> 'Le Fablier',   
        'measurements'=> '20x30', 
        'img'=>'/public/comodinolefablier.jpeg'       
      ], 
      [     
        'id'=> 3,
        'item'=> 'Tavolo',
        'price'=> '400',
        'brand_name'=> 'Cassina',
        'measurements'=> '400x300',
        'img'=>'/public/tavolocassina.jpeg'
      ]
];
    
    return view('welcome',['articoli'=>$articoli]);
}

public function contactUs(){

  return view('contactUs');
}

public function submit(Request $request){
  $email = $request->input('email');
  $username = $request->input('username');
  $description = $request->input('description');
  
  Mail::to('hack99@email.it')->send(new ContactMail($email, $username, $description));

  return redirect()->back()->with('message', 'Complimenti! Il tuo messaggio è stato ricevuto, verrai ricontattato al piu presto.');
}

public function about(){

  return view('about');
}
    public function showDetails ($articoloId){
      
    $articoli = [
      [
        'id'=>1,
        'item'=> 'Divano',
        'price'=> '650',
        'brand_name'=> 'Ikea',
        'measurements'=> '300x400',
        'img'=>'/public/divanoikea.avif',
      ], 
      [
        'id'=> 2,
        'item'=> 'Comodino',
        'price'=> '200',
        'brand_name'=> 'Le Fablier',   
        'measurements'=> '20x30', 
        'img'=>'/public/comodinolefablier.jpeg'       
      ], 
      [     
        'id'=> 3,
        'item'=> 'Tavolo',
        'price'=> '400',
        'brand_name'=> 'Cassina',
        'measurements'=> '400x300',
        'img'=>'/public/tavolocassina.jpeg'
      ]
];
  foreach ($articoli as $articolo){
   
    if($articolo['id'] == $articoloId){
        
        return view('articoli.dettaglio', ['articolo'=>$articolo]);
    }
}
abort(404);
}
}

