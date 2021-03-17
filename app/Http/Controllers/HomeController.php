<?php

namespace App\Http\Controllers;

use App\Contact_us;
use App\Mail\MyTestMail;
use App\Product;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function services (){
      $products = Product::with('service' , 'images')->get();
    //    dd(   json_decode(  setting('site.section_a_vedio' )  )[0]->download_link   );
    $video= json_decode(  setting('site.section_a_vedio' )  )[0]->download_link ;
    // dd(  $video  );
        $items = Service::get();

        return view('welcome' , compact('items' , 'products' , 'video'));
    }

    public function contact_us(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);
        $data =[
            'name' => $request->name ,
            'email' => $request->email ,
            'subject' => $request->subject ,
            'message' => $request->message
        ];

        Contact_us::create($data);

        Mail::to('mohamedali1631@gmail.com')->send(new \App\Mail\MyTestMail($data));



        return back()->with(['msg', 'The Message']);



    }

    public function  show($id)
    {
        $item = Product::with('service' , 'images')->where('id' ,$id )->first();
        return view('show' , compact('item'));
    }


}
