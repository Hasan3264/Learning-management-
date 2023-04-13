<div>
    <form wire:submit.prevent="roleSubmit">
        <div class="flex-1">
            <label class="lms-lavel"> Add Role: </label>
            <input type="text" wire:model.lazy="name" class="lms-input" placeholder="Role Name">
            @error('name')
            <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>
        <label class="lms-lavel"> Assign Permittion: </label>
        <div class="flex flex-wrap">
            @foreach ($permissions as $permission)
            <div class="w-1\3 px-4 mb-4">
                <label class="inline-flex items-center">
                    <input wire:model.lazy="selectedPermissions" class="form-checkbox" type="checkbox"
                        value="{{$permission->id}}">
                    <span class="ml-2">{{$permission->name}}</span>
                </label>

            </div>
            @endforeach
               @error('selectedPermissions')
                <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
        </div>
        @include('components.wire-loadingbtn')
    </form>
</div>
