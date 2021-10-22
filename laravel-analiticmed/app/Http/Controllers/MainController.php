<?php

namespace App\Http\Controllers;

use App\Models\ServiciiBi;
use App\Models\ServiciiBlood;
use App\Models\ServiciiGen;
use App\Models\ServiciiImun;
use App\Models\Servicii;
use App\Models\FeedbackModel;
use Illuminate\Http\Request;

class MainController extends Controller {
    
    public function home() {
        return view('main');
    }

    public function servicii() {
        $serviciis = new Servicii();
        $servicii_imuns = new ServiciiImun();
        $servicii_gens = new ServiciiGen();
        $servicii_bloods = new ServiciiBlood();
        $servicii_bis = new ServiciiBi();
        //dd($servicii_gens->all());
        return view('servicii', ['serviciis' => $serviciis->all(), 'servicii_imuns' => $servicii_imuns->all(), 'servicii_gens' => $servicii_gens->all(), 'servicii_bloods' => $servicii_bloods->all(), 'servicii_bis' => $servicii_bis -> all()]);
        
    }

    public function feed() {
        return view('feed');
    }

    public function view() {
        $reviews = new FeedbackModel();
        return view('view', ['reviews' => $reviews->all()]);
        
    }

    public function feedback_check(Request $request) {
       $valid = $request->validate([
           'email' => 'required|max:100',
           'user' => 'required|min:4|max:100',
           'message' => 'required|min:15|max:500'
           
       ]); 


       $review = new FeedbackModel();
       $review->email = $request->input('email');
       $review->user = $request->input('user');
       $review->message = $request->input('message');

       $review->save();

       
       return redirect('/');
    }






}
