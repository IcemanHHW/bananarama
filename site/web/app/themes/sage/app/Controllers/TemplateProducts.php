<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateProducts extends Controller
{


 /* Images */
 public function product_image_1() {
     return get_field('product_image_1');
 }

 public function product_image_2() {
    return get_field('product_image_2');
}

public function product_image_3() {
    return get_field('product_image_3');
}

public function product_image_4() {
    return get_field('product_image_4');
}

public function product_image_5() {
    return get_field('product_image_5');
}


/* Titles */
 public function product_title_1() {
     return get_field('product_title_1');
 }

 public function product_title_2() {
    return get_field('product_title_2');
}

public function product_title_3() {
    return get_field('product_title_3');
}

public function product_title_4() {
    return get_field('product_title_4');
}

public function product_title_5() {
    return get_field('product_title_5');
}


/* Texts */

public function product_text_1() {
    return get_field('product_text_1');
}

public function product_text_2() {
   return get_field('product_text_2');
}

public function product_text_3() {
   return get_field('product_text_3');
}

public function product_text_4() {
   return get_field('product_text_4');
}

public function product_text_5() {
   return get_field('product_text_5');
}


/* Prices */

public function product_price_1() {
    return get_field('product_price_1');
}

public function product_price_2() {
   return get_field('product_price_2');
}

public function product_price_3() {
   return get_field('product_price_3');
}

public function product_price_4() {
   return get_field('product_price_4');
}

public function product_price_5() {
   return get_field('product_price_5');
}

}