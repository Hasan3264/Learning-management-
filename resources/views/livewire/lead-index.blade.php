<div>
    <table class="table w-full">
           <tr>
              <th class="text-start">Name</th>
              <th class="text-start">Email</th>
              <th class="text-start">Phone</th>
              <th class="text-start">Register at</th>
              <th class="text-start">Action</th>
           </tr>
           @foreach($leads as $lead)
                <tr>
                     <td> {{$lead->name}}</td>
                     <td> {{$lead->email}}</td>
                     <td> {{$lead->number}}</td>
                     <td> {{$lead->created_at}}</td>
                     <td class="flex justify-between">
                        <a href="{{route('lead.edit', $lead->id)}}">
                         @include('components/icon/edit')
                        </a>
                        <a href="{{route('lead.show', $lead->id)}}">
                         @include('components/icon/eye')
                       </a>
                      <form onsubmit="return confirm('Are You Sure?')" wire:submit.prevent="leadDelete({{$lead->id}})">
                           <button> @include('components/icon/trash')</button>
                      </form>
                    </td>
                </tr>
           @endforeach
    </table>
    <div class="mt-4">
        {{$leads->links()}}
    </div>
</div>
