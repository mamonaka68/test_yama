<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
   public function index()
  {
    return view('index'); 
}
public function confirm(Request $request)
     {
         $contact = $request->only(['first_name', 'last_name','gender','email', 'tell1', 'tell2','tell3','address','building','content']);
      return view('confirm', compact('contact'));
     }
     public function store(Request $request)
   {
     $contact = $request->only(['first_nama', 'last_name','gender','email', 'tell1','tell2','tell3','address','building', 'content']);
     Contact::create($contact);
     return view('thanks');
   }
}
