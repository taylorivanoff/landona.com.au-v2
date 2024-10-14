<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            ['name' => '', 'time_ago' => '', 'review_body' => "", 'created_at' => ''],
            ['name' => 'B F', 'time_ago' => '3 weeks ago', 'review_body' => "Tina helped us on a sale & purchase over the past 9 months. She is a pleasure to work with and makes the process streamlined & almost stress free. I'd 110%(*no such thing except in the NRL) recommend her to anyone seeking conveyancing services. If I'm ever lucky enough to buy again in Sydney, you've got my business Tina.", 'created_at' => '2024-05-13'],
            ['name' => 'Felipe Rios Ribeiro', 'time_ago' => '7 months ago', 'review_body' => "Tina was fantastic and helped us in a time when we needed urgent support. Not only it was our first home purchase, but we had one day to find a new solicitor and she didn’t hesitate to jump in. She hit the ground running and working with her was the best thing that could’ve happened to us. Not only she was professional and responsive, but also had a caring and patient approach to ensure we were comfortable each step of the way. She answered my (many many) questions patiently and ensured there were no blind spots in our first home purchase journey. We felt much more confident with her guidance, support and advice. Today our property settled and we’re beyond happy. Thanks a lot!", 'created_at' => '2023-11-03'],
            ['name' => 'Stephanie Freeman', 'time_ago' => 'a year ago', 'review_body' => "Thank you so much Tina for all your help during the sale of my new property! Tina was absolutely fantastic during the process, and everything was smooth sailing from the first call. Her communication and knowledge really took the stress away from my end, not to mention her warm personality. I would highly recommend using Tina for any conveyancing needs.", 'created_at' => '2023-06-03'],
            ['name' => 'Kerri-Ann', 'time_ago' => '11 months ago', 'review_body' => "Tina has acted for us in both the purchase and sale of a property. Neither were straightforward but she dealt easily and reassuringly with the challenges of a complex old title purchase with boundary issues and a very extended settlement.", 'created_at' => '2023-07-03'],
            ['name' => 'Elizabeth Hill', 'time_ago' => '2 years ago', 'review_body' => "Tina was absolutely amazing. We bought a house through her and the vendor was quiet difficult to deal with but Tina used her knowledge of the law and her people skills to get the sale across the line with good terms for us. She was a star.", 'created_at' => '2022-06-03'],
            ['name' => 'Monica Tirkey', 'time_ago' => '10 months ago', 'review_body' => "Thank you so much Tina for your assistance in securing my first home in Sydney. Tina was very thorough and explained everything from beginning to the end, step by step. She also advices on what reports to get and by whom. Her network of people is this field made the whole experience very safe. Thank you!", 'created_at' => '2023-08-03'],
            ['name' => 'J Shcher', 'time_ago' => '2 years ago', 'review_body' => "Tina was fantastic. Couldn't recommend her highly enough. We sold two properties with Tina and she helped us navigate through the sales during pandemic where we had to cancel campaigns, then start again. She was always available, very professional and supportive.", 'created_at' => '2022-06-03'],
            ['name' => 'Emma Meng Cai (才萌)', 'time_ago' => '4 years ago', 'review_body' => "Tina is very thorough and experienced in property buying and selling. We were close to buying a home and asked Tina to review the contract last minute. She alerted us within a day that the extension was built without council approval, saving us from a potential headache.", 'created_at' => '2020-06-03'],
            ['name' => 'Carolynne Hunter', 'time_ago' => '2 years ago', 'review_body' => "I cannot recommend Tina highly enough. She has been a delight to work with on the sale of our home, she helped us find a rental while our new home was being constructed and then the finalisation of paperwork on our new home. Everything was seamless.", 'created_at' => '2022-06-03'],
            ['name' => 'Kim Allan', 'time_ago' => '4 years ago', 'review_body' => "I have used Landona Conveyancing twice in the past year. Their service went above and beyond mere paperwork. I have found them to be generous with their time and advice. This was a difficult time in my life and Landona provided the support, guidance, and expertise needed.", 'created_at' => '2020-06-03'],
            ['name' => 'Catherine Chung', 'time_ago' => '2 years ago', 'review_body' => "Tina, you are fantastic looking after me in both the sale last year and again the purchase this year. Always with a cheerful voice, positive attitude and proactiveness.", 'created_at' => '2022-06-03'],
            ['name' => 'J Perera', 'time_ago' => 'a year ago', 'review_body' => "Thank you, Tina, we can’t thank you enough for your experienced and helpful assistance with our property purchase. Thank you for the in-depth explanations, prompt attendance to our every query, very reasonable fees and overall lovely dealings with you in taking the stress out of our property purchasing experience.", 'created_at' => '2023-06-03'],
            ['name' => 'hayley J', 'time_ago' => '3 years ago', 'review_body' => "Tina has managed two property sales for me and has been so helpful, patiently explaining everything I need to know. I’d definitely recommend Tina to any friends looking for an efficient, friendly conveyancer.", 'created_at' => '2021-06-03'],
            ['name' => 'Alison Cook', 'time_ago' => '4 years ago', 'review_body' => "Landona Conveyancing - friendly, helpful and thorough service to guide you through selling and buying of property. Thank you!", 'created_at' => '2020-06-03'],
        ];

        foreach ($reviews as $review) {
            DB::table('reviews')->updateOrInsert(
                [
                    'name' => $review['name'],
                    'created_at' => Carbon::parse($review['created_at'])
                ],
                [
                    'time_ago' => $review['time_ago'],
                    'review_body' => $review['review_body'],
                ]
            );
        }
    }
}
