<?php

namespace App\Imports;

use App\Models\ResultMhany;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

class ResultMahany implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new ResultMhany([
           'code'     => $row[0],
           'name'    => $row[1],
           'name_of_mother'    => $row[2],
           'section'    => $row[3],
           'city'    => $row[4],
           'total_subject_general'    => $row[5],
           'total_subject_matter'    => $row[6],
           'Percent'    => $row[7],
           'behavior'    => $row[8],
           'Result'    => $row[9],

        ]);
    }
}
