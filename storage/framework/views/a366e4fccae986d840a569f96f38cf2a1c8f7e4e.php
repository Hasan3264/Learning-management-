<div>

    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Id </th>
            <th class="border px-4 py-2 text-left">Name </th>
            <th class="border px-4 py-2 text-left">Description </th>
            <th class="border px-4 py-2 text-left">Price</th>
            <th class="border px-4 py-2">Created at</th>
            <th class="border px-4 py-2">Action</th>
        </tr>

        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="border px-4 py-2"><?php echo e($course->id); ?></td>
            <td class="border px-4 py-2"><?php echo e($course->name); ?></td>
            <td class="border px-4 py-2"><?php echo e($course->description); ?></td>
            <td class="border px-4 py-2">$<?php echo e($course->price); ?></td>
            <td class="border px-4 py-2 text-center"><?php echo e(date('F,j,Y',strtotime($course->created_at))); ?></td>
            <td class="border px-4 py-2 text-center">
                <div class="flex items-center justify-center">
                    <a href="<?php echo e(route('cource.edit',$course->id)); ?>">
                        <?php echo $__env->make('components.icon.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </a>

                    <a class="px-2" href="<?php echo e(route('cource.show',$course->id)); ?>">
                        <?php echo $__env->make('components.icon.eye', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </a>

                    <form onsubmit="return confirm('Are you sure?');"
                        wire:submit.prevent="courseDelete(<?php echo e($course->id); ?>)">
                        <button type="submit">
                            <?php echo $__env->make('components.icon.trash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="mt-4">
        <?php echo e($courses->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/cource-index.blade.php ENDPATH**/ ?>