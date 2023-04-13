<div>
    <h2>Information</h2>
    <p>Invoice to: {{$invoice->user->name}}</p>

    <table class="table-auto w-full">
        <tr>
            <th class="lms-cell-border border text-left">Name</th>
            <th class="lms-cell-border border">Price</th>
            <th class="lms-cell-border border">Quantity</th>
            <th class="lms-cell-border border">Total</th>
        </tr>

        @foreach($invoice->Invoiceitems as $item)
        <tr>
            <td class="lms-cell-border border  ">{{$item->name}}</td>
            <td class="lms-cell-border border text-center">${{number_format($item->price, 2)}}</td>
            <td class="lms-cell-border border text-center">{{$item->quantity}}</td>
            <td class="lms-cell-border border text-right">${{number_format($item->price * $item->quantity, 2)}}</td>
        </tr>
        @endforeach
        <tr class="mb-6">
            <td colspan="3" class="lms-cell-border border text-right">Subtotal</td>
            <td  class="border lms-cell-border text-right">${{number_format($invoice->amount()['total'], 2)}}</td>
        </tr>
        <tr class="mb-6">
            <td colspan="3" class="border lms-cell-border text-right">Paid</td>
            <td class="border lms-cell-border text-right">- ${{number_format($invoice->amount()['paid'], 2)}}</td>
        </tr>
        <tr class="mb-6">
            <td colspan="3" class="border lms-cell-border text-right">Due</td>
            <td class="border lms-cell-border text-right">${{number_format($invoice->amount()['deu'], 2)}}</td>
        </tr>
    </table>




    @if($enableAddItem)
    <form wire:submit.prevent="saveNewItem" class="mt-8">
        <div class="flex mb-4">
            <div class="w-full">
                @include('components.form-fild-dynamic', [
                    'name' => 'name',
                    'label' => 'Name',
                    'type' => 'text',
                    'placeholder' => 'Item name',
                    'required' => 'required',
                ])
            </div>

            <div class="min-w-max ml-4">
                @include('components.form-fild-dynamic', [
                    'name' => 'price',
                    'label' => 'Price',
                    'type' => 'number',
                    'placeholder' => 'Type price',
                    'required' => 'required',
                ])
            </div>

            <div class="min-w-max ml-4">
                @include('components.form-fild-dynamic', [
                    'name' => 'quantity',
                    'label' => 'Quantity',
                    'type' => 'number',
                    'placeholder' => 'Type quantity',
                    'required' => 'required',
                ])
            </div>


        </div>
        <div class="flex">
            @include('components.wire-loadingbtn')
            <button wire:click="addNewItem" type="button lms-btn mt-8 mb-8">Cancel</button>
        </div>
    </form>
    @else
        <button wire:click="addNewItem" class="underline lms-btn mt-8 mb-8">Add</button>
    @endif


    <h3 class="font-bold text-lg mt-6 mb-2">Payments</h3>
    <ul class="mb-4">
        @foreach($invoice->payments as $payment)
        <li>{{date('F j, Y - g:i:a', strtotime($payment->created_at))}} - ${{number_format($payment->amount, 2)}} - transaction ID: {{$payment->transaction_id}} <button wire:click="refund({{$payment->id}})" class="bg-red-500 text-white px-2 text-xs">Refund</button></li>
        @endforeach
    </ul>
</div>
