<?php

use Illuminate\Database\Seeder;
use App\Quan;

class QuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quan = new Quan();

        $quan->ten_quan = 'Bình Chánh';
        $quan->tinh_id = 1;
        $quan->loai = 'Huyện';
        $quan->save();

        $quan = new Quan();

        $quan->ten_quan = 'Bình Tân';
        $quan->tinh_id = 1;
        $quan->loai = 'Quận';
        $quan->save();

        $quan = new Quan();

        $quan->ten_quan = 'Quận 1';
        $quan->tinh_id = 1;

        $quan->save();

        $quan = new Quan();

        $quan->ten_quan = 'Huế';
        $quan->tinh_id = 4;
        $quan->loai = 'Thành Phố';
        $quan->save();

        $quan = new Quan();

        $quan->ten_quan = 'Hương Thủy';
        $quan->tinh_id = 4;
        $quan->loai = 'Thị Xã';
        $quan->save();

        $quan = new Quan();

        $quan->ten_quan = 'Tây Lộc';
        $quan->tinh_id = 4;
        $quan->loai = 'Phường';
        $quan->save();

        $quan = new Quan();
        
        $quan->ten_quan = 'Trường An';
        $quan->tinh_id = 4;
        $quan->loai = 'Phường';
        $quan->save();
    }
}
