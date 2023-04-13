<div>
    <table class="table w-full">
           <tr>
              <th class="text-start">Name</th>
              <th class="text-start">Email</th>
              <th class="text-start">Phone</th>
              <th class="text-start">Register at</th>
              <th class="text-start">Action</th>
           </tr>
           <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                     <td> <?php echo e($lead->name); ?></td>
                     <td> <?php echo e($lead->email); ?></td>
                     <td> <?php echo e($lead->number); ?></td>
                     <td> <?php echo e($lead->created_at); ?></td>
                     <td class="flex justify-between">
                        <a href="<?php echo e(route('lead.edit', $lead->id)); ?>">
                         <?php echo $__env->make('components/icon/edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                        <a href="<?php echo e(route('lead.show', $lead->id)); ?>">
                         <?php echo $__env->make('components/icon/eye', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       </a>
                      <form onsubmit="return confirm('Are You Sure?')" wire:submit.prevent="leadDelete(<?php echo e($lead->id); ?>)">
                           <button> <?php echo $__env->make('components/icon/trash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></button>
                      </form>
                    </td>
                </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="mt-4">
        <?php echo e($leads->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/lead-index.blade.php ENDPATH**/ ?>