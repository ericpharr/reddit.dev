<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function uppercase ($word)
    {
        $data['word'] = $word;
        $data['upper'] = strtoupper($word);
        return view('uppercase', $data);
    }

    public function lowercase ($word)
    {
        $data['word'] = $word;
        $data['lower'] = strtolower($word);
        return view('lowercase', $data);
    }

    public function increment ($number = 0)
    {
        if ($number < 5){
            $data['number'] = $number;
            $data['incremented'] = $number + 1;
            return view('increment', $data);
        } else {
            redirect()->action('HomeController@resetToZero');
        }
    }

    public function resetToZero ()
    {
        $data['incremented'] = 0;
        return view('increment')->with($data);
    }

}
