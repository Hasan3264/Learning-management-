<div>
    <form wire:submit.prevent="Createrole">
        <div class="mb-4">
            <label class="lms-level">Roles</label>
            <select wire:model.lazy="role" id="role" class="lms-input">
                <option value="">Choose a role</option>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            @error('role')
            <div class="error-message text-red-800">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="lms-level">User</label>
            <select wire:model.lazy="user" id="user" class="lms-input">
                <option value="">Choose a User</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('user')
            <div class="error-message text-red-600">{{ $message }}</div>
            @enderror
        </div>
        @include('components.wire-loadingbtn')
    </form>
</div>
