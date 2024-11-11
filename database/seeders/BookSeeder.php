<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Superman: Birthright',
                'author' => 'Mark Waid',
                'published_year' => 2003,
                'genre' => 'Superhero, Sci-Fi',
                'description' => 'A modern retelling of Superman\'s origin story, following his journey from Krypton to becoming Earth\'s greatest hero.',
            ],
            [
                'title' => 'Batman: Year One',
                'author' => 'Frank Miller',
                'published_year' => 1987,
                'genre' => 'Superhero, Crime',
                'description' => 'Bruce Wayne returns to Gotham City and begins his career as Batman, learning the ropes and facing early challenges.',
            ],
            [
                'title' => 'Wonder Woman: The Hiketeia',
                'author' => 'Greg Rucka',
                'published_year' => 2002,
                'genre' => 'Superhero, Fantasy',
                'description' => 'Wonder Woman must protect a young woman bound by an ancient Greek ritual, even if it means facing Batman.',
            ],
            [
                'title' => 'Spider-Man: Blue',
                'author' => 'Jeph Loeb',
                'published_year' => 2002,
                'genre' => 'Superhero, Romance',
                'description' => 'Peter Parker reflects on his early days as Spider-Man and his love for Gwen Stacy.',
            ],
            [
                'title' => 'X-Men: God Loves, Man Kills',
                'author' => 'Chris Claremont',
                'published_year' => 1982,
                'genre' => 'Superhero, Sci-Fi',
                'description' => 'The X-Men face a fanatical religious leader intent on eradicating mutants from society.',
            ],
            [
                'title' => 'The Dark Knight Returns',
                'author' => 'Frank Miller',
                'published_year' => 1986,
                'genre' => 'Superhero, Dystopian',
                'description' => 'An older Batman returns from retirement to fight crime in a bleak Gotham City.',
            ],
            [
                'title' => 'Ms. Marvel: No Normal',
                'author' => 'G. Willow Wilson',
                'published_year' => 2014,
                'genre' => 'Superhero, Coming-of-Age',
                'description' => 'Kamala Khan, a Muslim teen from Jersey City, gains superpowers and becomes the new Ms. Marvel.',
            ],
            [
                'title' => 'Black Panther: A Nation Under Our Feet',
                'author' => 'Ta-Nehisi Coates',
                'published_year' => 2016,
                'genre' => 'Superhero, Political',
                'description' => 'Black Panther faces political instability in Wakanda and an uprising that threatens his kingdom.',
            ],
            [
                'title' => 'The Amazing Spider-Man: Kraven\'s Last Hunt',
                'author' => 'J.M. DeMatteis',
                'published_year' => 1987,
                'genre' => 'Superhero, Psychological',
                'description' => 'Spider-Man faces his greatest test as Kraven the Hunter attempts to break him mentally and physically.',
            ],
            [
                'title' => 'Iron Man: Extremis',
                'author' => 'Warren Ellis',
                'published_year' => 2005,
                'genre' => 'Superhero, Sci-Fi',
                'description' => 'Tony Stark faces a new bio-weapon that redefines his approach to technology and heroism.',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
