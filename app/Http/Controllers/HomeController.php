<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Review;
use App\Models\Contact;
use App\Models\Quality;
use App\Models\Service;
use App\Mail\ContactMail;
use App\Models\Portfolio;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index (){
        $data['get_data'] = Home::all();
        $data['get_data_about'] = About::all();
        $data['get_data_portfolio'] = Portfolio::latest()->get();
        $data['get_data_skill'] = Skill::latest()->get();
        $data['get_data_quality'] = Quality::latest()->get();
        $data['get_data_experience'] = Experience::latest()->get();
        $data['get_data_service'] = Service::latest()->get();
        $data['get_data_review'] = Review::latest()->get();
        $data['get_data_blog'] = Blog::latest()->get();
        return view('layouts.index', $data);
    }

    public function blog_page($id, Request $request){
        $data['get_blog_post_data'] = Blog::findOrFail($id);
        return view('frontend.blog', $data);
    }




    // public function contact(Request $request){
    //     //dd($request->all());
    //     $sendMessage = request()->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'subject' => 'required',
    //         'message' => 'required',
    //     ]);
        
    //     $sendMessage = new Contact;
    //     $sendMessage->name = trim($request->name);
    //     $sendMessage->email = trim($request->email);
    //     $sendMessage->subject = trim($request->subject);
    //     $sendMessage->message = trim($request->message);

    //     $sendMessage->save();

    //     Mail::to('arahmed.hridoy@gmail.com')->send(new ContactMail($request));

    //     return redirect()->back()->with('success', 'We received your Message Successfully');

    // }
    public function contact(Request $request){
        
        $data = new Contact;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;

        $data->save();

        return response()->json(['success' => 'Thanks for contacting us, very soon we will contact with you.']);

        // $validation = Validator::make($request->all(), [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'email:filter', 'max:255'],
        //     'subject' => ['required','string'],
        //     'message' => ['required', 'string']
        // ]);

        // if ($validation->fails()) {
        //     return response()->json(['code' => 400, 'msg' => $validation->errors()->first()]);
        // }

        // $name = $request->name;
        // $email = $request->email;
        // $subject = $request->subject;
        // $msg = $request->message;

        // $msg = "
        //     Name: $name \n
        //     Email: $email \n
        //     Subject: $subject \n
        //     Message: $msg
        // ";

        // $receiver = "arahmed.hridoy@gmail.com";
        // Mail::to($receiver)->send(new ContactMail($msg));
        // return response()->json(['code' => 200, 'msg' => 'Thanks for contacting us, we will get back to you soon.']);
    }
}
