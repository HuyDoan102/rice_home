<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        DB::table('roles')->insert(
            array_map(function ($item) {
                $item['created_at'] = Carbon::now();
                $item['updated_at'] = Carbon::now();
                return $item;
            }, $this->getData())
        );
    }

    public function getData()
    {
        $data =[
            ['name' => 'Admin', 'code' => 'roles.admin'],
            ['name' => 'Ordered', 'code' => 'roles.ordered'],
        ];
        return $data;
    }
}
