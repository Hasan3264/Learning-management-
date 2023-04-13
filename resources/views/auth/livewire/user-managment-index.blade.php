<div>
    @can('edit-user')
    <table class="table w-full">
    <thead>
        <tr>
            <th class="text-start">Name</th>
            <th class="text-start">Email</th>
            <th class="text-start">Roles</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @foreach ($user->roles as $role)
                        {{ $role->name }}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@else
 <div>
      <p class="text-red-800 text-bold"> You Cant Watch This </p>
 </div>
 @endcan
</div>
