<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function CraftedForYou(){
        return view('CraftedForYou');
    }

    public function experience(){
        return view('experience');
    }

    public function experienceOne(){
        #Wellness trip
        return view('experience-one');
    }

    public function experienceTwo(){
        #Walking Tours
        return view('experience-two');
    }

    public function experienceThree(){
        #Tailor-Made Travel: Your Preferences, Your Adventure
        return view('experience-three');
    }

    public function experienceFour(){
        #Sightseeing Tours
        return view('experience-four');
    }

    public function experienceFive(){
        #Family Tours
        return view('experience-five');
    }

    public function experienceSix(){
        #Food Travel    
        return view('experience-six');
    }

    public function experienceSeven(){
        #Romantic Vacations & Honeymoom
        return view('experience-seven');
    }

    public function experienceEight(){
        #Small Group Adventures
        return view('experience-eight');
    }

    public function experienceNine(){
        #Solo Journeys
        return view('experience-nine');
    }

    public function experienceTen(){
        #Travel Together
        return view('experience-ten');
    }

    public function experienceEleven(){
        #Cherished Moments: Couples' Exclusive Tours
        return view('experience-eleven');
    }

    public function highlights(){
        return view('highlights');
    }

    public function contact(){
        return view('contact');
    }

    public function termandcondition(){
        return view('termsandcondition');
    }

    public function policy(){
        return view('policy');
    }

    public function faq(){
        return view('faq');
    }

    public function peru(){
        return view('peru');
    }

    public function peruLima(){
        return view('peru-lima');
    }

    public function peruMachupichu(){
        return view('peru-machupichu');
    }

    public function peruPuno(){
        return view('peru-puno');
    }

    public function peruTrujillo(){
        return view('peru-trujillo');
    }

    public function peruCusco(){
        return view('peru-cusco');
    }

    public function peruArequipa(){
        return view('peru-arequipa');
    }


    public function argentina(){
        return view('argentina');
    }

    public function colombia(){
        return view('colombia');
    }

    public function ecuador(){
        return view('ecuador');
    }

    public function chile(){
        return view('chile');
    }

    public function bolivia(){
        return view('bolivia');
    }

    public function brasil(){
        return view('brasil');
    }

    public function blog(){
        return view('blog');
    }
    
    
}
