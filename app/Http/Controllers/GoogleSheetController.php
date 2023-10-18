<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;

class GoogleSheetController extends Controller
{
    public function index() {
        $sheet = Sheets::spreadsheet('14JiQXhCjKsWKR21G9vFzrAKM4s6ESmQ_46JM4Lk5mrI')->sheet('WSSContent')->get();
        $header = $sheet->pull(0);
        $values = Sheets::collection(header: $header, rows: $sheet);
        $data = $values->toArray();
        
        return view('wss.sheets', ['data' => $data]);
    }
}
