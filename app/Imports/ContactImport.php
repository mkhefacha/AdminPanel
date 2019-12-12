<?php

namespace App\Imports;
use auth;
use App\ContactContact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
class ContactImport implements ToModel, WithBatchInserts, WithChunkReading
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ContactContact([
            'contact_name' => $row[0],
            'contact_phone_1'=>$row[1],
            'contact_phone_2'=>$row[2],
            'contact_email'=>$row[3],
            'company_id' =>auth()->user()->company_id,
            'user_id' =>auth()->id(),
            'contact_creer'=>auth()->user()->name,


        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }


}

