<div>
    <form wire:submit.prevent="roleSubmit">
        <div class="flex-1">
            <label class="lms-lavel"> Add Role: </label>
            <input type="text" wire:model.lazy="name" class="lms-input" placeholder="Role Name">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <label class="lms-lavel"> Assign Permittion: </label>
        <div class="flex flex-wrap">
            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-1\3 px-4 mb-4">
                <label class="inline-flex items-center">
                    <input wire:model.lazy="selectedPermissions" class="form-checkbox" type="checkbox"
                        value="<?php echo e($permission->id); ?>">
                    <span class="ml-2"><?php echo e($permission->name); ?></span>
                </label>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php $__errorArgs = ['selectedPermissions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <?php echo $__env->make('components.wire-loadingbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/role-create.blade.php ENDPATH**/ ?>