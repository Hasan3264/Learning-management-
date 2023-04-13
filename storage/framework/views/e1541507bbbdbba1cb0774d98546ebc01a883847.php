<div>
    <form class="p-4" wire:submit.prevent="editQuiz">

        <div class="mb-4">
            <?php echo $__env->make('components.form-fild-dynamic', [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Quiz name',
            'required' => 'required',
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <button type="submit" class="lms-btn">Submit </button>


    </form>

    <?php if(count($questions)>0): ?>
    <form class="p-4" wire:submit.prevent="addQuestion">
        <div class="min-w-max ml-3">
            <label class="lms-lavel" for="question">Add Question</label>
            <select wire:model="question" id="question"  class="mb-4 lms-input">
                <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($question->id); ?>"><?php echo e($question->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['correct_answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="lms-btn">Add </button>
    </form>

    <?php else: ?>
    <h3 class="my-4  text-lg p-4 ml-3">Add Question</h3>
    <p class="text-red-500 px-4 ml-3">Not Found Any Question!</p>
    <?php endif; ?>
    <div class="p-4">
        <h3 class="my-4 text-lg ml-3">Question List</h3>
        <div class="table w-full p-2">
            <table class="w-full border">
                <thead>
                    <tr class=" border-b">
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center"> Name</div>
                        </th>
                        <th class="p-2 border-r cursor-pointer text-sm font-thin">
                            <div class="flex items-center justify-center">Action</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $quiz->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center border-b text-sm ">
                        <td class="p-2 border-r text-left px-4"><?php echo e($question->name); ?></td>
                        <td class="flex items-center justify-center">
                            <form wire:submit.prevent="removeQuiz(<?php echo e($question->id); ?>)"
                                class="bg-red-500 p-2 inline-block text-white hover:shadow-lg text-xs font-thin">
                                <button onclick="return confirm('Are you Sure')" type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/quiz-edit.blade.php ENDPATH**/ ?>