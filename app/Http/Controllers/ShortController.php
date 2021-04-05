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

        return redirect('/')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
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
}







//    public function store(Request $request){
//        $random_token = Str::random(8);


//        $input['LongUrl'] = $request->org_link;
//        return view('show')->with('success','short.local/gt/'.$short->shortUrl);
//        $short = ShortLink::latest()->get();

//        $random_token = Str::random(8);

//        DB::table('short_links')->insert([
//            $input['LongUrl'] = $request->org_link,
//            'ShortUrl' => $request->$random_token,
//        ]);

//        $random_token = Str::random(8);
//        $data['LongUrl'] = $request->get('org_link');
//        $data['ShortUrl'] = $random_token;
//
//        ShortLink::create($data);

//        return view('show', compact('short'))->with('shorten-link');
//    }

//    public function show($id)
//    {
////        $find = ShortLink::where('ShortURL', $ShortURL)->first();
//        $short = ShortLink::find($id);
//
//        return view('show', compact('result'));
//    }
