<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
      <div class="flex justify-between">
          <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Quiz')); ?>

        </h2>
      </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:text-gray-200  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                        <form action="<?php echo e(route('quize.store')); ?>" method="post"> <?php echo csrf_field(); ?>
                        <div class="mb-4">
                            <label for="name" class="lms-lavel">Name</label>
                            <input type="text" name="name" id="name" class="lms-input" placeholder="Name">
                        </div>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-red-500 text-sm mt-1 mb-2"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <button type="submit" class="lms-btn">Add a quiz</button>
                    </form>

                </div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('quiz-index', [])->html();
} elseif ($_instance->childHasBeenRendered('mG2U1mf')) {
    $componentId = $_instance->getRenderedChildComponentId('mG2U1mf');
    $componentTag = $_instance->getRenderedChildComponentTagName('mG2U1mf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('mG2U1mf');
} else {
    $response = \Livewire\Livewire::mount('quiz-index', []);
    $html = $response->html();
    $_instance->logRenderedChild('mG2U1mf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/Quize/index.blade.php ENDPATH**/ ?>