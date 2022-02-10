<?php

namespace App\Imports;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;

class LeadsImport implements ToModel, WithHeadingRow
{
    use Importable;

    public $transmission_id;
    public function __construct($transmission_id)
    {
        $this->transmission_id = $transmission_id;
    }

    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        $status = true;
        if(!preg_match('/^[a-z0-9 .\-9äöüÄÖÜß-]+$/i', $row['company_name'])) //true if has error
        {
          $status = false;
        }
        $lead = new Lead([
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
            'transmission_id' => $this->transmission_id,
            'status' => $status
        ]);
        return $lead;
    }

     public function rules(): array
    {
        return [
            'name' => ['required'],
        ];
    }


}
