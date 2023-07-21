<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\BaseController;
use App\Http\Resources\Contact as ContactResource;
use App\Models\Contact;

class ContactController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::get();

        return $this->sendResponse(ContactResource::collection($contacts), 'Contacts Retrieved Successfully.');
    }

    /**
     * Display a listing of the resource by person.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_contacts_by_person()
    {
        $contacts = Contact::with('person')->where('person_id', auth()->person()->id)->get();

        return $this->sendResponse(ContactResource::collection($contacts), 'Contacts Retrieved Successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'type'          => 'required',
            'info'          => ['required', 'string'],
            'person_id'     => ['required', 'int'],
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $contact = Contact::create($input);
   
        return $this->sendResponse(new ContactResource($contact), 'Contact Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
  
        if (is_null($contact)) {
            return $this->sendError('Contact not found.');
        }
   
        return $this->sendResponse(new ContactResource($contact), 'Contact Retrieved Successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'type'       => 'required',
            'info'       => ['required', 'string'],
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $contact = Contact::find($id);   
        $contact->type = $input['type'];
        $contact->info = $input['info'];
        $contact->save();
   
        return $this->sendResponse(new ContactResource($contact), 'Contact Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
   
        return $this->sendResponse([], 'Contact Deleted Successfully.');
    }
}
