<div>
    <h3 class="lms-heading">Edit Data</h3>
    <form action="" wire:submit.prevent="submitForm" class="mb-6">
        <div class="flex -mx-4 mb-4">
            <div class="flex-1 px-4">
                <label for="" class="lms-lavel">Edit Name:</label>
                <input class="lms-input"  type="text" wire:model="name">

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="flex-1 px-4">
                <label for="" class="lms-lavel">Edit Number:</label>
            <input class="lms-input" type="number" wire:model="number">

            <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <?php echo $__env->make('components.wire-loadingbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>





<h3 class="lms-heading"> Notes:</h3>
<table class="table w-full mb-4">
  <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr class="mb-4">
                 <td class="border m-5 px-4 -mx-4 "> <?php echo e($note->description); ?></td>
               </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
 <button wire:click="addNotes" class="lms-btn">Add Notes</button>

    <form wire:submit.prevent="submitNote" class="mt-4">
        <div class="mb-4">
            <label for="" class="lms-lavel">Add Description</label>
            <textarea class="lms-input" wire:model="note" cols="30"></textarea>

            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-red-500 text-sm"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button class="lms-btn" type="submit">Save</button>
    </form>

</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/lead-edit.blade.php ENDPATH**/ ?>