<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();

        $curso->name = 'Laravel';
        $curso->descripcion = 'El mejor framework de PHP';
        $curso->categoria = 'Desarrollo web';
        $curso->categoria = 'Desarrollo web';

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = 'Laravel';
        $curso2->descripcion = 'El mejor framework de PHP';
        $curso2->categoria = 'Desarrollo web';
        $curso2->categoria = 'Desarrollo web';

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = 'Laravel';
        $curso3->descripcion = 'El mejor framework de PHP';
        $curso3->categoria = 'Desarrollo web';
        $curso3->categoria = 'Desarrollo web';

        $curso3->save();
    }
}
