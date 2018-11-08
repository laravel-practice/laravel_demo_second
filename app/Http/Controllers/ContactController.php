<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// here use DB is only for when we use query builder
use DB;

// bt in this case we are useing model so allocate the location
use App\Contact;
class ContactController extends Controller
{
    public function AddContact()
    {
    	return view('add_contact');
    }

   

    public function ContactMvc()
    {
        // using mvc model 
        $contact = Contact::all(); // or use ::get();
        //echo "<pre>";
        //print_r($contacts);
        //exit();
        return view('AllContactMvc')->with('AllContactss',$contact);
    }


    public function AllContact()
    {
         //using query builder 
        $contacts=DB::table('addcontacts')
                  ->paginate(2);    //->gei();
        return view('all_contact')->with('AllContacts',$contacts);


        
    }

    public function InsertContact(Request $request)
    {
    	$data=array();
    	$data['contact_name']=$request->name;
    	$data['contact_email']=$request->email;
    	$data['contact_phone']=$request->phone;

    	//echo "<pre>";
    	//print_r($data);
    	$st=DB::table('addcontacts')
    		->insert($data);

    	if($st)
    	{
    		echo "data insert";
    	}
    	else
    	{
    		echo "eorro occur";
    	}

    }
    
    public function InsertContactAlert(Request $request)
    {
        $data=array();
        $data['contact_name']=$request->name;
        $data['contact_email']=$request->email;
        $data['contact_phone']=$request->phone;

        //echo "<pre>";
        //print_r($data);
        $sts=DB::table('addcontacts')
            ->insert($data);

        if($sts)
        {
            $notification=array(
            'message'=>'contact record successfully',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        else
        {
            echo "error";
        }

    }

//using real mvc pattern
public function InsertContactMVC(Request $request)
    {
        // Contact is a model and we create $contact object of that model
        $contact= new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->save();   // save() powerfull code, i dont kwn where its save data
        
        if($contact->save())
        {
            $notification=array(
            'message'=>'contact record successfully',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        else
        {
            echo "error";
        }
    }



public function DeleteContact($id)
    {
        //echo $id;
        $del=DB::table('addcontacts')
                ->where('id',$id)
                ->delete();
        if($del)
         {
            $notification=array(
            'message'=>'contact delete successfully',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        else
        {
            echo "error";
        }
    }

//using mvc
// working with mvc u mst use plular table name
public function DeleteContactMvc($id)
    {
        $del=Contact::find($id)->delete();
        if($del)
         {
            $notification=array(
            'message'=>'contact delete successfully',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        else
        {
            echo "error";
        }
    }


public function ShowContact($id)
    {

        $con =DB::table('addcontacts')
             ->where('id',$id)
             ->first();         // first use for single data
        return view('view_contact')->with('single_data',$con);
        
    }

public function ShowContactMvc($id)
    {

        $con = Contact::find($id)->first();
        return view('view_contactMvc')->with('single_data',$con);
        
    }

public function EditContact($id)
    {
        $edit =DB::table('addcontacts')
              ->where('id',$id)
              ->first();  
        return view('edit_contact')->with('single_data',$edit);
        
    }

public function EditContactMvc($id)
    {
        $edit =Contact::find($id)->first();
        return view('edit_contactMvc')->with('single_data',$edit);
        
    }

public function Updatecontact(Request $request,$id)
    {
        $data=array();
        $data['contact_name']=$request->name;
        $data['contact_email']=$request->email;
        $data['contact_phone']=$request->phone;

        $contactUpdate=DB::table('addcontacts')->where('id',$id)->update($data);

        if($contactUpdate)
         {
            $notification=array(
            'message'=>'contact upadate successfully',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.contact')->with($notification);
        }
        else
        {
            echo "error";
        }
    }


// using mvc
public function UpdatecontactMvc(Request $request,$id)
    {
        $contactUpdate=Contact::find($id);
        $contactUpdate->name=$request->name;
        $contactUpdate->email=$request->email;
        $contactUpdate->phone=$request->phone;
        $contactUpdate->save();

        if($contactUpdate->save())
         {
            $notification=array(
            'message'=>'contact upadate successfully',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.contact')->with($notification);
        }
        else
        {
            echo "error";
        }
    }


}
