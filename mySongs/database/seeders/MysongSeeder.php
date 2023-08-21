<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mysong;

class MysongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mysong = new Mysong();
        $mysong->Titulo = "Always Ascending";
        $mysong->Autor = "Disco Dub Band";
        $mysong->Album = "Late Night Tales: Franz Ferdinand";
        $mysong->Fecha = "24 jun 2023";
        $mysong->Duracion = "4:06";
        $mysong->save();

        $mysong2 = new Mysong();
        $mysong2->Titulo = "Una Lluna a L'Aigua";
        $mysong2->Autor = "Txarango";
        $mysong2->Album = "El Cor de la Terra";
        $mysong2->Fecha = "27 ene 2023";
        $mysong2->Duracion = "3:37";
        $mysong2->save();

        $mysong3 = new Mysong();
        $mysong3->Titulo = "The Air is Getting Slippery";
        $mysong3->Autor = "Primus";
        $mysong3->Album = "Pork Soda";
        $mysong3->Fecha = "10 oct 2022";
        $mysong3->Duracion = "2:31";
        $mysong3->save();

        $mysong4 = new Mysong();
        $mysong4->Titulo = "When you Gonna Learn?";
        $mysong4->Autor = "Jamiroquai";
        $mysong4->Album = "Emergency on Planet Earth";
        $mysong4->Fecha = "27 feb 2019";
        $mysong4->Duracion = "3:50";
        $mysong4->save();

        $mysong5 = new Mysong();
        $mysong5->Titulo = "April 29, 1992 (Miami)";
        $mysong5->Autor = "Sublime";
        $mysong5->Album = "Sublime";
        $mysong5->Fecha = "28 feb 2017";
        $mysong5->Duracion = "3:53";
        $mysong5->save();

        $mysong6 = new Mysong();
        $mysong6->Titulo = "Not This Time";
        $mysong6->Autor = "Housenine";
        $mysong6->Album = "Not This Time";
        $mysong6->Fecha = "2 jul 2022";
        $mysong6->Duracion = "2:29";
        $mysong6->save();
    }
}
