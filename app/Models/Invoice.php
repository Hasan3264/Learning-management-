<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

     protected $fillable =[
    'due_date',
    'paid_date',
    'user_id',
     ];

    public function Invoiceitems(){
        return $this->hasMany(InvoiceItem::class);
    }
    public function payments(){
        return $this->hasMany(payment::class);
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function amount(){
         $amounts = [
            'total' =>0,
            'paid' =>0,
            'deu' =>0,
         ];
         foreach ($this->Invoiceitems as $item) {
            $amounts['total'] += $item->price * $item->quantity;
          }
          foreach ($this->payments as $payment ){
            $amounts['paid'] += $payment->amount;
          }
        $amounts['deu'] = $amounts['total'] - $amounts['paid'];
        return $amounts;
    }
}
