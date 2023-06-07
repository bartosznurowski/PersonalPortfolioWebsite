<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Image;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function Contact()
    {
        return view('frontend.contact');
    } 

    public function StoreMessage(Request $request)
    {
        $fnotification = array(
            'message' => 'Please fill all the data', 
            'alert-type' => 'error'
        );
        
        if($request->name == "" || $request->email == "" || $request->subject == "" || $request->phone == "" || $request->message == ""){
            return redirect()->back()->with($fnotification);
        }

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message, 
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your Message Submited Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } 

    public function ContactMessage()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.allcontact',compact('contacts'));

    } 

    public function DeleteMessage($id)
    {

     Contact::findOrFail($id)->delete();

     $notification = array(
            'message' => 'Your Message Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } 
}
