<form wire:submit.prevent="questionUpdate">
    <div class="mb-4">
        <?php echo $__env->make('components.form-fild-dynamic', [
        'name' => 'name',
        'label' => 'Name',
        'type' => 'text',
        'placeholder' => 'Question name',
        'required' => 'required',
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="mb-4">
        <?php echo $__env->make('components.form-fild-dynamic', [
        'name' => 'answer_' . $answer,
        'label' => 'Answer '. ucfirst($answer),
        'type' => 'text',
        'placeholder' => 'Type answer ' . ucfirst($answer),
        'required' => 'required',
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="mb-4">
        <label class="lms-label" for="correct_answer">Correct answer</label>
        <select class="lms-input" wire:model.prevent="correct_answer" id="correct_answer">
            <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($answer); ?>"><?php echo e(ucfirst($answer)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <?php echo $__env->make('components.wire-loadingbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/quistion-edit.blade.php ENDPATH**/ ?>