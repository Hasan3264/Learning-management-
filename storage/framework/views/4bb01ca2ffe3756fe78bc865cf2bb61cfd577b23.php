<div>
    <form wire:submit.prevent="formSubmit">
        <div class="mb-4">
            <?php echo $__env->make('components.form-fild-dynamic',[
            'name' => 'name',
            'label' => 'Course Name',
            'placeholder' => 'Enter name',
            'type' => 'text',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="mb-4">
            <?php echo $__env->make('components.form-fild-dynamic',[
            'name' => 'description',
            'label' => 'Description',
            'placeholder' => 'Enter Description',
            'type' => 'textarea',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="mb-4">
            <?php echo $__env->make('components.form-fild-dynamic',[
            'name' => 'price',
            'label' => 'Enter Price',
            'placeholder' => 'Enter Price',
            'type' => 'number',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="flex mb-6 items-center">
            <div class="w-full">
                <label for="days" class="lms-lavel">Days</label>
                <div class="flex flex-wrap">
                    <div class="min-w-max items-center px-4">
                        <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input wire:model.lazy="selectedDays" type="checkbox" class="mr-2 ml-2" value="<?php echo e($day); ?>"
                            id="<?php echo e($day); ?>"> <label for="$day"><?php echo e($day); ?></label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
            </div>
            <div class="min-w-max">
                <div class="mb-6">
                    <?php echo $__env->make('components.form-fild-dynamic',[
                    'name' => 'time',
                    'label' => 'Time',
                    'placeholder' => 'Enter time',
                    'type' => 'time',
                    'required' => 'required',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="min-w-max mx-5">
                <div class="mb-6">
                    <?php echo $__env->make('components.form-fild-dynamic',[
                    'name' => 'endtime',
                    'label' => 'End Time',
                    'placeholder' => 'Enter time',
                    'type' => 'date',
                    'required' => 'required',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <?php echo $__env->make('auth.components.wire-loadingbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/cource-create.blade.php ENDPATH**/ ?>