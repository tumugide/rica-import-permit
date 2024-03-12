<?php

namespace App\Http\Controllers;

use App\Mail\DataMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DataController extends Controller
{
    public function data(Request $request)
    {
        //Validating the request
        $validation = $request->validate([
            'citizenship' => 'string|required',
            'id_number' => 'integer|required_if:citizenship,Rwandan',
            'passport_number' => 'string|required_if:citizenship,Foreigner|nullable',
            'other_names' => 'string|required',
            'surname' => 'string|required',
            'nationality' => 'string|required',
            'owner_phone' => 'string|nullable',
            'owner_email' => 'email|nullable',
            'owner_address' => 'string|required',

            'business_type' => 'string|required',
            'company_name' => 'string|required',
            'tin_number' => 'integer|required|min:9',
            'reg_date' => 'date',
            'business_address' => 'string|required',

            'import_purpose' => 'string|required',
            'specific_purpose' => 'string|required_if:import_purpose,Other|nullable',
            'product_name' => 'string|required',
            'product_category' => 'string|required',
            'weight' => 'integer|min:0',
            'product_description' => 'string|required',
            'product_unit' => 'string|required',
            'product_quantity' => 'integer|required',
        ]);

        if (! $validation) {
            return redirect()->back()->withErrors($validation);
        }

        Mail::to($request->owner_email)->send(new DataMailer($request->all()));

    }
}
