<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->user_id = 2;
        $post->title = "Memepringati HUT RI ke 78";
        $post->body = "Sehubungan dengan hari kemerdekaan RI, maka setiap rt diwajibkan memberikan kontribusi unik dalam festival arak arakan. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $post->image = 'hutri.jpg';

        $post->save();
        $post = new Post;
        $post->user_id = 2;
        $post->title = "Jadwal Rapat RT 02 RW 06";
        $post->body = "Sehubungan dengan munculnya keresahan warga terhadap beberapa peristiwa pencurian yang terjadi di rt 02 rw 06, maka akan diadakan rapat dadakan. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $post->image = 'rapatrt.jpg';

        $post->save();

        $post = new Post;
        $post->user_id = 3;
        $post->title = "Acara penyambutan Bupati Garut";
        $post->body = "Dengan terpilihnya bupati garut baru, beliau akan mengunjungi berbagai lokasi didaerah garut untuk memantau keadaan. tak terkecuali desa kita tercinta. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $post->image = 'bupati.jpg';

        $post->save();

        $post = new Post;
        $post->user_id = 3;
        $post->title = "Acara pengajian Maulid Nabi";
        $post->body = "Berdekatan dengan hari kelahiran Nabi SAW maka akan diadakan rapat. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $post->image = 'maulid.jpg';
        $post->save();

  

        
    }
}
