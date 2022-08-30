<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\product;
use App\Models\Category;
use App\Models\Flashsale;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Maisyah Corporation",
            "email" => "mua.unj@gmail.com",
            "role" => "Admin",
            "status" => "active",
            "password" => bcrypt("bismillahberkah")
        ]);

        Category::create([
            "nama_kategori" => "Aksesoris Muslimah",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Buku",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Fashion Muslim",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Herbal",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Makanan & Minuman",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Pakaian Pria",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Perawatan dan Kecantikan",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Pulsa",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Totebag",
            "email" => "mua.unj@gmail.com"
        ]);
        Category::create([
            "nama_kategori" => "Lain-lain",
            "email" => "mua.unj@gmail.com"
        ]);

        Flashsale::create([
            "email" => "mua.unj@gmail.com",
            "status" => "Non Active",
            "time" => 0000 - 00 - 00
        ]);

        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Promo',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Promo',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Promo',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 1,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            "email" => "mua.unj@gmail.com",
            'nama_product' => 'Nama Produk',
            'status' => 'active',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => '9000',
            'harga_coret_product' => '15000',
            'gambar_product' => 'gambar_product/ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
    }
}
