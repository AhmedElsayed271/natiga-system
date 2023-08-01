<?php

namespace App\Http\Controllers;

use App\Models\ReslutAdady;
use App\Models\ReslutThanwy;
use Illuminate\Http\Request;
use App\Models\ResultThanwayAddadyAkradAhrary;
use App\Models\ResultThanwayAddadyArabyAhrary;

class NatigaConroller extends Controller
{
    public function natigaThanway(Request $request)
    {


        
        try {


            if ($request->section == 1) {
                
                $result = ReslutThanwy::where('code','=',$request->code)->first();


                if (!$result) {

                    return redirect()->route('home')->with(['error' => "الكود خاطئ"]);
                }

                return view('natiga-thanway', compact('result'));
            } else if ($request->section == 2) {
                $result = ReslutAdady::where('code','=',$request->code)->first();


                if (!$result) {

                    return redirect()->route('home')->with(['error' => "الكود خاطئ"]);
                }

                return view('natiga-adday', compact('result'));
            } else if ($request->section == 3) {
                
                $result = ResultThanwayAddadyArabyAhrary::where('code','=',$request->code)->first();


                if (!$result) {

                    return redirect()->route('home')->with(['error' => "الكود خاطئ"]);
                }

                return view('natiga-thanway-arab', compact('result'));
            } else if ($request->section == 4) {
                
                $result = ResultThanwayAddadyAkradAhrary::where('code','=',$request->code)->first();


                if (!$result) {

                    return redirect()->route('home')->with(['error' => "الكود خاطئ"]);
                }

                return view('natiga-thanway-akrad', compact('result'));
            }



        } catch(\Exception $e){
            return $e;
            return redirect()->route('home')->with(['error' => "حدث خطأ ما يرجى اعادة المحاولة او التواصل مع الدعم الفني"]);
        }

    }
}
