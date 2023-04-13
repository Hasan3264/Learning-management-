<div class="px-4">
    <h1 class="text-center text-2xl p-4 "><?php echo e($quiz->name); ?></h1>
    <?php
        $i=1
    ?>
    <div class="flex items-center gap-4 py-4">
        <p class="flex items-center gap-2">Total <span class=" text-sm radius-full text-white flex justify-center items-center w-8 h-8"><?php echo e(count($quiz->questions)); ?></span></p>
        <p class="flex items-center gap-2">Correct <span class=" text-sm radius-full text-white flex justify-center items-center w-8 h-8"><?php echo e($count_correct_answer); ?></span></p>
        <p class="flex items-center gap-2">Wrong <span class=" text-sm radius-full text-white flex justify-center items-center w-8 h-8"><?php echo e($count_incorrect_answer); ?></span></p>
    </div>
    <?php $__currentLoopData = $quiz->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="border border-gray-300 mb-4 p-4  <?php if(array_key_exists($question->id,$correct_answers)): ?> <?php echo e($correct_answers[$question->id] ? 'bg-green-100': 'bg-red-100'); ?> <?php endif; ?>}}">
           <h3 class=""> <?php echo e($i++); ?>.<?php echo e($question->name); ?></h3>
           <div class="flex gap-4">
               <?php $__currentLoopData = $answerOpitons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="flex items-center pl-4  rounded">
                       <input wire:click="answerUpdate(<?php echo e($question->id); ?>)" <?php if(array_key_exists($question->id,$correct_answers)): ?> disabled <?php endif; ?> wire:change="result" wire:model="answer.<?php echo e($question->id); ?>" id="answer-<?php echo e($option); ?>-<?php echo e($question->id); ?>"  type="radio" value="<?php echo e(explode('_',$option)[1]); ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                       <label for="answer-<?php echo e($option); ?>-<?php echo e($question->id); ?>" class="w-full py-4 cursor-pointer ml-2 text-sm font-medium"><?php echo e($question->$option); ?></label>
                   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
       </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/quiz-show.blade.php ENDPATH**/ ?>