<div class="p-6">
    <form wire:submit.prevent="curriculumUpdate">
        <div class="mb-6">
            <?php echo $__env->make('components.form-fild-dynamic', [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Enter name',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <?php echo $__env->make('components.wire-loadingbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/curriculum-edit.blade.php ENDPATH**/ ?>