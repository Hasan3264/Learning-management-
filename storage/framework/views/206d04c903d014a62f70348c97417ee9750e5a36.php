<div>
   <table class="table w-full mx-10">
        <thead>
                <tr>
                    <th class=" text-start">Permission Name</th>
                    <th class=" text-start">Created at</th>
                    <th class=" text-start">Action</th>
                </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
              <td><?php echo e($permission->name); ?></td>
              <td><?php echo e($permission->created_at); ?></td>
              <td> <td class="flex justify-between">
                        <a href="<?php echo e(route('permission.edit', $permission->id)); ?>">
                         <?php echo $__env->make('components/icon/edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                      <form onsubmit="return confirm('Are You Sure?')" wire:submit.prevent="permissionDelete(<?php echo e($permission->id); ?>)">
                           <button> <?php echo $__env->make('components/icon/trash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></button>
                      </form>
                    </td></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
   </table>

      <div class="mt-10">
        <a  class="lms-btn mt-10" href="<?php echo e(route('permission.create')); ?>">Add More</a>
      </div>

</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/permission-index.blade.php ENDPATH**/ ?>