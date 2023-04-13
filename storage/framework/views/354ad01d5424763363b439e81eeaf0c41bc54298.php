<div class="mx-auto p-4">
    <h1 class="font-bold mb-2 underline"><?php echo e($course->name); ?></h1>
    <p class="mb-4 italic">Price: $<?php echo e($course->price); ?></p>
    <p class="pb-6"><?php echo e($course->description); ?></p>


    <h2 class="font-bold mb-2">Classes</h2>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Actions</th>
        </tr>

        <?php $__currentLoopData = $curriculums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="border px-4 py-2"><?php echo e($class->name); ?></td>
            <td class="border px-4 py-2">
                <div class="flex items-center">
                    <a class="mx-3" href="<?php echo e(route('class.edit',$class->id)); ?>">
                        <?php echo $__env->make('components.icon.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </a>

                    <a class="mx-3" href="<?php echo e(route('class.show', $class->id)); ?>">
                        <?php echo $__env->make('components.icon.eye', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </a>

                    <form class="mx-3" onsubmit="return confirm('Are you sure?');"
                        wire:submit.prevent="curriculamDelete(<?php echo e($class->id); ?>)">
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
        <?php echo e($curriculums->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/course-show.blade.php ENDPATH**/ ?>