<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateAbout extends Controller
{
    /* images */
    public function about_image_1() {
        return get_field('about_image_1');
    }

    public function about_image_2() {
        return get_field('about_image_2');
    }

    public function about_image_3() {
        return get_field('about_image_3');
    }

    /*text */
    public function about_text_1() {
        return get_field('about_text_1');
    }

    public function about_text_2() {
        return get_field('about_text_2');
    }

    public function about_text_3() {
        return get_field('about_text_3');
    }

}