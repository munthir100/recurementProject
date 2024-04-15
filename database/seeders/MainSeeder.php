<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Office;
use App\Models\Worker;
use App\Models\Account;
use App\Models\CallCenter;
use App\Models\AccountType;
use Illuminate\Support\Arr;
use App\Models\InquiryRequest;
use Illuminate\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        $accountTypes = [AccountType::OFFICE, AccountType::CALL_CENTER];

        // Create the admin user
        User::factory()->create([
            'email' => 'admin@test.com',
            'password' => bcrypt('12345678'),
        ]);

        // Create 10 accounts
        $accounts = Account::factory(10)->create();

        // Create offices for accounts with type OFFICE
        $accounts->filter(function ($account) {
            return $account->account_type_id === AccountType::OFFICE;
        })->each(function ($officeAccount) {
            $office = Office::factory()->create([
                'account_id' => $officeAccount->id,
            ]);
            Worker::factory(25)->create(['office_id' => $office->id]);
        });

        // Create call centers for accounts with type CALL_CENTER
        $accounts->filter(function ($account) {
            return $account->account_type_id === AccountType::CALL_CENTER;
        })->each(function ($callCenterAccount) {
            CallCenter::factory()->create([
                'account_id' => $callCenterAccount->id,
            ]);
        });

        // Create fake inquiry requests
        $callCenterIds = CallCenter::pluck('id');
        foreach ($callCenterIds as $callCenterId) {
            $workerId = Worker::inRandomOrder()->pluck('id')->first(); // Get a random worker ID
            InquiryRequest::factory()->create([
                'worker_id' => $workerId,
                'call_center_id' => $callCenterId,
            ]);
        }
        Blog::factory(30)->create();
    }
}
