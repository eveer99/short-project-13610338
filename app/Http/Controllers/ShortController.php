<?php

namespace App\Http\Controllers;

use App\short_url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ShortController extends Controller
{
    public function index() {
        $urls = short_url::all();
        return view('index', compact('urls'));
    }

    public function create() {
        $count = short_url::count();

        if($count >= 10){
            return 'เกินกำหนด';
        }

        return view('short');
    }

    public function store(Request $request) {
//        dd($request->all());
//        dd($this->randString());

        $long_url = $request->get('long_url');
        $short_url = $this->randString();
        short_url::create([
            'long_url'=>$long_url,
            'short_url'=>$short_url
        ]);

        return redirect('/')->with('success', 'สำเร็จ');
    }
    public function randString() {
//        dd(strlen($characters));
//        dd(rand(0,5));

        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $number = '0123456789';

        $charLength = strlen($characters);
        $numLength = strlen($number);
        $string = '123';
        for($i=0; $i<3; $i++){
            $string.=$characters[rand(0,$charLength-1)];
        }

        for($i=0; $i<2; $i++){
            $string.=$number[rand(0,$numLength-1)];
        }

        return $string;
    }

    public function check($code) {
//        dd($code);
//        dd($result);

        $result = short_url::Where('short_url',$code)->first();

        if($result){
            return redirect()->away($result->long_url);
        }

        return 'ไม่พบรหัส Short URL นี้';
    }

    public function destroy($id) {
        DB::delete('delete from short_urls where id = ?',[$id]);

        return "ลบข้อมูลเรียบร้อยแล้ว";
    }
}
