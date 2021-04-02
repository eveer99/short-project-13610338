<?php

namespace App\Http\Controllers;

use App\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ShortController extends Controller
{
    public function index(){
        $short = ShortLink::latest()->get();

        return view('short', compact('short'));
    }

    public function store(Request $request){
        $short = ShortLink::latest()->get();

        $input['LongUrl'] = $request->org_link;
//        return view('show')->with('success','short.local/gt/'.$short->shortUrl);
//        $short = ShortLink::latest()->get();

        $random_token = Str::random(8);

//        DB::table('short_links')->insert([
//            $input['LongUrl'] = $request->org_link,
//            'ShortUrl' => $request->$random_token,
//        ]);

//        $random_token = Str::random(8);
//        $data['LongUrl'] = $request->get('org_link');
//        $data['ShortUrl'] = $random_token;
//
//        ShortLink::create($data);

        return view('show', compact('short'))->with('shorten-link');
    }

//    public function show($id)
//    {
////        $find = ShortLink::where('ShortURL', $ShortURL)->first();
//        $short = ShortLink::find($id);
//
//        return view('show', compact('result'));
//    }
}
