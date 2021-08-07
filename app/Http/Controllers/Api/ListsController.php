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

    /**
     * path: info
     * method: post
     * Url: saveInfo
     * params: {
        id  : ID,
        name: 姓名,
        tel : 电话
     * }
     */
    public function saveInfo(Request $request)
    {
        $data = [];
        $data['id'] = $request->input('id', 0);
        $data['name'] = $request->input('name', '');
        $data['tel'] = $request->input('tel', '');
        return response()->json($data, 201);
    }
}
