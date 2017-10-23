<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new\App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg',
            'title' => 'Harry Potter',
            'description' => 'Promotion an ourselves up otherwise my',
            'price' => 10
        ]);
        $product->save();

        $product = new\App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg',
            'title' => 'Harry Potter2',
            'description' => 'Apartments simplicity or understood do it we',
            'price' => 17
        ]);
        $product->save();

        $product = new\App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg',
            'title' => 'Harry Potter3',
            'description' => 'Instrument cultivated alteration any favourable expression law far nor',
            'price' => 30
        ]);
        $product->save();

        $product = new\App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg',
            'title' => 'Harry Potter4',
            'description' => 'Do am he horrible distance marriage so although',
            'price' => 20
        ]);
        $product->save();

        $product = new\App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg',
            'title' => 'Harry Potter5',
            'description' => 'At as in understood an remarkably solicitude',
            'price' => 42
        ]);
        $product->save();

        $product = new\App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71Ui-NwYUmL.jpg',
            'title' => 'Harry Potter6',
            'description' => 'Allow miles wound place the leave had',
            'price' => 36
        ]);
        $product->save();

    }
}
