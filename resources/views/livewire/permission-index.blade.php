<div>
   <table class="table w-full mx-10">
        <thead>
                <tr>
                    <th class=" text-start">Permission Name</th>
                    <th class=" text-start">Created at</th>
                    <th class=" text-start">Action</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)

            <tr>
              <td>{{$permission->name}}</td>
              <td>{{$permission->created_at}}</td>
              <td> <td class="flex justify-between">
                        <a href="{{route('permission.edit', $permission->id)}}">
                         @include('components/icon/edit')
                        </a>
                      <form onsubmit="return confirm('Are You Sure?')" wire:submit.prevent="permissionDelete({{$permission->id}})">
                           <button> @include('components/icon/trash')</button>
                      </form>
                    </td></td>
            </tr>
            @endforeach
        </tbody>
   </table>

      <div class="mt-10">
        <a  class="lms-btn mt-10" href="{{route('permission.create')}}">Add More</a>
      </div>

</div>
