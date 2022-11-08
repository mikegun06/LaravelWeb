<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home" 
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Me",
        "nim" => "2440037771",
        "name" => "Ho Michael Gunawan",
        "email" => "michael.gunawan008@binus.ac.id",
        // "photo" => "migun.jpg"
    ]);
});



Route::get('/cat', function () {
    $category = [ [
        "title" => "Author Pertama",
        "slug" => "post-pertama",
        "author" => "Jonathan Fadil",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum vero maiores quas molestiae optio consequuntur voluptatum! Dolores, sint distinctio vitae impedit natus ducimus. Distinctio incidunt quasi voluptas non mollitia sunt saepe aperiam sequi earum magnam assumenda tempore, eum molestiae, odio error voluptate impedit doloribus repellendus id quia sit. Vel possimus fugiat, asperiores quidem quos reprehenderit modi libero accusamus corporis nobis dolor inventore, quam, velit non excepturi animi molestiae veritatis. Minima illum ipsa modi quos id pariatur facere sit, similique sunt!"
    ],
    [
        "title" => "Author Kedua",
        "slug" => "post-kedua ",
        "author" => "Ricky Sanjaya",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odit asperiores corrupti minima. Iure nulla quod corporis quos, quasi non minus sint. Eum repellendus veniam unde debitis cumque quis dolor ipsam molestiae repellat aspernatur, inventore ipsa facere itaque dicta adipisci quaerat neque similique vero quisquam voluptates dolorum ab fuga tempore. Harum obcaecati nulla beatae autem distinctio ratione, earum deserunt ducimus eius, exercitationem incidunt et repudiandae! Rem, ullam. Dolorum laborum numquam molestiae. Illum quod quis totam corrupti, rerum, animi nihil voluptas exercitationem commodi aperiam sapiente reiciendis ex quibusdam ipsa asperiores nostrum!"
    ],
    [
        "title" => "Author Ketiga",
        "slug" => "post-ketiga ",
        "author" => "John Cena",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odit asperiores corrupti minima. Iure nulla quod corporis quos, quasi non minus sint. Eum repellendus veniam unde debitis cumque quis dolor ipsam molestiae repellat aspernatur, inventore ipsa facere itaque dicta adipisci quaerat neque similique vero quisquam voluptates dolorum ab fuga tempore. Harum obcaecati nulla beatae autem distinctio ratione, earum deserunt ducimus eius, exercitationem incidunt et repudiandae! Rem, ullam. Dolorum laborum numquam molestiae. Illum quod quis totam corrupti, rerum, animi nihil voluptas exercitationem commodi aperiam sapiente reiciendis ex quibusdam ipsa asperiores nostrum!"
    ] ];
    return view('cat', [
        "title" => "Author",
        "cats" => $category
    ]);
});

