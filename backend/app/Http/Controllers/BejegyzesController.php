<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use App\Models\Tevekenyseg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BejegyzesController extends Controller
{
    public function allBejegyzes()
    {
        $bejegyzes = DB::table('bejegyzeseks')
            ->join('tevekenysegs', 'bejegyzeseks.tevekenyseg_id', '=', 'tevekenysegs.tevekenyseg_id')
            ->select('allapot', 'osztaly_id', 'tevekenysegs.tevekenyseg_nev', 'tevekenysegs.pontszam')
            ->get();

        return $bejegyzes;
    }

    public function osztalyBejegyzes($osztaly_id){
        $osztaly = Bejegyzesek::where('osztaly_id', $osztaly_id)
        ->join('tevekenysegs', 'bejegyzeseks.tevekenyseg_id', '=', 'tevekenysegs.tevekenyseg_id')
        ->select('allapot', 'osztaly_id', 'tevekenysegs.tevekenyseg_nev', 'tevekenysegs.pontszam')
        ->get();

        return $osztaly;
    }

    public function store(Request $request)
    {


        $bejegyzes = Tevekenyseg::create([
            'tevekenyseg_nev' => $request->tevekenyseg_nev,
            'pontszam' => $request->pontszam,
        ]);


        $bejegyzes->bejegyzesek()->create([
            'tevekenyseg_id' => $bejegyzes->id,
            'osztaly_id' => $request->osztaly_id,
            'allapot' => false
        ]);

        return response()->noContent();
    }
}
