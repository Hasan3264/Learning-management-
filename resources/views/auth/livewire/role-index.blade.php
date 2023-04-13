<div>
    <table class="table w-full">
           <tr>
              <th class="text-start">Role Name</th>
              <th class="text-start">Permittion</th>
              <th class="text-start">Created at</th>
              <th class="text-start">Action</th>
           </tr>
           @foreach($roles as $key=> $role)
                <tr class="my-5">
                     <td> {{$role->name}}</td>
                     <td>
                        @foreach ($role->permissions  as $permission)
                                     <span class=" px-2 py-1 text-black bg-gray-200 rounded-full text-sm">{{$permission->name}}</span>
                        @endforeach
                     </td>
                     <td> {{$role->created_at}}</td>
                     <td class="flex justify-between">
                        <a href="{{route('role.edit', $role->id)}}">
                           @include('components/icon/edit')
                        </a>
                      <form onsubmit="return confirm('Are You Sure?')" wire:submit.prevent="roleDelete({{$role->id}})">
                           <button> @include('components/icon/trash')</button>
                      </form>
                    </td>
                </tr>
           @endforeach
    </table>

</div>
