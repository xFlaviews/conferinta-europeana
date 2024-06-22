<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    
    public function changeLocale($lang) {
        $previousUrl = url()->previous();
        $currentUrl = url()->current();
        
        if(existLocale($lang)) {
            setAllLocale($lang);

            session()->put('locale', $lang);
        }
    
        if ($previousUrl && $previousUrl !== $currentUrl) {
            return redirect($previousUrl);
        } else {
            return redirect()->route('index'); // Reindirizza all'index se non c'è una URL precedente valida
        }
    }
}
