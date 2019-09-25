<?php

use Illuminate\Database\Seeder;

// 追加
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();

        $diaries = [
            [
                'title'=>'初めてのセブ',
                'body'=>'バロット食べれない',
            ],
            [
                'title'=>'週末のオスロブ',
                'body'=>'ジンベイザメでかい'
            ],
            [
                'title'=>'卒業',
                'body'=>'プレゼン無理'
            ]
        ];

        foreach ($diaries as $diary){
            // DBにデータを追加する
            DB::table('diaries')->insert([
                'title' => $diary['title'],
                'body' => $diary['body'],
                'user_id' => $user->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

    }
}
