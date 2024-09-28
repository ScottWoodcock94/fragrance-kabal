<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('brands')->insert([
        //     "title" => "Versace"
        // ]);

        DB::table('brand')->insert([
            ["title" => "Abercrombie & Fitch", "created_at" => date_create("Europe/London")],
            ["title" => "Acqua di Parma", "created_at" => date_create("Europe/London")],
            ["title" => "Akro", "created_at" => date_create("Europe/London")],
            ["title" => "Amouage", "created_at" => date_create("Europe/London")],
            ["title" => "Atkinsons", "created_at" => date_create("Europe/London")],
            ["title" => "Azzaro", "created_at" => date_create("Europe/London")],
            ["title" => "Balenciaga", "created_at" => date_create("Europe/London")],
            ["title" => "Balmain", "created_at" => date_create("Europe/London")],
            ["title" => "Bella Bellissima", "created_at" => date_create("Europe/London")],
            ["title" => "Boadecia the Victorious", "created_at" => date_create("Europe/London")],
            ["title" => "Bond No.9", "created_at" => date_create("Europe/London")],
            ["title" => "Boucheron", "created_at" => date_create("Europe/London")],
            ["title" => "Bottega Veneta", "created_at" => date_create("Europe/London")],
            ["title" => "Brioni", "created_at" => date_create("Europe/London")],
            ["title" => "Brunello Cucinelli", "created_at" => date_create("Europe/London")],
            ["title" => "Burberry", "created_at" => date_create("Europe/London")],
            ["title" => "Bvlgari", "created_at" => date_create("Europe/London")],
            ["title" => "By Kilian", "created_at" => date_create("Europe/London")],
            ["title" => "By Terry", "created_at" => date_create("Europe/London")],
            ["title" => "Byredo", "created_at" => date_create("Europe/London")],
            ["title" => "Calvin Klein", "created_at" => date_create("Europe/London")],
            ["title" => "Carolina Herrera", "created_at" => date_create("Europe/London")],
            ["title" => "Cartier", "created_at" => date_create("Europe/London")],
            ["title" => "Chanel", "created_at" => date_create("Europe/London")],
            ["title" => "Chloé", "created_at" => date_create("Europe/London")],
            ["title" => "Cerruti", "created_at" => date_create("Europe/London")],
            ["title" => "Clive Christian", "created_at" => date_create("Europe/London")],
            ["title" => "Coach", "created_at" => date_create("Europe/London")],
            ["title" => "Commes des Garçons", "created_at" => date_create("Europe/London")],
            ["title" => "Creed", "created_at" => date_create("Europe/London")],
            ["title" => "Davidoff", "created_at" => date_create("Europe/London")],
            ["title" => "Dior", "created_at" => date_create("Europe/London")],
            ["title" => "Diptyque", "created_at" => date_create("Europe/London")],
            ["title" => "Dolce & Gabbana", "created_at" => date_create("Europe/London")],
            ["title" => "Dunhill", "created_at" => date_create("Europe/London")],
            ["title" => "Elegantes", "created_at" => date_create("Europe/London")],
            ["title" => "Elie Saab", "created_at" => date_create("Europe/London")],
            ["title" => "Emporio Armani", "created_at" => date_create("Europe/London")],
            ["title" => "Ermenegildo Zengna", "created_at" => date_create("Europe/London")],
            ["title" => "Escentric Molecules", "created_at" => date_create("Europe/London")],
            ["title" => "État Libre d'Orange", "created_at" => date_create("Europe/London")],
            ["title" => "Ex Nihilo", "created_at" => date_create("Europe/London")],
            ["title" => "Fendi", "created_at" => date_create("Europe/London")],
            ["title" => "Floris", "created_at" => date_create("Europe/London")],
            ["title" => "Fragrance de Bois", "created_at" => date_create("Europe/London")],
            ["title" => "Frapin", "created_at" => date_create("Europe/London")],
            ["title" => "Frederic Malle", "created_at" => date_create("Europe/London")],
            ["title" => "Fueguia 1833", "created_at" => date_create("Europe/London")],
            ["title" => "Georgio Armani", "created_at" => date_create("Europe/London")],
            ["title" => "Givenchy", "created_at" => date_create("Europe/London")],
            ["title" => "Goutal", "created_at" => date_create("Europe/London")],
            ["title" => "Graff", "created_at" => date_create("Europe/London")],
            ["title" => "Gucci", "created_at" => date_create("Europe/London")],
            ["title" => "Guerlain", "created_at" => date_create("Europe/London")],
            ["title" => "Hermès", "created_at" => date_create("Europe/London")],
            ["title" => "Houbigant", "created_at" => date_create("Europe/London")],
            ["title" => "Hugo Boss", "created_at" => date_create("Europe/London")],
            ["title" => "Initio", "created_at" => date_create("Europe/London")],
            ["title" => "Issey Miyake", "created_at" => date_create("Europe/London")],
            ["title" => "Jean Paul Gaultier", "created_at" => date_create("Europe/London")],
            ["title" => "Jimmy Choo", "created_at" => date_create("Europe/London")],
            ["title" => "Jo Malone", "created_at" => date_create("Europe/London")],
            ["title" => "Joop!", "created_at" => date_create("Europe/London")],
            ["title" => "Juliette Has A Gun", "created_at" => date_create("Europe/London")],
            ["title" => "Kenzo", "created_at" => date_create("Europe/London")],
            ["title" => "Lancôme", "created_at" => date_create("Europe/London")],
            ["title" => "Le Labo", "created_at" => date_create("Europe/London")],
            ["title" => "Loewe", "created_at" => date_create("Europe/London")],
            ["title" => "Maision Francis Kurkdjian", "created_at" => date_create("Europe/London")],
            ["title" => "Maision Margiela", "created_at" => date_create("Europe/London")],
            ["title" => "Mancera", "created_at" => date_create("Europe/London")],
            ["title" => "Marc Jacobs", "created_at" => date_create("Europe/London")],
            ["title" => "Miller Harris", "created_at" => date_create("Europe/London")],
            ["title" => "Missoni", "created_at" => date_create("Europe/London")],
            ["title" => "Miu Miu", "created_at" => date_create("Europe/London")],
            ["title" => "Moncler", "created_at" => date_create("Europe/London")],
            ["title" => "Montale", "created_at" => date_create("Europe/London")],
            ["title" => "Montblanc", "created_at" => date_create("Europe/London")],
            ["title" => "Moschino", "created_at" => date_create("Europe/London")],
            ["title" => "Mugler", "created_at" => date_create("Europe/London")],
            ["title" => "Narciso Rodriguez", "created_at" => date_create("Europe/London")],
            ["title" => "Nishane", "created_at" => date_create("Europe/London")],
            ["title" => "Ormonde Jayne", "created_at" => date_create("Europe/London")],
            ["title" => "Parfums de Marly", "created_at" => date_create("Europe/London")],
            ["title" => "Penhaligon's", "created_at" => date_create("Europe/London")],
            ["title" => "Prada", "created_at" => date_create("Europe/London")],
            ["title" => "Rabanne", "created_at" => date_create("Europe/London")],
            ["title" => "Ralph Lauren", "created_at" => date_create("Europe/London")],
            ["title" => "Rasasi", "created_at" => date_create("Europe/London")],
            ["title" => "Rochas", "created_at" => date_create("Europe/London")],
            ["title" => "Roja", "created_at" => date_create("Europe/London")],
            ["title" => "Salvatore Ferragamo", "created_at" => date_create("Europe/London")],
            ["title" => "Serge Lutens", "created_at" => date_create("Europe/London")],
            ["title" => "Sisley", "created_at" => date_create("Europe/London")],
            ["title" => "Shiseido", "created_at" => date_create("Europe/London")],
            ["title" => "Stéphane Humbert", "created_at" => date_create("Europe/London")],
            ["title" => "Strangelove", "created_at" => date_create("Europe/London")],
            ["title" => "Tauer", "created_at" => date_create("Europe/London")],
            ["title" => "The House of Oud", "created_at" => date_create("Europe/London")],
            ["title" => "The Merchant of Venice", "created_at" => date_create("Europe/London")],
            ["title" => "Tiziana Terenzi", "created_at" => date_create("Europe/London")],
            ["title" => "Tom Ford", "created_at" => date_create("Europe/London")],
            ["title" => "Trussardi", "created_at" => date_create("Europe/London")],
            ["title" => "Valentino", "created_at" => date_create("Europe/London")],
            ["title" => "Vera Wang", "created_at" => date_create("Europe/London")],
            ["title" => "Veronique Gabai", "created_at" => date_create("Europe/London")],
            ["title" => "Versace", "created_at" => date_create("Europe/London")],
            ["title" => "Viktor & Rolf", "created_at" => date_create("Europe/London")],
            ["title" => "Xerjoff", "created_at" => date_create("Europe/London")],
            ["title" => "Yves Saint Laurent", "created_at" => date_create("Europe/London")],
            ["title" => "Zadig & Voltaire", "created_at" => date_create("Europe/London")],
            ["title" => "Zarkoperfume", "created_at" => date_create("Europe/London")]
        ]);

        DB::table('user')->insert([
            ['email' => 'mr_bean', 'password' => 'password', 'username' => 'mr_bean1', 'role' => 'GUEST'],
            ['email' => 'tom_cruise', 'password' => 'password', 'username' => 'tom_cruise1', 'role' => 'ADMIN']
        ]);
    }
}
