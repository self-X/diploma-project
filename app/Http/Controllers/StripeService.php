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

    public function test($id)
    {
        $user = User::find($id);
        $user->charge(12321,[
            'source'=>$this->stripeToken
        ]);
    }

    public function addNewCharge(User $user = null, $stripePrice)
    {
        try{
            if ($user){
                $user->asStripeCustomer();
//                dd($user);
//                dump($this->getAllCustomers());
//                die();
                $customer = $this->addNewCostumer($user);


                $charge = $user->charge($stripePrice,[
                    'currency' => 'usd',
                    'customer' => $customer->id,
                ]);
                return $charge;

            }else{
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


    public function getAllCustomers()
    {
        return Customer::all();
    }
}