<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Str;
use App\Contacts;

class ContactsController extends Controller
{
    use ResponseTrait;
    //
    public function contacts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|string',
            'category' => 'required|string',
            'description' => 'required'
        ]);
        if ($validator->fails()) {

            return $this->sendError(implode(',', $validator->errors()->all()), null);
        }

        $post = new Contacts;
        $post->user_id = auth()->user()->id;
        $post->subject = $request->get('subject');
        $post->category = $request->get('category');
        $post->description = $request->get('description');
        if ($post->save()) {
            $response = 'Request Submit Successfully';
            return $this->sendResponse([], $response);
        } else {
            $response = 'Request Submit Failed';
            return $this->sendResponse([], $response);
        }
    }

    ///........admin side suport........////
    public function user_support()
    {
        $post = Contacts::with('user:id,name,profile')->get();
        if ($post) {

            return $this->sendResponse(['users' => $post, 'status' => 200], 'Getting Users data Successfully');
        } else {
            $response = 'Gettig users data Failed';
            return $this->sendResponse([], $response);
        }
    }
}
