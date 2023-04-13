<div class="p-6">
    <form wire:submit.prevent="courseUpdate">
        <div class="mb-6">
            <?php echo $__env->make('components.form-fild-dynamic', [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Enter name',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="mb-6">
            <?php echo $__env->make('components.form-fild-dynamic', [
            'name' => 'slug',
            'label' => 'Slug',
            'type' => 'text',
            'placeholder' => 'Enter Slug',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="mb-6">
            <?php echo $__env->make('components.form-fild-dynamic', [
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
            'placeholder' => 'Enter name',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="mb-6">
            <?php echo $__env->make('components.form-fild-dynamic', [
            'name' => 'price',
            'label' => 'Price',
            'type' => 'number',
            'placeholder' => 'Add price',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="flex mb-6 items-center">
            <div class="w-full mr-4">
                <label class="lms-label" for="days">Days</label>
                <div class="flex flex-wrap -mx-4">
                    <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="min-w-max flex items-center px-4">
                        <input wire:model.lazy="selectedDays" class="mr-2" type="checkbox" value="<?php echo e($day); ?>"
                            id="<?php echo e($day); ?>"> <label for="<?php echo e($day); ?>"><?php echo e(ucfirst($day)); ?></label>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="min-w-max mr-4">
                <div class="mb-6">
                    <?php echo $__env->make('components.form-fild-dynamic', [
                    'name' => 'time',
                    'label' => 'Time',
                    'type' => 'time',
                    'placeholder' => 'Enter time',
                    'required' => 'required',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <div class="min-w-max">
                <div class="mb-6">
                    <?php echo $__env->make('components.form-fild-dynamic', [
                    'name' => 'end_date',
                    'label' => 'End date',
                    'type' => 'date',
                    'placeholder' => 'Enter end date',
                    'required' => 'required',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>



        <?php echo $__env->make('components.wire-loadingbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/cource-edit.blade.php ENDPATH**/ ?>