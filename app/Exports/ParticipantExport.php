<?php

namespace App\Exports;

use App\Models\Participant;
use App\Models\TeacherClassRequest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class ParticipantExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    private $classid;
    public function setClassId(int $classid)
    {
        $this->classid = $classid;
    }

    public function headings():array{
        return[
            'Id',
           'Date and Time',
            'Module Name',
            'First Name',
            'Last Name',
            'Age',
            'Whatsapp No',
            'Mobile No',
            'Email',
            'Price',
            'Payment Status' ,
            
        ];
    } 
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $m = DB::table('participants as p')
        ->join('teacher_class_requests as ta', 'p.class_req_id', '=', 'ta.id')
        ->join('class_modules as c', 'ta.class_module_id', '=', 'c.id')
        ->where('ta.id',$this->classid)
        ->select('p.id','p.created_at','c.module_name','p.first_name','p.last_name','p.age','p.whatsapp_no', 'p.mobile','p.email','p.price','p.payment_status')
        ->get();
       
        
        foreach($m as $key=>$value)
        {
           
            $m[$key]->id = $key+1;
        }
       
        return $m;
        // return Participant::where('class_req_id',$this->classid)->select('id','created_at','class_req_id','first_name','last_name','age','whatsapp_no', 'mobile','price','payment_status')->get();
    }
}
