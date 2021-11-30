<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin321'), // password
            'role' => 'admin',
            'assinatura' => 0,
            'tipo_assinatura' => 'nenhuma',
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(10)->create();
        DB::table('books')->insert([
            'nome' => 'Senhor dos Anéis',
            'descricao' => 'A história narra o conflito contra o mal que se alastra pela Terra-média, através da luta de várias raças - Humanos, Anãos, Elfos, Ents e Hobbits - contra Orques, para evitar que o "Anel do Poder" volte às mãos de seu criador Sauron, o Senhor Sombrio.',
            'img' => 'http://localhost:8000/img/books/tolkien.jpg',
            'url' => 'https://pt.wikipedia.org/wiki/O_Senhor_dos_An%C3%A9is#:~:text=A%20hist%C3%B3ria%20narra%20o%20conflito,criador%20Sauron%2C%20o%20Senhor%20Sombrio.',
        ]);
        DB::table('books')->insert([
            'nome' => 'Harry Potter',
            'descricao' => 'Nascido em 31 de julho de 1980, Harry é um bruxo, filho único de James Potter e Lílian Evans Potter, considerado um dos mais famosos feiticeiros dos tempos modernos.',
            'img' => 'http://localhost:8000/img/books/harrypotter.jpg',
            'url' => 'https://pt.wikipedia.org/wiki/Harry_Potter_(personagem)#:~:text=Nascido%20em%2031%20de%20julho,famosos%20feiticeiros%20dos%20tempos%20modernos.&text=%C3%89%20conhecido%20no%20mundo%20bruxo,assassin%C3%A1%2Dlo%20ainda%20rec%C3%A9m%20nascido.',
        ]);
        DB::table('books')->insert([
            'nome' => 'Crônicas de Nárnia',
            'descricao' => 'As Crônicas de Nárnia apresentam, geralmente, as aventuras de crianças que desempenham um papel central e descobrem o ficcional Reino de Nárnia, um lugar onde a magia é corriqueira, os animais falam, e ocorrem batalhas entre o bem e o mal.',
            'img' => 'http://localhost:8000/img/books/cronicasdenarnia.jpg',
            'url' => 'https://pt.wikipedia.org/wiki/The_Chronicles_of_Narnia#:~:text=As%20Cr%C3%B4nicas%20de%20N%C3%A1rnia%20apresentam,o%20bem%20e%20o%20mal.',
        ]);
        DB::table('books')->insert([
            'nome' => 'Guerra dos Tronos',
            'descricao' => 'Game of Thrones é uma série de televisão norte-americana criada por David Benioff e D. B. ... base na descrição do autor de eventos futuros em seu universo literário.',
            'img' => 'http://localhost:8000/img/books/guerradostronos.jpg',
            'url' => 'https://pt.wikipedia.org/wiki/Game_of_Thrones',
        ]);
        DB::table('books')->insert([
            'nome' => 'O Espadachim de Carvão',
            'descricao' => 'O Espadachim de Carvão é um livro de fantasia e ação escrito por Affonso Solano, e publicado no ano de 2013 pelo selo Fantasy da Casa da Palavra.',
            'img' => 'http://localhost:8000/img/books/espadachimdecarvao.jpg',
            'url' => 'https://pt.wikipedia.org/wiki/O_Espadachim_de_Carv%C3%A3o_(2013)',
        ]);
        DB::table('books')->insert([
            'nome' => 'Corte de Espinhos e Rosas',
            'descricao' => 'Corte de Espinhos e Rosas é o primeiro livro da série Corte de Espinhos e Rosas escrita por Sarah J. Maas. Depois de anos sendo escravizados pelos feéricos.',
            'img' => 'http://localhost:8000/img/books/cortedeespinhoserosas.jpg',
            'url' => 'https://cortedeespinhoserosas.fandom.com/pt-br/wiki/Corte_de_Espinhos_e_Rosas',
        ]);
        DB::table('books')->insert([
            'nome' => 'O Nome Do Vento',
            'descricao' => 'O Nome do Vento (em inglês: The Name of the Wind) é um livro de fantasia escrito pelo norte-americano Patrick Rothfuss, o primeiro da série intitulada A Crônica do Matador do Rei.',
            'img' => 'http://localhost:8000/img/books/onomedovento.jpg',
            'url' => 'https://pt.wikipedia.org/wiki/O_Nome_do_Vento',
        ]);
        DB::table('books')->insert([
            'nome' => 'Filhos do Éden',
            'descricao' => 'Filhos do Éden é uma trilogia de livros de literatura fantástica, que aborda temas como anjos, fim dos tempos e apocalipse, escrito pelo brasileiro Eduardo Spohr.',
            'img' => 'http://localhost:8000/img/books/filhosdoeden.jpg',
            'url' => 'https://pt.wikipedia.org/wiki/Filhos_do_%C3%89den#:~:text=Filhos%20do%20%C3%89den%20%C3%A9%20uma,escrito%20pelo%20brasileiro%20Eduardo%20Spohr.&text=Assim%20como%20A%20Batalha%20do,Verus%2C%20do%20Grupo%20Editorial%20Record.',
        ]);
        DB::table('books')->insert([
            'nome' => 'O Castelo Animado',
            'descricao' => 'O CASTELO ANIMADO conta a história de Sophie, uma jovem de 18 anos, amaldiçoada por uma bruxa que a transforma em uma velha de 90 anos. Para se livrar da maldição, ela foge e emprega-se no Castelo de Hauru.',
            'img' => 'http://localhost:8000/img/books/casteloanimado.jpg',
            'url' => 'https://www.saraiva.com.br/o-castelo-animado-1574294/p',
        ]);
    }
}
