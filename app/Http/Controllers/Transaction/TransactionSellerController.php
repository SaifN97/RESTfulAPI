<?php

namespace App\Http\Controllers\Transaction;

use App\Transaction;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class TransactionSellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $transaction)
    {
        $seller = $transaction->product->seller;

        return $this->showOne($seller);
    }
}
