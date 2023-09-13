<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Center;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Center::insert([
            [
                'id'=>'1',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Ahemdabad',
                'tier'=>'2',
                'status'=>'1'
            ],
            [
                'id'=>'2',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Surat',
                'tier'=>'2',
                'status'=>'1'
            ],
            [
                'id'=>'3',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Bhavnagar',
                'tier'=>'3',
                'status'=>'1'
            ],
            [
                'id'=>'4',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Bharuch',
                'tier'=>'3',
                'status'=>'1'
            ],
            [
                'id'=>'5',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Vadodara',
                'tier'=>'3',
                'status'=>'1'
            ],
            [
                'id'=>'6',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Rajkot',
                'tier'=>'3',
                'status'=>'1'
            ],
            [
                'id'=>'7',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Anand',
                'tier'=>'3',
                'status'=>'1'
            ],
            [
                'id'=>'8',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Mehsana',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'9',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Valsad',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'10',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Bhuj',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'11',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Ankleshwar',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'12',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Vapi',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'13',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Palanpur',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'14',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Jamnagar',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'15',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Porbandar',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'16',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Junagad',
                'tier'=>'4',
                'status'=>'1'
            ],
            [
                'id'=>'17',
                'state_id'=>'3',
                'city'=>'Others',
                'sub_city'=>'Morbi',
                'tier'=>'4',
                'status'=>'1'
            ]
        ]);
        $maharashtra = [
            ['name'=>'Colaba',	'tire'=>'1'],
            ['name'=>'Matunga',	'tire'=>'1'],
            ['name'=>'Prabhadevi',	'tire'=>'1'],
            ['name'=>'Bandra',	'tire'=>'2'],
            ['name'=>'Vile Parle',	'tire'=>'2'],
            ['name'=>'Juhu',	'tire'=>'2'],
            ['name'=>'Andheri',	'tire'=>'2'],
            ['name'=>'Malad',	'tire'=>'2'],
            ['name'=>'Kandhivali',	'tire'=>'2'],
            ['name'=>'Dahisar',	'tire'=>'2'],
            ['name'=>'Powai',	'tire'=>'2'],
            ['name'=>'Chembur',	'tire'=>'2'],
            ['name'=>'Mulund',	'tire'=>'2']
        ];
        foreach ($maharashtra as $value) {
            Center::insert([
                'state_id'=>'1',
                'city'=>'Mumbai',
                'sub_city'=>$value['name'],
                'tier'=> $value['tire'],
                'status'=> '1'
            ]);
        }

        $navi = [['name'=>'Vashi', 'tire'=>	'2'],
        ['name'=>'Airoli', 'tire'=>	'2'],
        ['name'=>'Nerul', 'tire'=>	'2'],
        ['name'=>'Kharghar', 'tire'=>	'2']];

        foreach ($navi as $value) {
            Center::insert([
                'state_id'=>'1',
                'city'=>'Navi Mumbai',
                'sub_city'=>$value['name'],
                'tier'=> $value['tire'],
                'status'=> '1'
            ]);
        }

        $pune = [['name'=>'Hinjewadi', 'tire'=>	'2'],
        ['name' => 'Viman Nagar', 'tire'=>'2'],
        ['name'=>'Magarpatta', 'tire'=>	'2'],
        ['name'=> 'Shivaji Nagar', 'tire'=>'2'],
        ['name' => 'Pimpri Chinchwad',	'tire'=>'3'],
        ['name'=>'Kothrud', 'tire'=>	'3'],
        ['name'=>'Bibwewadi', 'tire'=>	'3']];

        foreach ($pune as $value) {
            Center::insert([
                'state_id'=>'1',
                'city'=>'Pune',
                'sub_city'=>$value['name'],
                'tier'=> $value['tire'],
                'status'=> '1'
            ]);
        }

        $other = [
            ['name'=>'Nashik', 'tire'=>	'3'],
            ['name'=>'Aurangabad', 'tire'=>	'3'],
            ['name'=>'Nagpur', 'tire'=>	'3'],
            ['name'=>'Kalyan Dombivili', 'tire'=>	'3'],
            ['name'=>'Vasai Virar', 'tire'=>	'3'],
            ['name'=>'Solapur', 'tire'=>	'4'],
            ['name'=>'Satara', 'tire'=>	'4'],
            ['name'=>'Sangli', 'tire'=>	'4'],
            ['name'=>'Jalgaon', 'tire'=>	'4'],
            ['name'=>'Akola', 'tire'=>	'4'],
            ['name'=>'Ratnagiri', 'tire'=>	'4'],
            ['name'=>'Nanded', 'tire'=>	'4'],
            ['name'=>'Latur', 'tire'=>	'4'],
            ['name'=>'Dhule', 'tire'=>	'4'],
            ['name'=>'Gondia', 'tire'=>	'4'],
            ['name'=>'Wardha', 'tire'=>	'4'],
            ['name'=>'Yavatmal', 'tire'=>	'4'],
            ['name'=>'Chandrapur', 'tire'=>	'4'],
            ['name'=>'Kolhapur', 'tire'=>	'4'],
            ['name'=>'Amravati', 'tire'=>	'4']
        ];

        foreach ($other as $value) {
            Center::insert([
                'state_id'=>'1',
                'city'=>'Other',
                'sub_city'=>$value['name'],
                'tier'=> $value['tire'],
                'status'=> '1'
            ]);
        }

        $mp = [
            ['name'=>'Indore', 'tire'=>	'3'],
            ['name'=>'Bhopal', 'tire'=>	'3'],
            ['name'=>'Jabalpur', 'tire'=>	'3'],
            ['name'=>'Gwalior', 'tire'=>	'3'],
            ['name'=>'Dewas', 'tire'=>	'4'],
            ['name'=>'Ujjain', 'tire'=>	'4'],
            ['name'=>'Ratlam', 'tire'=>	'4'],
            ['name'=>'Itarsi', 'tire'=>	'4'],
            ['name'=>'Guna', 'tire'=>	'4'],
            ['name'=>'Shivpuri', 'tire'=>	'4'],
            ['name'=>'Bhuranpur', 'tire'=>	'4'],
            ['name'=>'Khandva', 'tire'=>	'4'],
            ['name'=>'Morena', 'tire'=>	'4'],
            ['name'=>'Sehore', 'tire'=>	'4'],
            ['name'=>'Rewa', 'tire'=>	'4'],
            ['name'=>'Satna', 'tire'=>	'4'],
            ['name'=>'Sagar', 'tire'=>	'4']
        ];

        foreach ($mp as $value) {
            Center::insert([
                'state_id'=>'4',
                'city'=>'MP-Other',
                'sub_city'=>$value['name'],
                'tier'=> $value['tire'],
                'status'=> '1'
            ]);
        }

        $goa = [
            ['name'=>'Panaji', 'tire'=>	'3'],
            ['name'=>'Madgaon', 'tire'=>	'3'],
            ['name'=>'Vasco', 'tire'=>	'4'],
            ['name'=>'Ponda', 'tire'=>	'4'],
            ['name'=>'Others', 'tire'=>	'4']
        ];

        foreach ($goa as  $value) {
            Center::insert([
                'state_id'=>'2',
                'city'=>'Goa-Other',
                'sub_city'=>$value['name'],
                'tier'=> $value['tire'],
                'status'=> '1'
            ]);
        }
    }
}
