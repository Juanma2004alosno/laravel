<?php

namespace Database\Seeders;

use App\Models\Peliculas;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Crear usuarios
        $juanma = User::create([
            'nombre_usuario' => 'Juanma',
            'name' => 'juanma',
            'fecha_nac' => '2004-04-18',
            'direccion' => 'Las cabezas',
            'telefono' => 603563376,
            'contraseña' => 'juanma',
        ]);

        $marina = User::create([
            'nombre_usuario' => 'Marina',
            'name' => 'Marina',
            'fecha_nac' => '2004-04-18',
            'direccion' => 'Las cabezas',
            'telefono' => 603563376,
            'contraseña' => 'juanma',
        ]);

        $pepa = User::create([
            'nombre_usuario' => 'Pepa',
            'name' => 'Pepa',
            'fecha_nac' => '2004-04-18',
            'direccion' => 'Las cabezas',
            'telefono' => 603563376,
            'contraseña' => 'juanma',
        ]);

        Peliculas::create([
            'titulo' => 'Hasta el ultimo hombre',
            'genero' => 'Drama',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!',
            'imagen' => 'pelicula1.jpg',
            'user_id' => $juanma->id,
        ]);

        Peliculas::create([
            'titulo' => 'Las paredes hablan',
            'genero' => 'Drama',
            'descripcion' => 'Descripción de la película "Las paredes hablan".',
            'imagen' => 'pelicula2.jpg',
            'user_id' => $juanma->id,
        ]);

        Peliculas::create([
            'titulo' => 'Anabelle',
            'genero' => 'Terror',
            'descripcion' => 'Descripción de la película "Anabelle".',
            'imagen' => 'pelicula3.jpg',
            'user_id' => $marina->id,
        ]);

        Peliculas::create([
            'titulo' => 'Los delincuentes',
            'genero' => 'Terror',
            'descripcion' => 'Descripción de la película "Los delincuentes".',
            'imagen' => 'pelicula4.jpg',
            'user_id' => $juanma->id,
        ]);

        Peliculas::create([
            'titulo' => 'Spaceman',
            'genero' => 'Terror',
            'descripcion' => 'Descripción de la película "Spaceman".',
            'imagen' => 'pelicula5.jpg',
            'user_id' => $marina->id,
        ]);

        Peliculas::create([
            'titulo' => 'Vacaciones',
            'genero' => 'Comedia',
            'descripcion' => 'Descripción de la película "Vacaciones".',
            'imagen' => 'pelicula6.jpg',
            'user_id' => $juanma->id,
        ]);

        Peliculas::create([
            'titulo' => 'Infiltrados en la universidad',
            'genero' => 'Comedia',
            'descripcion' => 'Descripción de la película "Infiltrados en la universidad".',
            'imagen' => 'pelicula7.jpg',
            'user_id' => $pepa->id,
        ]);
    }
}
