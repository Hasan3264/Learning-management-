<?php

namespace App\Http\Controllers;
use App\Models\Invoice as dbinvoices;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Invoice;

class InvoiceController extends Controller
{
    public function invoice_index(){
        return view('Invoice.index');
    }
     function show($id){
                $dbinvoice = dbinvoices::findOrFail($id);
                return view('invoice.show', [
                  'invoice' => $dbinvoice,
                ]);
    }

  public function invoice_pdf($id){
        $dbinvoice = dbinvoices::findOrFail($id);
          $customer = new Buyer([
                    'name'  => $dbinvoice->user->name,
                    'custom_fields' => [
                        'email' => $dbinvoice->user->email,
                    ],
                ]);
                $items = [];
               foreach ($dbinvoice->Invoiceitems as $item){
                  $items[] = (new InvoiceItem())-> title($item->name)->pricePerUnit($item->price)->quantity($item->quantity);
               }
                $invoice = Invoice::make()
                ->buyer($customer)
                ->addItems($items);

                return $invoice->stream();

        }
}

