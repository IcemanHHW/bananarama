<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{

    public function contact_text() {
        return get_field('contact_text');
    }
    
}