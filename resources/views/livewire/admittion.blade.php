<div>
    <form wire:submit.prevent="scerch">
        <div class="mb-4">
            <label class="lms-lavel">Search</label>
            <input wire:model.lazy="search" class="lms-input" type="text" required>
        </div>
        <button class="lms-btn" type="submit">Submit</button>
    </form>

    @if (count($leads) > 0 && count($leads) != '')

    <form wire:submit.prevent="admit">
        <div class="mb-4 mt-3">
            <select wire:model.lazy="lead_id" class="lms-input">
                <option>Select One For Admit</option>
                @foreach ($leads as $lead)
                <option value="{{$lead->id}}">Name: {{ $lead->name}} Email: {{$lead->email}}</option>
                @endforeach
            </select>
        </div>
        <h2 class="mt-4 mb-4">Find {{ count($leads) }} Items</h2>
        @else
        <h2 class="mt-6">Search For Items</h2>
        @endif
        @if (!empty($lead_id))
        <div class="mb-4">
            <select wire:change="selectCourse" wire:model.lazy="course_id" class="lms-input">
                <option>Select Course</option>
                @foreach ($courses as $cource)
                <option value="{{$cource->id}}">Course Name: {{ $cource->name}}</option>
                @endforeach
            </select>
        </div>

        @endif

        @if (!empty($selectedCourse))
        <div class="mb-4">
            <p>Price: ${{number_format($selectedCourse->price, 2)}}</p>
        </div>

        <div class="mb-4">
            <input type="number" wire:model.lazy="payment" max="{{$selectedCourse->price}}" class="lms-input" step="01" placeholder="Inter-amount">
        </div>
        @include('components.wire-loadingbtn')
    </form>
    @endif


</div>
