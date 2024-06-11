<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            ['question' => 'What is conveyancing?', 'answer' => "Conveyancing is the legal process of transferring property ownership from one person to another. It involves various steps, including preparing and reviewing contracts, conducting property searches, and managing the settlement process. Using a licensed conveyancer ensures all legal aspects are handled professionally, minimizing risks and ensuring compliance with relevant laws and regulations."],
            ['question' => 'Why should I use a licensed conveyancer?', 'answer' => "A licensed conveyancer ensures that all legal aspects of your property transaction are handled professionally, minimizing risks and ensuring compliance with relevant laws and regulations. They provide the necessary expertise to navigate complex property transactions and protect your interests."],
            ['question' => 'How long does the conveyancing process take?', 'answer' => "Typically, the conveyancing process takes 4-12 weeks, but it can vary based on the complexity of the transaction and other factors."],
            ['question' => 'What is the difference between a conveyancer and a solicitor?', 'answer' => "Both conveyancers and solicitors can handle property transactions, but solicitors are qualified to offer a broader range of legal services. Conveyancers specialize in property law and may be more cost-effective for straightforward transactions."],
            ['question' => 'What are the costs involved in conveyancing?', 'answer' => "Conveyancing costs typically include professional fees for the conveyancer, search fees, and government fees for property registration and stamp duty. Always ask for a detailed quote upfront to understand all potential costs."],
            ['question' => 'What is a cooling-off period?', 'answer' => "A cooling off period is a timeframe during which the buyer can withdraw from the contract of sale without significant penalties. In NSW, the standard cooling-off period for residential property is five business days."],
            ['question' => 'What happens on settlement day?', 'answer' => "On settlement day, the buyer’s conveyancer will transfer the purchase money to the seller, and the seller’s conveyancer will hand over the title documents. The property’s ownership officially changes hands, and the buyer can take possession of the property."],
            ['question' => 'Do I need a conveyancer if I\'m buying off the plan?', 'answer' => "Yes, having a conveyancer for off the plan purchases is crucial. They will review the contract, ensure all terms are fair, and help you understand your rights and obligations before and after the property's construction."],
            ['question' => 'What is PEXA and how does it work?', 'answer' => "PEXA (Property Exchange Australia) is an online property exchange network that allows for digital property settlements. It helps streamline the conveyancing process, reducing paperwork and settlement delays. [PEXA (Property Exchange Australia)](https://www.pexa.com.au/)"]
        ];

        foreach ($faqs as $faq) {
            DB::table('faqs')->updateOrInsert(
                ['question' => $faq['question']],
                ['answer' => $faq['answer'], 'created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
