<div>
    <form wire:submit.prevent="scerch">
        <div class="mb-4">
            <label class="lms-lavel">Search</label>
            <input wire:model.lazy="search" class="lms-input" type="text" required>
        </div>
        <button class="lms-btn" type="submit">Submit</button>
    </form>

    <?php if(count($leads) > 0 && count($leads) != ''): ?>

    <form wire:submit.prevent="admit">
        <div class="mb-4 mt-3">
            <select wire:model.lazy="lead_id" class="lms-input">
                <option>Select One For Admit</option>
                <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($lead->id); ?>">Name: <?php echo e($lead->name); ?> Email: <?php echo e($lead->email); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <h2 class="mt-4 mb-4">Find <?php echo e(count($leads)); ?> Items</h2>
        <?php else: ?>
        <h2 class="mt-6">Search For Items</h2>
        <?php endif; ?>
        <?php if(!empty($lead_id)): ?>
        <div class="mb-4">
            <select wire:change="selectCourse" wire:model.lazy="course_id" class="lms-input">
                <option>Select Course</option>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cource->id); ?>">Course Name: <?php echo e($cource->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <?php endif; ?>

        <?php if(!empty($selectedCourse)): ?>
        <div class="mb-4">
            <p>Price: $<?php echo e(number_format($selectedCourse->price, 2)); ?></p>
        </div>

        <div class="mb-4">
            <input type="number" wire:model.lazy="payment" max="<?php echo e($selectedCourse->price); ?>" class="lms-input" step="01" placeholder="Inter-amount">
        </div>
        <?php echo $__env->make('components.wire-loadingbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
    <?php endif; ?>


</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/admittion.blade.php ENDPATH**/ ?>