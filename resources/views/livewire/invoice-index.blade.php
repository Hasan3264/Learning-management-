<div>
    <table class="table w-full">
           <tr>
              <th class="text-start">Id</th>
              <th class="text-start">User</th>
              <th class="text-start">Deu Date</th>
              <th class="text-start">Total Amount</th>
              <th class="text-start">Paid</th>
              <th class="text-start">Deu</th>
              <th class="text-start">Action</th>
           </tr>
           @foreach($invoices as $invoice)
                <tr>
                     <td> {{$invoice->id}}</td>
                     <td> {{$invoice->user->name}}</td>
                     <td> {{date('F j, Y', strtotime($invoice->due_date))}}</td>
                     <td> {{$invoice->amount()['total']}}</td>
                     <td> {{$invoice->amount()['paid']}}</td>
                     <td> {{$invoice->amount()['deu']}}</td>
                     <td class="flex justify-between">
                        <a href="">
                         @include('components/icon/edit')
                        </a>
                        <a href="{{route('invoice-show', $invoice->id)}}">
                         @include('components.icon.eye')
                        </a>
                      <form onsubmit="return confirm('Are You Sure?')" wire:submit.prevent="invoiceDelete({{$invoice->id}})">
                           <button> @include('components/icon/trash')</button>
                      </form>
                    </td>
                </tr>
           @endforeach
    </table>
    <div class="mt-4">
        {{$invoices->links()}}
    </div>
</div>
