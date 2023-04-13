<div>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">SL.</th>
            <th class="border px-4 py-2 text-left">Question</th>
            <th class="border px-4 py-2 text-left">Answer A</th>
            <th class="border px-4 py-2 text-left">Answer B</th>
            <th class="border px-4 py-2 text-left">Answer C</th>
            <th class="border px-4 py-2 text-left">Answer D</th>
            <th class="border px-4 py-2 text-left">Correct Answer</th>
            <th class="border px-4 py-2">Actions</th>
        </tr>
        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="border px-4 py-2"><?php echo e($loop->iteration); ?></td>
            <td class="border px-4 py-2"><?php echo e($question->name); ?></td>
            <td class="border px-4 py-2"><?php echo e($question->answer_a); ?></td>
            <td class="border px-4 py-2"><?php echo e($question->answer_b); ?></td>
            <td class="border px-4 py-2"><?php echo e($question->answer_c); ?></td>
            <td class="border px-4 py-2"><?php echo e($question->answer_d); ?></td>
            <td class="border px-4 py-2"><?php echo e($question->correct_answer); ?></td>

            <td class="border px-4 py-2 text-center">
                <div class="flex items-center justify-center">
                    <a class="mr-4" href="<?php echo e(route('question.edit', $question->id)); ?>">
                        <?php echo $__env->make('components.icon.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </a>

                    <form class="ml-3" onsubmit="return confirm('Are you sure?');"
                        wire:submit.prevent="questionDelete(<?php echo e($question->id); ?>)">
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
        <?php echo e($questions->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/quistion-index.blade.php ENDPATH**/ ?>