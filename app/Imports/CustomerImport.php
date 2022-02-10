<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (Customer::where('name', $row['name'])->where('surname', $row['surname'])->exists()){
            return null;
        }
        return new Customer([
            'location' => $row['location'],
            'name' => $row['name'],
            'surname' => $row['surname'],
            'company_name' => $row['company_name'],
            'sex' => $row['sex'],
            'email' => $row['email'],
            'mobil' => $row['mobil'],
            'addres' => $row['addres'],
            'comment' => $row['comment'],
            'plz' => $row['plz'],
            'ort' => $row['ort'],
            'created_by_agent' => $row['agent_name'],
        ]);
    }
}
