<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Universite;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                // Paginer les données des universités avec 1 université par page
                $universites = Universite::paginate(1);

                // Passer les données paginées des universités à la vue
                return view('dashboard', ['universites' => $universites]);
            } elseif ($usertype == 'admin') {
                return view('admin.adminhome');
            } else {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view("post");
    }
}
