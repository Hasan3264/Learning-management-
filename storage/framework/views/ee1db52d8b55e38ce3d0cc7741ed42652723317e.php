<div>
    <table class="table w-full">
           <tr>
              <th class="text-start">Role Name</th>
              <th class="text-start">Permittion</th>
              <th class="text-start">Created at</th>
              <th class="text-start">Action</th>
           </tr>
           <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="my-5">
                     <td> <?php echo e($role->name); ?></td>
                     <td>
                        <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <span class=" px-2 py-1 text-black bg-gray-200 rounded-full text-sm"><?php echo e($permission->name); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </td>
                     <td> <?php echo e($role->created_at); ?></td>
                     <td class="flex justify-between">
                        <a href="<?php echo e(route('role.edit', $role->id)); ?>">
                           <?php echo $__env->make('components/icon/edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                      <form onsubmit="return confirm('Are You Sure?')" wire:submit.prevent="roleDelete(<?php echo e($role->id); ?>)">
                           <button> <?php echo $__env->make('components/icon/trash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></button>
                      </form>
                    </td>
                </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

</div>

<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/role-index.blade.php ENDPATH**/ ?>