<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use App\User;
class StripeService  extends Controller {

    protected  $stripeToken;
    protected  $stripeEmail;
    public function __construct(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $this->stripeToken = $request->stripeToken;
        $this->stripeEmail = $request->stripeEmail;
    }

    public function addNewCharge(User $user = null, $stripePrice)
    {
        try{
            if ($user){
                if($user->stripe_id){
//                    $user->asStripeCustomer($user->stripe_id);
                    $charge = $user->charge($stripePrice,[
                    'currency' => 'usd',
                    'customer' => $user->stripe_id,
                    ]);
                    return $charge;
                }else{
                    $customer = $user->createAsStripeCustomer($this->stripeToken);
                    $charge = $user->charge($stripePrice,[
                        'currency' => 'usd',
                        'customer' => $customer->id,
                    ]);
                    return $charge;
                }
            }else{
                $charge = Charge::create([
                    'amount' => $stripePrice,
                    'currency' => 'usd',
                    'description' => 'unauthorized customer',
                    'source' => $this->stripeToken,
                    ]);
                    return $charge;
                }
            }catch(Exception $exception){
                $exception->getMessage();
            }
    }

    /**
     * @param $user
     * @return Customer
     * ==createAsStripeCustomer
     */
    public function addNewCostumer($user)
    {
        $customer = Customer::create([
            'source' => $this->stripeToken,
            'email' => $user->email,
        ]);

        $user->stripe_id = $customer->id;
        $user->save();

        return $customer;
    }


    public function getAllCustomers()
    {
        return Customer::all();
    }
}