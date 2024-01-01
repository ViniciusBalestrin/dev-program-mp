<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                "id_mp" => "art",
                "descricao" => "Collectibles & Art"
            ],
            [
                "id_mp" => "baby",
                "descricao" => "Toys for Baby, Stroller, Stroller Accessories, Car Safety Seats"
            ],
            [
                "id_mp" => "coupons",
                "descricao" => "Coupons"
            ],
            [
                "id_mp" => "donations",
                "descricao" => "Donations"
            ],
            [
                "id_mp" => "computing",
                "descricao" => "Computers & Tablets"
            ],
            [
                "id_mp" => "cameras",
                "descricao" => "Cameras & Photography"
            ],
            [
                "id_mp" => "video_games",
                "descricao" => "Video Games & Consoles"
            ],
            [
                "id_mp" => "television",
                "descricao" => "LCD, LED, Smart TV, Plasmas, TVs"
            ],
            [
                "id_mp" => "car_electronics",
                "descricao" => "Car Audio, Car Alarm Systems & Security, Car DVRs, Car Video Players, Car PC"
            ],
            [
                "id_mp" => "electronics",
                "descricao" => "Audio & Surveillance, Video & GPS, Others"
            ],
            [
                "id_mp" => "automotive",
                "descricao" => "Parts & Accessories"
            ],
            [
                "id_mp" => "entertainment",
                "descricao" => "Music, Movies & Series, Books, Magazines & Comics, Board Games & Toys"
            ],
            [
                "id_mp" => "fashion",
                "descricao" => "Men's, Women's, Kids & baby, Handbags & Accessories, Health & Beauty, Shoes, Jewelry & Watches"
            ],
            [
                "id_mp" => "games",
                "descricao" => "Online Games & Credits"
            ],
            [
                "id_mp" => "home",
                "descricao" => "Home appliances. Home & Garden"
            ],
            [
                "id_mp" => "musical",
                "descricao" => "Instruments & Gear"
            ],
            [
                "id_mp" => "phones",
                "descricao" => "Cell Phones & Accessories"
            ],
            [
                "id_mp" => "services",
                "descricao" => "General services"
            ],
            [
                "id_mp" => "learnings",
                "descricao" => "Trainings, Conferences, Workshops"
            ],
            [
                "id_mp" => "tickets",
                "descricao" => "Tickets for Concerts, Sports, Arts, Theater, Family, Excursions tickets, Events & more"
            ],
            [
                "id_mp" => "travels",
                "descricao" => "Plane tickets, Hotel vouchers, Travel vouchers"
            ],
            [
                "id_mp" => "virtual_goods",
                "descricao" => "E-books, Music Files, Software, Digital Images, PDF Files and any item which can be electronically stored in a file, Mobile Recharge, DTH Recharge and any Online Recharge"
            ],
            [
                "id_mp" => "others",
                "descricao" => "Other categories"
            ]       
        ]);
    }
}
