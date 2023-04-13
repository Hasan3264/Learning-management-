<div>
    <form wire:submit.prevent="formSubmit">
        <div class="mb-4">
            @include('components.form-fild-dynamic',[
            'name' => 'name',
            'label' => 'Course Name',
            'placeholder' => 'Enter name',
            'type' => 'text',
            'required' => 'required',
            ])
        </div>
        <div class="mb-4">
            @include('components.form-fild-dynamic',[
            'name' => 'description',
            'label' => 'Description',
            'placeholder' => 'Enter Description',
            'type' => 'textarea',
            'required' => 'required',
            ])
        </div>
        <div class="mb-4">
            @include('components.form-fild-dynamic',[
            'name' => 'price',
            'label' => 'Enter Price',
            'placeholder' => 'Enter Price',
            'type' => 'number',
            'required' => 'required',
            ])
        </div>

        <div class="flex mb-6 items-center">
            <div class="w-full">
                <label for="days" class="lms-lavel">Days</label>
                <div class="flex flex-wrap">
                    <div class="min-w-max items-center px-4">
                        @foreach ($days as $day)
                        <input wire:model.lazy="selectedDays" type="checkbox" class="mr-2 ml-2" value="{{$day}}"
                            id="{{$day}}"> <label for="$day">{{$day}}</label>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="min-w-max">
                <div class="mb-6">
                    @include('components.form-fild-dynamic',[
                    'name' => 'time',
                    'label' => 'Time',
                    'placeholder' => 'Enter time',
                    'type' => 'time',
                    'required' => 'required',
                    ])
                </div>
            </div>
            <div class="min-w-max mx-5">
                <div class="mb-6">
                    @include('components.form-fild-dynamic',[
                    'name' => 'endtime',
                    'label' => 'End Time',
                    'placeholder' => 'Enter time',
                    'type' => 'date',
                    'required' => 'required',
                    ])
                </div>
            </div>
        </div>
        @include('auth.components.wire-loadingbtn')
    </form>
</div>
