<?php

use Illuminate\Database\Seeder;
use App\Chatroom;

class ChatroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chatroom1 = new Chatroom();
        $chatroom1->name = 'Chatroom 1';
        $chatroom1->description = 'Phòng 1';
        $chatroom1->save();

        $chatroom2 = new Chatroom();
        $chatroom2->name = 'Chatroom 2';
        $chatroom2->description = 'Phòng 2';
        $chatroom2->save();
    }
}
