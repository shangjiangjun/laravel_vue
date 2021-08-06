<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListsController extends Controller
{
    //
    public function lists()
    {
        $data = [];
        $data[] = ['id' => '1', 'name' => 'test', 'tel' => '12341234123'];
        return response([
            'status'    => true,
            'data'      => $data
        ]);
    }

    public function info($id)
    {
        $info = ['id' => '1', 'name' => 'test', 'tel' => '12341234123'];
        return response([
            'status'    => true,
            'data'      => $info
        ]);
    }
}
