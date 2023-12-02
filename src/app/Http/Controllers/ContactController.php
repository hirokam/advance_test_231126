<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact() {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

    public function confirm(Request $request) {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'categories', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function thanks(Request $request) {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 
        'category_id', 'detail']);
        
        Contact::create($contact);
        return view('thanks');
    }
}
