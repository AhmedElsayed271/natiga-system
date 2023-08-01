<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\ResultThanwayAddadyAkradAhrary;
use App\Models\ResultThanwayAddadyArabyAhrary;

class NatigaAhrarAraby implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new ResultThanwayAddadyAkradAhrary([
            'code'     => $row[0],
            'city'    => $row[1],
            'name'    => $row[2],
            'name_of_mother'    => $row[3],
            'behavior'    => $row[4],
            
            'natig_safy'    => $row[5],
     
            'natig_camel'    => $row[6],
            'Result'    => $row[7],
 
         ]);
    }
}
