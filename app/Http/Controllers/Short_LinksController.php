<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class Short_LinksController extends Controller
{
    public function index()
    {
        $shortLinks = ShortLink::latest()->get();
        return view('shortenLink', compact('shortLinks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url'
        ]);

        $input['link'] = $request->link;
        $input['code'] = Str::random(6);
        $input['clicks'] = 0; 
        $input['created_by'] = Auth::id();


        ShortLink::create($input);

        return redirect('generate-shorten-link')->withSuccess('Shorten Link Generated successfully!!');
    }
    

    public function list(){
        $userId = Auth::id();

        $list = ShortLink::where('created_by', $userId)->get();
        return view('shortenLink', compact('list'));
    }

    public function shortenLink($code)
    {
        $shortLink = ShortLink::where('code', $code)->firstOrFail();
        $shortLink->increment('clicks');
        return redirect($shortLink->link);
        return redirect()->away($redirectUrl)->with('refresh', true);
    }

}
