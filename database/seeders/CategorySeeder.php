<?php

namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name_en" => "Hajj flights",
            "name_ar" => "رحلات الحج",
            "name_fr" => "Vols de Hajj",
            "slug_en" => "hajj-flights",
            "slug_ar" => "رحلات-الحج",
            "slug_fr" => "vols-de-hajj",
            "description_en" => "Book your Hajj flights with us and experience a hassle-free journey to the holy land.",
            "description_ar" => "احجز رحلات الحج الخاصة بك معنا واستمتع برحلة خالية من المتاعب إلى الأراضي المقدسة.",
            "description_fr" => "Réservez vos vols de Hajj avec nous et vivez un voyage sans tracas vers la terre sainte."
        ]);
        Category::create([
            "name_en" => "Umrah flights",
            "name_ar" => "رحلات العمرة",
            "name_fr" => "Vols d'Umrah",
            "slug_en" => "umrah-flights",
            "slug_ar" => "رحلات-العمرة",
            "slug_fr" => "vols-dumrah",
            "description_en" => "Book your Umrah flights with us and experience a hassle-free journey to the holy land.",
            "description_ar" => "احجز رحلات العمرة الخاصة بك معنا واستمتع برحلة خالية من المتاعب إلى الأراضي المقدسة.",
            "description_fr" => "Réservez vos vols d'Umrah avec nous et vivez un voyage sans tracas vers la terre sainte."
        ]);

        Category::create([
            "name_en" => "Ramadan omrah",
            "name_ar" => "عمرة رمضان",
            "name_fr" => "Omrah de Ramadan",
            "slug_en" => "ramadan-omrah",
            "slug_ar" => "عمرة-رمضان",
            "slug_fr" => "omrah-de-ramadan",
            "description_en" => "Book your Ramadan omrah with us and experience a hassle-free journey to the holy land.",
            "description_ar" => "احجز عمرة رمضان الخاصة بك معنا واستمتع برحلة خالية من المتاعب إلى الأراضي المقدسة.",
            "description_fr" => "Réservez votre Omrah de Ramadan avec nous et vivez un voyage sans tracas vers la terre sainte."
        ]);

        Category::create([
            "name_en" => "Customized omrah",
            "name_ar" => "عمرة مخصصة",
            "name_fr" => "Omrah personnalisée",
            "slug_en" => "customized-omrah",
            "slug_ar" => "عمرة-مخصصة",
            "slug_fr" => "omrah-personnalisée",
            "description_en" => "Book your customized omrah with us and experience a hassle-free journey to the holy land.",
            "description_ar" => "احجز عمرة مخصصة الخاصة بك معنا واستمتع برحلة خالية من المتاعب إلى الأراضي المقدسة.",
            "description_fr" => "Réservez votre Omrah personnalisée avec nous et vivez un voyage sans tracas vers la terre sainte."
        ]);
    }
}
