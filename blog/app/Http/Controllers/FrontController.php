<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getBlog()
    {
        return view('blog.blog');
    }

    public function getGallery()
    {
        return view('gallery.gallery');
    }

    public function getAbout()
    {
        return view('about.about');
    }

    public function getContacts()
    {
        return view('contacts.contacts');
    }

    public function getFaq()
    {
        return view('faq.faq');
    }
}
