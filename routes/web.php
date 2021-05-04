<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeOfProductsController;
use App\Models\Product;
use App\Models\Typeofproduct;
use App\Models\Allergen;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');


Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts/submit', [ContactController::class, 'submit'])->name('contact-form');

Route::get('/typesOfProducts', [TypeOfProductsController::class, 'allData'])->name('typesOfProducts');

Route::get('/allPproducts/{id}', function($id){
    $typeofproduct = new Typeofproduct();
    return view('products',['data'=>$typeofproduct->find($id)->products]);
})->name('allProducts');

Route::get('/products/{id}', function ($id) {
        $product = new Product();
        return view('one-product',['data'=>$product->find($id)]);
  })->name('product-one');

  Route::get('/allergen/{allergen_id}', function ($allergen_id) {
    $allergen = new Allergen();
    return view('allergen',['data'=>$allergen->find($allergen_id)]);
})->name('allergen');

