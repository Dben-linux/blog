<?php

namespace App\Http\Controllers;

class pagesController extends Controller {

   public function getIndex() {
    
    return view('pages.welcome');

   }

   public function getAbout() {
       $first = 'Benjamin';
       $last = 'Samuel';
       $email = 'sam.dben@gmail.com';
       $fullname = $first . " " . $last;
       return view('pages.about')->withFullname($fullname)->withEmail($email);

   }

   public function getContact() {

    return view('pages.contact');

   }


}