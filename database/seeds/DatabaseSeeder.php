<?php

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
        // $this->call(UsersTableSeeder::class);
        $shops = factory(\App\Shop::class, 2)->create();

        $users = factory(\App\User::class, 4)->create();

        $me = factory(\App\User::class)->create([
            'name' => 'テスト太郎',
            'email' => 'payments.app.laravel@gmail.com',
        ]);


        foreach ($shops as $shop) {
            foreach ($users as $user) {
                factory(\App\Payment::class)->create([
                    'user_id' => $user->id,
                    'shop_id' => $shop->id,
                ]);
            }

            factory(App\Payment::class)->create([
                'user_id' => $me->id,
                'shop_id' => $shop->id,
            ]);
        }

    }
}
