<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['name' => 'Air Jordan 1 High', 'brand' => 'Nike', 'price' => 179.99, 'image' => 'jordan1.jpg', 'description' => 'Un clásico atemporal que redefinió la cultura de las zapatillas.'],
            ['name' => 'Yeezy Boost 350', 'brand' => 'Adidas', 'price' => 220.00, 'image' => 'yeezy350.jpg', 'description' => 'Comodidad extrema con tecnología Boost y diseño futurista.'],
            ['name' => '550 White Green', 'brand' => 'New Balance', 'price' => 130.00, 'image' => 'nb550.jpg', 'description' => 'Estilo retro de baloncesto de los años 80.'],
            ['name' => 'Old Skool', 'brand' => 'Vans', 'price' => 75.00, 'image' => 'vans-oldskool.jpg', 'description' => 'La mítica zapatilla de skate con la icónica banda lateral.'],
            ['name' => 'Air Force 1 \'07', 'brand' => 'Nike', 'price' => 119.99, 'image' => 'airforce1.jpg', 'description' => 'El icono del estilo urbano en color blanco inmaculado.'],
            ['name' => 'Chuck Taylor All-Star', 'brand' => 'Converse', 'price' => 70.00, 'image' => 'converse.jpg', 'description' => 'Las zapatillas de lona más famosas de la historia.'],
            ['name' => 'Dunk Low Panda', 'brand' => 'Nike', 'price' => 110.00, 'image' => 'dunk-panda.jpg', 'description' => 'Bloques de color blanco y negro para cualquier outfit.'],
            ['name' => 'Gel-Kayano 14', 'brand' => 'ASICS', 'price' => 150.00, 'image' => 'asics-gel.jpg', 'description' => 'Estética running de los 2000 con máxima amortiguación.'],
            ['name' => 'Suede Classic', 'brand' => 'Puma', 'price' => 85.00, 'image' => 'puma-suede.jpg', 'description' => 'Estilo hip-hop de los 80 con exterior de ante.'],
            ['name' => 'Club C 85', 'brand' => 'Reebok', 'price' => 90.00, 'image' => 'reebok-clubc.jpg', 'description' => 'Diseño minimalista inspirado en las canchas de tenis.'],
            ['name' => 'Ultraboost 1.0', 'brand' => 'Adidas', 'price' => 180.00, 'image' => 'ultraboost.jpg', 'description' => 'Tejido Primeknit que se adapta al pie como un guante.'],
            ['name' => 'Blazer Mid \'77', 'brand' => 'Nike', 'price' => 109.99, 'image' => 'blazer.jpg', 'description' => 'Toque vintage con diseño de botín clásico.']
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}