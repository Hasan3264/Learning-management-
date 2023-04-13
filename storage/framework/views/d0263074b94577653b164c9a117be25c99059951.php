<div class="mx-auto p-4">
    <h1 class="font-bold mb-2 underline"><?php echo e($curriculum->course->name); ?></h1>
    <p class="mb-4 italic">Price: $<?php echo e($curriculum->course->price); ?></p>
    <p class="pb-6"><?php echo e($curriculum->course->description); ?></p>


    <h2 class="font-bold mb-2">Class</h2>
    <p class=" mb-4"><span>Name: </span><?php echo e($curriculum->name); ?></p>
    <h2 class="font-bold mb-2">Students - Present - <?php echo e($curriculum->presentStudents()); ?> | Absent <?php echo e($curriculum->course->students()->count() - $curriculum->presentStudents()); ?></h2>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Email</th>
            <th class="border px-4 py-2 text-center">Attendance</th>
        </tr>

        <?php $__currentLoopData = $curriculum->course->students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="border px-4 py-2"><?php echo e($student->name); ?></td>
            <td class="border px-4 py-2"><?php echo e($student->email); ?></td>
            <td class="border px-4 py-2">
                <div class="flex items-center justify-center gap-4">
                    <?php if($student->is_present($curriculum->id)): ?>
                       <p  class="lms-btn p-4"> Presented</p>
                    <?php else: ?>
                        <button wire:click="attendance(<?php echo e($student->id); ?>)" class="py-2 px-3 lms-btn">Present</button>
                    <?php endif; ?>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <h3 class="font-bold text-lg my-4">Notes</h3>
    <?php if(count($notes)>0): ?>
    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="mb-4 border border-gray-100 p-4"><?php echo e($note->description); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <p class="py-4 text-red-400">Not Found Any Note!</p>
    <?php endif; ?>

    <h4 class="font-bold mb-2">Add new note</h4>
    <form wire:submit.prevent="addNote">
        <div class="mb-4">
            <textarea wire:model="note" class="lms-input" placeholder="Type note"></textarea>
        </div>
        <button class="lms-btn" type="submit">Save</button>
    </form>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/curriculum-show.blade.php ENDPATH**/ ?>