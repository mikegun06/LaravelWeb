<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $cat_posts = [
        [
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
        ] 
    ];

    public static function all() {
        return self::$cat_posts;
    }
}
