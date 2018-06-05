<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;

class StripeService  extends Controller {

    protected  $stripeToken;
    protected  $stripeEmail;
    public function __construct(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $this->stripeToken = $request->stripeToken;
        $this->stripeEmail = $request->stripeEmail;
    }

    public function addNewCharge($user = null, $stripePrice)
    {
        try{
            if ($user){
                $customer = $this->addNewCostumer($user);
                $charge = $user->charge($stripePrice,[
                    'currency' => 'usd',
                    'source' =>$this->stripeToken,
                ]);
                return $charge;

            }else{
                dump($this->stripeEmail);
                $charge = Charge::create([
                    'amount' => $stripePrice,
                    'currency' => 'usd',
                    'description' => 'unauthorized customer',
                    'source' => $this->stripeToken,
                ]);
                return $charge;
            }

        }catch (Exception $exception){
            $exception->getMessage();
        }

    }

    /**
     * @param $user
     * @return Customer
     */
    public function addNewCostumer($user)
    {
        $customer = Customer::create([
            'source' => $this->stripeToken,
            'email' => $user->email,
        ]);
        return $customer;
    }
}