<div>
    <div class="table w-full p-2">
        <table class="w-full border">
            <thead>
            <tr class=" border-b">
                <th class="p-2 border-r cursor-pointer text-start" > Name</div>
                </th>
                <th class="p-2 border-r cursor-pointer ">
                    <div class="flex items-center justify-center"> Action</div>
                </th>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center border-b ">
                    <td class="p-2 border-r  text-left px-4"><?php echo e($quiz->name); ?></td>
                    <td class="flex items-center justify-center">
                        <a href="<?php echo e(route('quize.edit',$quiz->id)); ?>" class="ml-2"><?php echo $__env->make('components.icon.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
                        <a href="<?php echo e(route('quize.show',$quiz->id)); ?>" class="ml-2 "><?php echo $__env->make('components.icon.eye', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
                        <form class="ml-2" wire:submit.prevent="deleteQuiz(<?php echo e($quiz->id); ?>)" ><button onclick="return confirm('Are you sure?');" type="submit" > <?php echo $__env->make('components.icon.trash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="mt-4">
            <?php echo e($quizzes->links()); ?>

        </div>
    </div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/quiz-index.blade.php ENDPATH**/ ?>