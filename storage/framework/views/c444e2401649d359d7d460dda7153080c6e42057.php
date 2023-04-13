<label class="lms-lavel" for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
<?php if($type === 'text'): ?>
        <input wire:model.lazy="<?php echo e($name); ?>" id="<?php echo e($name); ?>" class="lms-input" type="<?php echo e($type); ?>" placeholder="<?php echo e($placeholder); ?>" <?php echo e($required); ?> >
<?php elseif($type === 'textarea'): ?>
      <textarea wire:model.lazy="<?php echo e($name); ?>"  name="<?php echo e($name); ?>" id="<?php echo e($name); ?>"  class="lms-input" type="<?php echo e($type); ?>" placeholder="<?php echo e($placeholder); ?>" <?php echo e($required); ?> ></textarea>
<?php else: ?>
     <input wire:model.lazy="<?php echo e($name); ?>" id="<?php echo e($name); ?>" class="lms-input" type="<?php echo e($type); ?>" placeholder="<?php echo e($placeholder); ?>" <?php echo e($required); ?> >
<?php endif; ?>


<?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<div class="error-message text-red-800"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/components/form-fild-dynamic.blade.php ENDPATH**/ ?>