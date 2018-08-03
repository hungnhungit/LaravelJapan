<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = $this->findSetting('admin.bg_image');

        if(!$setting->exists){
            $setting->fill([
                'display_name' => 'img',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 5,
            ])->save();
        }
    }

    public function findSetting($key)
    {
        return \App\Setting::firstOrNew(['key'=>$key]);
    }
}
