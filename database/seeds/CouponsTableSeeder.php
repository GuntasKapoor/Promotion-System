<?php

use App\coupons;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupons::truncate();

        Coupons::create([
            'c_name' => '50% off',
            'c_minPrice' => 1000,
            'c_percentDiscount' => 50,
            'c_validity' => '2020-09-12',
            'c_maxDiscount' => 2000,
            'c_cashbackType' => 'oyo wallet',
            'c_paymentMethod' => 'upi'
        ]);

        Coupons::create([
            'c_name' => '20% off',
            'c_minPrice' => 500,
            'c_percentDiscount' => 20,
            'c_validity' => '2020-09-12',
            'c_maxDiscount' => 1000,
            'c_cashbackType' => 'cash back',
            'c_paymentMethod' => 'credit card / debit card'
        ]);

        Coupons::create([
            'c_name' => '70% off',
            'c_minPrice' => 5000,
            'c_percentDiscount' => 70,
            'c_validity' => '2020-09-12',
            'c_maxDiscount' => 6000,
            'c_cashbackType' => 'oyo wallet',
            'c_paymentMethod' => 'upi / credit card'
        ]);
    }
}
