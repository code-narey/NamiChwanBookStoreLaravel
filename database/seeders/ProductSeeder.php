<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "ISBN" => "123456789",
            "Name" => "Lord of the Rings",
            "Price" => "Nrs 7000",
            "Category" => "Magic",
            "Discription" => "The Lord of the Rings is an epic high fantasy 
            novel by the English author and scholar J. R. R. Tolkien",
            "Gallary"=>"https://www.foliosociety.com/media/catalog/product/cache/62c02659d61289399aa40cd1696133d2/l/t/ltr_book.png"

            ],

            [
                "ISBN" => "123456799",
            "Name" => "Harry Potter and the Philosopher's Stone",
            "Price" => "Nrs 4000",
            "Category" => "Magic",
            "Discription" => "Harry Potter and the Philosopher's Stone is a fantasy novel written by British author J. K. Rowling.",
            "Gallary"=>"https://images-na.ssl-images-amazon.com/images/I/51MjPyuVqRL._SX323_BO1,204,203,200_.jpg"

            ],

            [
                "ISBN" => "123456789",
            "Name" => "Game Of Thrones: 1996",
            "Price" => "Nrs 6500",
            "Category" => "Fantacy Magic",
            "Discription" => "A Game of Thrones is the first novel in A Song of Ice and Fire, a series of fantasy novels by the American author George R. R. Martin.",
            "Gallary"=>"https://i5.walmartimages.com/asr/9c362767-d11f-42d3-aabf-c737620269d8_1.c979ead850476d4e043cd18a485e6b15.jpeg?odnWidth=612&odnHeight=612&odnBg=ffffff"

            ],

            [
                "ISBN" => "123456789",
            "Name" => "he Haunting of Hill House",
            "Price" => "Nrs 2500",
            "Category" => "Gothic Horror",
            "Discription" => "The Lord of the Rings is an epic high fantasy 
            novel by the English author and scholar J. R. R. Tolkien",
            "Gallary"=>"https://images2.penguinrandomhouse.com/cover/9780143122357"

            ]
            
        ]);
    }
}
