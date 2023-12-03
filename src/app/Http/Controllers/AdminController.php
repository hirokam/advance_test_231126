<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function admin() {
        $params = Contact::all();
        return view('admin', compact('params'));
    }

    public function page() {
        $params = Contact::Paginate(10);
        return view('admin', ['params' => $params]);
    }
}
