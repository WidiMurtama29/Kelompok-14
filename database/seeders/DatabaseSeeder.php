<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Voucher::insert([
            [
                'code' => 'NEWACC101',
                'name' => 'Cashback 200.000 for new account',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel dolore dignissimos impedit nisi, accusantium id totam iure possimus pariatur fugiat reprehenderit natus amet corrupti repellendus vitae hic nihil sapiente!',
                'type' => 'cashback',
                'value' => '200000',
                'valid_from' => now(),
                'valid_to' => DateTime::createFromFormat('Y-m-d H:i:s', '2024-03-12 23:59:59'),
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'code' => 'VCHCBS201',
                'name' => 'Cashback 50.000 voucher',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel dolore dignissimos impedit nisi, accusantium id totam iure possimus pariatur fugiat reprehenderit natus amet corrupti repellendus vitae hic nihil sapiente!',
                'type' => 'cashback',
                'value' => '50000',
                'valid_from' => now(),
                'valid_to' => DateTime::createFromFormat('Y-m-d H:i:s', '2023-03-20 23:59:59'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'VCHCBS202',
                'name' => 'Cashback 50.000 voucher',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel dolore dignissimos impedit nisi, accusantium id totam iure possimus pariatur fugiat reprehenderit natus amet corrupti repellendus vitae hic nihil sapiente!',
                'type' => 'cashback',
                'value' => '50000',
                'valid_from' => now(),
                'valid_to' => DateTime::createFromFormat('Y-m-d H:i:s', '2023-03-20 23:59:59'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'VCHCBS203',
                'name' => 'Cashback 50.000 voucher',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel dolore dignissimos impedit nisi, accusantium id totam iure possimus pariatur fugiat reprehenderit natus amet corrupti repellendus vitae hic nihil sapiente!',
                'type' => 'cashback',
                'value' => '50000',
                'valid_from' => now(),
                'valid_to' => DateTime::createFromFormat('Y-m-d H:i:s', '2023-03-20 23:59:59'),
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'code' => 'VCHDSC301',
                'name' => 'Cashback 5% voucher',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel dolore dignissimos impedit nisi, accusantium id totam iure possimus pariatur fugiat reprehenderit natus amet corrupti repellendus vitae hic nihil sapiente!',
                'type' => 'discount',
                'value' => '5',
                'valid_from' => now(),
                'valid_to' => DateTime::createFromFormat('Y-m-d H:i:s', '2023-03-18 23:59:59'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'VCHDSC302',
                'name' => 'Cashback 10% voucher',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel dolore dignissimos impedit nisi, accusantium id totam iure possimus pariatur fugiat reprehenderit natus amet corrupti repellendus vitae hic nihil sapiente!',
                'type' => 'discount',
                'value' => '10',
                'valid_from' => now(),
                'valid_to' => DateTime::createFromFormat('Y-m-d H:i:s', '2023-03-15 23:59:59'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'VCHDSC303',
                'name' => 'Cashback 15% voucher',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel dolore dignissimos impedit nisi, accusantium id totam iure possimus pariatur fugiat reprehenderit natus amet corrupti repellendus vitae hic nihil sapiente!',
                'type' => 'discount',
                'value' => '15',
                'valid_from' => now(),
                'valid_to' => DateTime::createFromFormat('Y-m-d H:i:s', '2023-03-25 23:59:59'),
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'code' => 'VCHDSC304',
                'name' => 'Cashback 5% voucher',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel dolore dignissimos impedit nisi, accusantium id totam iure possimus pariatur fugiat reprehenderit natus amet corrupti repellendus vitae hic nihil sapiente!',
                'type' => 'discount',
                'value' => '5',
                'valid_from' => now(),
                'valid_to' => DateTime::createFromFormat('Y-m-d H:i:s', '2023-03-14 23:59:59'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
