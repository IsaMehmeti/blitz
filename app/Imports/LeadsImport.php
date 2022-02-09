<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeadsImport implements ToModel, WithHeadingRow
{
    public $transmission_id;
    public function __construct($transmission_id)
    {
        $this->transmission_id = $transmission_id;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lead([
            'location' => $row['location'],
            'company_name' => $row['company_name'],
            'sex' => $row['sex'],
            'name' => $row['name'],
            'surname' => $row['surname'],
            'addres' => $row['addres'],
            'plz' => $row['plz'],
            'ort' => $row['ort'],
            'mobil' => $row['mobil'],
            'telefon' => $row['telefon'],
            'email' => $row['email'],
            'comment' => $row['comment'],
            'date' => $row['date'],
            'agent_name' => $row['agent_name'],
            'transmission_id' => $this->transmission_id
        ]);
    }
}
