<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StockController extends Controller
{
    public function Stock()
    {
        
        $stocks = [
            ['id' => 1, 'name' => 'Apple', 'price' => 150],
            ['id' => 2, 'name' => 'Google', 'price' => 2800],
            ['id' => 3, 'name' => 'Microsoft', 'price' => 300]
        ];

        return response()->json($stocks);
    }
}
