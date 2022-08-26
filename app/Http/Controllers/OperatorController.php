<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopupDetails;
use App\OperatorNetwork;
use Validator;
use App\Http\Traits\ResponseTrait;


class OperatorController extends Controller
{
    use ResponseTrait;

    public function operatorData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'operator_name' => 'required',
            'topup_amount' => 'required',
            'exchange_rate' => 'required',
            'topup_fee' => 'required',
            'stripe_fee' => 'required',
            'product_code_topup' => 'required',
            'product_code_stripe' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError(implode(",", $validator->messages()->all()));
        }
        $operator = OperatorNetwork::where('operator_name', $request->operator_name)->first();
        if ($operator == null){
            $operator = new OperatorNetwork;
        }
        $operator->operator_name = $request->operator_name;
        if($request->operator_name == 'Roshan')
        {
            $operator->operator_image = "https://upload.wikimedia.org/wikipedia/commons/4/44/Roshan_Afghanistan_Logo.jpeg";
        }
        elseif($request->operator_name == 'Etisalat')
        {
            $operator->operator_image = "http://www.egymatec.com/images/etisalat-logo.jpg";
        }
        elseif($request->operator_name == 'AWCC')
        {
            $operator->operator_image = "https://upload.wikimedia.org/wikipedia/en/b/bd/Afghan_Wireless_logo_Oct_2017.png";
        }
        elseif($request->operator_name == 'MTN')
        {
            $operator->operator_image = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/MTN_Logo.svg/1200px-MTN_Logo.svg.png";
        }
        elseif($request->operator_name == 'Salaam')
        {
            $operator->operator_image = "https://tkg.af/assets/uploads/sites/2/2019/08/Salaam-Network.jpg";
        }
        elseif($request->operator_name == 'Afghan Telecom')
        {
            $operator->operator_image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqWfkioh1YTZ1yMFaaMKJ-fMTZsbxa26oH7OQzBRt87EeQ4Q0dgWg4PtXuCmFUQZu13QM&usqp=CAU";
        }
        else{
            return $this->sendError("Wrong Operator Name Entered, Please be specific!");
        }
        $operator->save();
        // Check if Edit request is made 
        if (isset($request->id) && !empty($request->id)){
            $detail = TopupDetails::find($request->id);
        }else{
            $detail = new TopupDetails;
        }
        $detail->product_code_topup = $request->product_code_topup;
        $detail->product_code_stripe = $request->product_code_stripe;
        $detail->denomination = $request->topup_amount;
        $detail->exchange_rate = $request->exchange_rate;
        // Calculate Amount in USD 
        $amountInUsd = $request->topup_amount / $request->exchange_rate;
        
        $detail->topup_usd = $amountInUsd;
        $detail->fee_percentage = $request->topup_fee;
        $detail->stripe_fee = $request->stripe_fee;
        $detail->operator_id = $operator->id;

        $status = $detail->save();
        if($status){
            return $this->sendResponse([], 'Data added successfully.');
        }else{
            return $this->sendError("Something went wrong. Please try again.");
        }
    }
}
