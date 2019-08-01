<?php

use Illuminate\Database\Seeder;
use App\payment;
class paymentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $table->string('name');
        // $table->string('car_number');
        // $table->string('type');
        // $table->integer('year');
        // $table->bigInteger('amount');
        // $table->string('status');

        $json = File::get("database/data/data.json");
        $datas = json_decode($json);
        foreach($datas as $data){
            payment::create(array(
                'name' => isset($data->name) ? $data->name : "-",
                'car_number' => isset($data->car_number) ? $data->car_number : "-",
                'type' => isset($data->type) ? $data->type : "-",
                'year' => isset($data->year) ? $data->year : "2019",
                'status' => isset($data->status) ? $data->status : "-",
                'amount' => isset($data->amount) ? $data->amount : "0"
            ));
        }
    }
}
