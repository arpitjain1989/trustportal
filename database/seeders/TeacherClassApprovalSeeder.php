<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeacherApproval;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;


class TeacherClassApprovalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var = [
            [
                "id" => "1",
                "first_name" => "Arvind", "last_name" => "Falke",
                "batch" => "2013",
                "hyt_id" => "HYT13-009",
                "state" => "Maharashtra",
                "email" => "falke.arvind@gmail.com",
                "mobile" => "9819590098",
                "password" => Hash::make('password')
            ],
            [
                "id" => "3",
                "first_name" => "Megha", "last_name" => "Raina Runwal",
                "batch" => "2013",
                "hyt_id" => "HYT13-047",
                "state" => "Maharashtra",
                
                "email" => "megharunwal@gmail.com",
                "mobile" => "9819180354",
                "password" => Hash::make('password')
            ],
            [
                "id" => "4",
                "first_name" => "Amit", "last_name" => "Gautam",
                "batch" => "2015",
                "hyt_id" => "HYT15-005",
                "state" => "Madhya Pradesh",
                
                "email" => "gautamsdl@gmail.com",
                "mobile" => "9893759017",
                "password" => Hash::make('password')
            ],
            [
                "id" => "5",
                "first_name" => "Durgesh", "last_name" => "Lokhande",
                "batch" => "2015",
                "hyt_id" => "HYT15-023",
                "state" => "Maharashtra",
                
                "email" => "durgesh.lokhande@gmail.com",
                "mobile" => "9766249864",
                "password" => Hash::make('password')
            ],
            [
                "id" => "6",
                "first_name" => "Manohar", "last_name" => "Gad",
                "batch" => "2015",
                "hyt_id" => "HYT15-051",
                "state" => "Maharashtra",
                
                "email" => "yogharsh4wellbeing@gmail.com",
                "mobile" => "9870327478",
                "password" => Hash::make('password')
            ],
            [
                "id" => "7",
                "first_name" => "Viraj", "last_name" => "Bhagat",
                "batch" => "2015",
                "hyt_id" => "HYT15-110",
                "state" => "Maharashtra",
                
                "email" => "bhagatviraj@gmail.com",
                "mobile" => "9920952315",
                "password" => Hash::make('password')
            ],
            [
                "id" => "8",
                "first_name" => "Adwait", "last_name" => "Anjurkar",
                "batch" => "2016",
                "hyt_id" => "HYT16-001",
                "state" => "Maharashtra",
                
                "email" => "a.s.anjurkar@gmail.com",
                "mobile" => "9594124777",
                "password" => Hash::make('password')
            ],
            [
                "id" => "9",
                "first_name" => "Ghanesh", "last_name" => "Gandhi",
                "batch" => "2016",
                "hyt_id" => "HYT16-043",
                "state" => "Maharashtra",
                
                "email" => "ghaneshg@gmail.com",
                "mobile" => "8107052383",
                "password" => Hash::make('password')
            ],
            [
                "id" => "10",
                "first_name" => "Meenamani", "last_name" => "MS",
                "batch" => "2016",
                "hyt_id" => "HYT16-074",
                "state" => "Maharashtra",
                
                "email" => "msmeenamani@gmail.com",
                "mobile" => "9486195869",
                "password" => Hash::make('password')
            ],
            [
                "id" => "11",
                "first_name" => "Ram", "last_name" => "Sahu",
                "batch" => "2016",
                "hyt_id" => "HYT16-100",
                "state" => "Madhya Pradesh",
                
                "email" => "ram.sahu23@gmail.com",
                "mobile" => "9755701608",
                "password" => Hash::make('password')
            ],
            [
                "id" => "12",
                "first_name" => "Samit", "last_name" => "Pathak",
                "batch" => "2016",
                "hyt_id" => "HYT16-105",
                "state" => "Maharashtra",
                
                "email" => "spathak135@hotmail.com",
                "mobile" => "9920657440",
                "password" => Hash::make('password')
            ],
            [
                "id" => "13",
                "first_name" => "Shambhava", "last_name" => "Agnihotri",
                "batch" => "2016",
                "hyt_id" => "HYT16-003",
                "state" => "Maharashtra",
                
                "email" => "shambhava.a@gmail.com",
                "mobile" => "8788624467",
                "password" => Hash::make('password')
            ],
            [
                "id" => "14",
                "first_name" => "Subodh", "last_name" => "Jathar",
                "batch" => "2016",
                "hyt_id" => "HYT16-116",
                "state" => "Maharashtra",
                
                "email" => "subodh.jathar@gmail.com",
                "mobile" => "9167532432",
                "password" => Hash::make('password')
            ],
            [
                "id" => "15",
                "first_name" => "Kaulina", "last_name" => "Rudra",
                "batch" => "2017",
                "hyt_id" => "HYT17-167",
                "state" => "Goa",
                
                "email" => "kaulinarudra@gmail.com",
                "mobile" => "9999573974",
                "password" => Hash::make('password')
            ],
            [
                "id" => "16",
                "first_name" => "Makarand", "last_name" => "Mode",
                "batch" => "2017",
                "hyt_id" => "HYT17- 070",
                "state" => "Maharashtra",
                
                "email" => "makarand.mode04@gmail.com",
                "mobile" => "7738157770",
                "password" => Hash::make('password')
            ],
            [
                "id" => "17",
                "first_name" => "Neetee", "last_name" => "Alhuwalia",
                "batch" => "2017",
                "hyt_id" => "HYT17-091",
                "state" => "Maharashtra",
                
                "email" => "ahluwalianeetee@gmail.com",
                "mobile" => "7807713013",
                "password" => Hash::make('password')
            ],
            [
                "id" => "18",
                "first_name" => "Omkar", "last_name" => "Kamath",
                "batch" => "2017",
                "hyt_id" => "HYT'17-99",
                "state" => "Maharashtra",
                
                "email" => "omikamath91@gmail.com",
                "mobile" => "8928217396",
                "password" => Hash::make('password')
            ],
            [
                "id" => "19",
                "first_name" => "Trupti", "last_name" => "Jadhav",
                "batch" => "2017",
                "hyt_id" => "HYT17-165",
                "state" => "Maharashtra",
                
                "email" => "trups723@gmail.com",
                "mobile" => "9172354696",
                "password" => Hash::make('password')
            ],
            [
                "id" => "20",
                "first_name" => "Tuheena", "last_name" => "Singh",
                "batch" => "2017",
                "hyt_id" => "HYT17-166",
                "state" => "Gujarat",
                
                "email" => "tuheena@gmail.com",
                "mobile" => "8128398409",
                "password" => Hash::make('password')
            ],
            [
                "id" => "21",
                "first_name" => "Vandana", "last_name" => "Kamath",
                "batch" => "2017",
                "hyt_id" => "HYT17-171",
                "state" => "Maharashtra",
                
                "email" => "ajvandana37@gmail.com",
                "mobile" => "9686225016",
                "password" => Hash::make('password')
            ],
            [
                "id" => "22",
                "first_name" => "Madhavi", "last_name" => "Patil",
                "batch" => "2018",
                "hyt_id" => "HYT18-075",
                "state" => "Maharashtra",
                
                "email" => "madhavicollective@gmail.com",
                "mobile" => "8097532357",
                "password" => Hash::make('password')
            ],
            [
                "id" => "23",
                "first_name" => "Pushpangi", "last_name" => "Devale",
                "batch" => "2018",
                "hyt_id" => "HYT18-118",
                "state" => "Maharashtra",
                
                "email" => "shree.devale@gmail.com",
                "mobile" => "9172685813",
                "password" => Hash::make('password')
            ],
            [
                "id" => "24",
                "first_name" => "Sudeep", "last_name" => "Gupta",
                "batch" => "2018",
                "hyt_id" => "HYT18-150",
                "state" => "Gujarat",
                
                "email" => "sudeipgupta009@gmail.com",
                "mobile" => "9016325499",
                "password" => Hash::make('password')
            ],
            [
                "id" => "25",
                "first_name" => "Dhanashree", "last_name" => "Joshi",
                "batch" => "2019",
                "hyt_id" => "HYT19-032",
                "state" => "Maharashtra",
                
                "email" => "dhanashree.hatha@gmail.com",
                "mobile" => "8390397964",
                "password" => Hash::make('password')
            ],
            [
                "id" => "26",
                "first_name" => "Isha", "last_name" => "Gupta",
                "batch" => "2019",
                "hyt_id" => "HYT19-047",
                "state" => "Gujrat",
                
                "email" => "yogaraas@gmail.com",
                "mobile" => "9773886667",
                "password" => Hash::make('password')
            ],
            [
                "id" => "27",
                "first_name" => "Isha", "last_name" => "Sankhala",
                "batch" => "2019",
                "hyt_id" => "HYT19-048",
                "state" => "Maharashtra",
                
                "email" => "isha.sankhala@gmail.com",
                "mobile" => "8080487196",
                "password" => Hash::make('password')
            ],
            [
                "id" => "28",
                "first_name" => "Karan", "last_name" => "Shah",
                "batch" => "2019",
                "hyt_id" => "HYT19-065",
                "state" => "Maharashtra",
                
                "email" => "karan2010shah@gmail.com",
                "mobile" => "9619701066",
                "password" => Hash::make('password')
            ],
            [
                "id" => "29",
                "first_name" => "Rohit", "last_name" => "Kothari",
                "batch" => "2019",
                "hyt_id" => "HYT19-129",
                "state" => "Maharashtra",
                
                "email" => "rohitkothari85@gmail.com",
                "mobile" => "8884601166",
                "password" => Hash::make('password')
            ],
            [
                "id" => "30",
                "first_name" => "Saurabh", "last_name" => "Gupta",
                "batch" => "2019",
                "hyt_id" => "HYT19-134",
                "state" => "Gujarat",
                
                "email" => "Saurabh2712@gmail.com",
                "mobile" => "93286047064",
                "password" => Hash::make('password')
            ],
            [
                "id" => "31",
                "first_name" => "Garima", "last_name" => "Mishra",
                "batch" => "2020",
                "hyt_id" => "HYT20-016",
                "state" => "Maharashtra",
                
                "email" => "garima03mishra@gmail.com",
                "mobile" => "9820757031",
                "password" => Hash::make('password')
            ],
            [
                "id" => "32",
                "first_name" => "Nikita", "last_name" => "Mandalia",
                "batch" => "2020",
                "hyt_id" => "HYT20-036",
                "state" => "Maharashtra",
                
                "email" => "nikita.m84@gmail.com",
                "mobile" => "9820226097",
                "password" => Hash::make('password')
            ],
            [
                "id" => "33",
                "first_name" => "Rutvi", "last_name" => "Raimagia",
                "batch" => "2020",
                "hyt_id" => "HYT20-052",
                "state" => "Gujarat",
                
                "email" => "rutviraimagia@gmail.com",
                "mobile" => "9974754523",
                "password" => Hash::make('password')
            ],
            [
                "id" => "34",
                "first_name" => "viruj", "last_name" => "tambe",
                "batch" => "2016",
                "hyt_id" => "HYT16-153",
                "state" => "Maharashtra",
                
                "email" => "virujtambe@gmail.com",
                "mobile" => "9860888238",
                "password" => Hash::make('password')
            ],
            [
                "id" => "35",
                "first_name" => "Suryaja", "last_name" => "",
                "batch" => "2015",
                "hyt_id" => "HYT-15-055",
                "state" => "Maharashtra",
                
                "email" => "Suryajanow@gmail.com",
                "mobile" => "9119520387",
                "password" => Hash::make('password')
            ],
            [
                "id" => "36",
                "first_name" => "Janhavi", "last_name" => "Singh",
                "batch" => "2022",
                "hyt_id" => "HYT21-091",
                "state" => "Gujarat",
                
                "email" => "Janhavisingh62@gmail.com",
                "mobile" => "8319377065",
                "password" => Hash::make('password')
            ]
            ];

            foreach ($var as $value) {
                // dd($value);
                TeacherApproval::create([
                    'teacher_id' => $value['id'],
                    'status_id' => '1'
                ]);
            }
        
    }
}
