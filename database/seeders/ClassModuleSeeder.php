<?php

namespace Database\Seeders;

use App\Models\ClassModule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ClassModule::insert([
            [
                "id" => 1,
                "program_type" => "1",
                "module_name" => "Isha Upa-yoga",
                "practice_element" => "All Upa-yoga practices",
                "duration" => 4,
                "min_session" => 2,
                "tentative" => 1500,
                "tier2" => 1200,
                "tier3" => 1000,
                "tier4" => 800
            ],
            [
                "id" => 2,
                "program_type" => "1",
                "module_name" => "Surya Kriya",
                "practice_element" => "Surya Kriya (With Sushanti)\n(Optional=> Subtle Body & Partner Corrections)",
                "duration" => 7,
                "min_session" => 2,
                "tentative" => 3750,
                "tier2" => 3500,
                "tier3" => 3000,
                "tier4" => 2500
            ],
            [
                "id" => 3,
                "program_type" => "2",
                "module_name" => "Surya Kriya ",
                "practice_element" => "Surya Kriya Review",
                "duration" => "02:30",
                "min_session" => 1,
                "tentative" => 1500,
                "tier2" => 1500,
                "tier3" => 1200,
                "tier4" => 1000
            ],
            [
                "id" => 4,
                "program_type" => "1",
                "module_name" => "Surya Kriya + Pawanmuktasana ",
                "practice_element" => "Surya Kriya + Pawanmuktasana",
                "duration" => "07:30",                
                "min_session" => 3,
                "tentative" => 4000,
                "tier2" => 3750,
                "tier3" => 3250,
                "tier4" => 2750
            ],
            [
                "id" => 5,
                "program_type" => "1",
                "module_name" => "Surya Kriya + Surya Shakti",
                "practice_element" => "Surya Kriya + Surya Shakti ",
                "duration" => 9,                
                "min_session" => 3,
                "tentative" => 4750,
                "tier2" => 4500,
                "tier3" => 4000,
                "tier4" => 3500
            ],
            [
                "id" => 6,
                "program_type" => "1",
                "module_name" => "Surya Shakti",
                "practice_element" => "Surya Shakti Beginner",
                "duration" => "03:30",                
                "min_session" => 1,
                "tentative" => 2750,
                "tier2" => 2500,
                "tier3" => 2000,
                "tier4" => 1500
            ],
            [
                "id" => 7,
                "program_type" => "1",
                "module_name" => "Surya Shakti Condensed ",
                "practice_element" => "Surya Shakti Condendsed (for those who know SK)",
                "duration" => 2,                
                "min_session" => 1,
                "tentative" => 2000,
                "tier2" => 1750,
                "tier3" => 1250,
                "tier4" => 750
            ],
            [
                "id" => 8,
                "program_type" => "1",
                "module_name" => "Angamardana",
                "practice_element" => "Angamardana ",
                "duration" => 9,                
                "min_session" => 3,
                "tentative" => 4500,
                "tier2" => 4000,
                "tier3" => 3500,
                "tier4" => 3000
            ],
            [
                "id" => 9,
                "program_type" => "2",
                "module_name" => "Angamardana ",
                "practice_element" => "Angamardana Review",
                "duration" => 3,
                "min_session" => 1,
                "tentative" => 2000,
                "tier2" => 2000,
                "tier3" => 1500,
                "tier4" => 1200
            ],
            [
                "id" => 10,
                "program_type" => "1",
                "module_name" => "Yogasanas",
                "practice_element" => "Yogasanas Beginners (Upto Matsyendrasana)\n(Optional=> Subtle Body)",
                "duration" => 10,                
                "min_session" => 4,
                "tentative" => 4250,
                "tier2" => 4000,
                "tier3" => 3500,
                "tier4" => 3000
            ],
            [
                "id" => 11,
                "program_type" => "1",
                "module_name" => "Yogasanas (With Advance Asanas)",
                "practice_element" => "Yogasanas Advanced \n(With Sarvangasana \/ Spinal Twist \/ Mandukasana)\n(Optional=> Subtle Body \/ Mayuruasana)",
                "duration" => 14,                
                "min_session" => 4,
                "tentative" => 5000,
                "tier2" => 4500,
                "tier3" => 4000,
                "tier4" => 3500
            ],
            [
                "id" => 12,
                "program_type" => "2",
                "module_name" => "Yogasanas + Learn Advance Asana",
                "practice_element" => "Yogasanas Beginner Review + Learn Yogasanasa Advanced",
                "duration" => 6,
                "min_session" => 2,
                "tentative" => 2500,
                "tier2" => 2500,
                "tier3" => 2000,
                "tier4" => 1500
            ],
            [
                "id" => 13,
                "program_type" => "2",
                "module_name" => "Yogasanas With Advance Asanas",
                "practice_element" => "Yogasanas Advanced Review",
                "duration" => "03:30",
                "min_session" => 1,
                "tentative" => 2000,
                "tier2" => 2000,
                "tier3" => 1500,
                "tier4" => 1200
            ],
            [
                "id" => 14,
                "program_type" => "1",
                "module_name" => "Bhuta Shuddhi",
                "practice_element" => "Bhuta Shuddhi (inclusive of Kit)",
                "duration" => "01:30",
                "min_session" => 1,
                "tentative" => 4000,
                "tier2" => 4000,
                "tier3" => 3700,
                "tier4" => 3700
            ],
            [
                "id" => 15,
                "program_type" => "2",
                "module_name" => "Bhuta Shuddhi Review",
                "practice_element" => "-",
                "duration" => 0.3,
                "min_session" => 1,
                "tentative" => 500,
                "tier2" => 500,
                "tier3" => 400,
                "tier4" => 300
            ],
            [
                "id" => 16,
                "program_type" => "1",
                "module_name" => "Jala Neti",
                "practice_element" => "Jala Neti (inclusive of Pot)",
                "duration" => 1,
                "min_session" => 1,
                "tentative" => 2250,
                "tier2" => 2000,
                "tier3" => 1750,
                "tier4" => 1650
            ],
            [
                "id" => 17,
                "program_type" => "1",
                "module_name" => "Bhastrika Kriya\n(Pre-requisite=> Angamardana\/Surya Kriya\/Yogasanas",
                "practice_element" => "Bhastrika Kriya",
                "duration" => 1,
                "min_session" => 1,
                "tentative" => 1200,
                "tier2" => 1000,
                "tier3" => 800,
                "tier4" => 700
            ],
            [
                "id" => 18,
                "program_type" => "1",
                "module_name" => "Shanmukhi Mudra",
                "practice_element" => "Shanmukhi Mudra",
                "duration" => "01:30",
                "min_session" => 1,
                "tentative" => 1750,
                "tier2" => 1500,
                "tier3" => 1250,
                "tier4" => 1000
            ],
            [
                "id" => 19,
                "program_type" => "1",
                "module_name" => "Sunayana + Upa Yoga",
                "practice_element" => "Eye Care Practices plus Upa-yoga",
                "duration" => 6,
                "min_session" => 3,
                "tentative" => 3000,
                "tier2" => 3000,
                "tier3" => 2500,
                "tier4" => 2000
            ],
            [
                "id" => 20,
                "program_type" => "1",
                "module_name" => "Sunayana\n(Pre-requisite=> Upa Yoga\/Angamardana\/Surya Kriya\/Yogasanas",
                "practice_element" => "Eye Care Practices alone (assuming they already learned Hatha Yoga practices previously.",
                "duration" => "02:30",
                "min_session" => 1,
                "tentative" => 2250,
                "tier2" => 2000,
                "tier3" => 1800,
                "tier4" => 1500
            ],
            [
                "id" => 21,
                "program_type" => "1",
                "module_name" => "Sleep Apnea",
                "practice_element" => "Yoga Namaskar, Uddyana Bandha, Nadi Shuddhi(IDY Version), Bhastrika Kriya, Isha Kriya",
                "duration" => "02:30",
                "min_session" => 1,
                "tentative" => 2250,
                "tier2" => 2000,
                "tier3" => 1800,
                "tier4" => 1500
            ],
            [
                "id" => 22,
                "program_type" => "1",
                "module_name" => "Pregnancy Module",
                "practice_element" => "Pregnancy Practices (By Certified Female Teachers)",
                "duration" => "05:15",
                "min_session" => 3,
                "tentative" => 4250,
                "tier2" => 4000,
                "tier3" => 3500,
                "tier4" => 3000
            ],
            [
                "id" => 23,
                "program_type" => "1",
                "module_name" => "Yogic Food",
                "practice_element" => "-",
                "duration" => 2,
                "min_session" => 1,
                "tentative" => 1400,
                "tier2" => 1200,
                "tier3" => 1000,
                "tier4" => 800
            ],
            [
                "id" => 24,
                "program_type" => "1",
                "module_name" => "Children's Upa Yoga",
                "practice_element" => "Any Combination of=> \n(Directional Movement, Knee, Squatting, Neck, Patangasana, Shishupalasana, Nadi Vibhajan, Vrikshasana, Veerabhadrasana, Nadi Shuddhi, AUM Chanting,Thoppukarnam, Intro, etc)",
                "duration" => 4,
                "min_session" => 2,
                "tentative" => 2250,
                "tier2" => 2000,
                "tier3" => 1750,
                "tier4" => 1500
            ],
            [
                "id" => 25,
                "program_type" => "1",
                "module_name" => "Children's Surya Shakti",
                "practice_element" => "Surya Shakti",
                "duration" => 5,
                "min_session" => 3,
                "tentative" => 3000,
                "tier2" => 2750,
                "tier3" => 2000,
                "tier4" => 1500
            ],
            [
                "id" => 26,
                "program_type" => "1",
                "module_name" => "Children's Angamardana",
                "practice_element" => "Angamardana",
                "duration" => 10,
                "min_session" => 5,
                "tentative" => 4500,
                "tier2" => 4000,
                "tier3" => 3500,
                "tier4" => 3000
            ],
            [
                "id" => 27,
                "program_type" => "1",
                "module_name" => "Children's Upa Yoga + Food Session",
                "practice_element" => "Any Combination of\n(Directional Movement, Knee, Squatting, Neck, Patangasana, Shishupalasana, Nadi Vibhajan, Vrikshasana, Veerabhadrasana, Nadi Shuddhi, AUM Chanting,Thoppukarnam, \n(Includes=> Intro, Food, Games)",
                "duration" => 6,
                "min_session" => 3,
                "tentative" => 3250,
                "tier2" => 3000,
                "tier3" => 2500,
                "tier4" => 2000
            ],
            [
                "id" => 28,
                "program_type" => "1",
                "module_name" => "Children's Surya Shakti + Food Session",
                "practice_element" => "Children’s Surya Shakti \n(Includes Intro, Food, Games)\n(optional=> Thoppukarnam, Nadi Shuddhi, Aum, etc)",
                "duration" => "06:45",
                "min_session" => 3,
                "tentative" => 3250,
                "tier2" => 3000,
                "tier3" => 2500,
                "tier4" => 2000
            ],
            [
                "id" => 29,
                "program_type" => "1",
                "module_name" => "Children's Surya Shakti + Upa Yoga + Food Session",
                "practice_element" => "Surya Shakti + Upa Yoga, Intro, Food, Games, Snacks\n(optional=> Thoppukarnam, Nadi Shuddhi, Aum, etc)",
                "duration" => 10,
                "min_session" => 5,
                "tentative" => 4250,
                "tier2" => 4000,
                "tier3" => 3500,
                "tier4" => 3000
            ]
        ]);
    }
}
