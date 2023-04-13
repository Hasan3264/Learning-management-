<div>
    <form wire:submit.prevent="CreatePermission">
         <div class="mb-4">
            <label class="lms-lavel" for="permission">Add Permission</label>
              <input wire:model.lazy="name" id="permission" class="lms-input" type="text" placeholder="Enter Permission Name">
               <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error-message text-red-800"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
         </div>
         <button type="btn" class="lms-btn">Submit</button>
         
    </form>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/permission-create.blade.php ENDPATH**/ ?>