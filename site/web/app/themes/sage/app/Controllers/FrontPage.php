<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    public function intro_text() {
        return get_field('intro_text');
    }

    /* Products */
    public function hp_product_image_1() {
        return get_field('product_image_1');
    }

    public function hp_product_image_2() {
        return get_field('product_image_2');
    }

    public function hp_product_image_3() {
        return get_field('product_image_3');
    }

    public function hp_product_image_4() {
        return get_field('product_image_4');
    }   

    public function hp_product_image_5() {
        return get_field('product_image_5');
    }

    public function hp_product_title_1() {
        return get_field('product_title_1');
    }

    public function hp_product_title_2() {
        return get_field('product_title_2');
    }

    public function hp_product_title_3() {
        return get_field('product_title_3');
    }

    public function hp_product_title_4() {
        return get_field('product_title_4');
    }

    public function hp_product_title_5() {
        return get_field('product_title_5');
    }

    /* About */
    public function hp_about_image() {
        return get_field('hp_about_image');
    }

    public function hp_about_text() {
        return get_field('hp_about_text');
    }

}
