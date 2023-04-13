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
            <?php echo e(__('User Manipulate')); ?>

        </h2>

        <div class="buttons flex items-center">
             <a class="lms-btn mx-5" href="<?php echo e(route('role.index')); ?>">Role and Permission</a>
             <a class="lms-btn" href="<?php echo e(route('user.create')); ?>">Give Role User</a>
        </div>
      </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-manipulation', [])->html();
} elseif ($_instance->childHasBeenRendered('Mfq4kXm')) {
    $componentId = $_instance->getRenderedChildComponentId('Mfq4kXm');
    $componentTag = $_instance->getRenderedChildComponentTagName('Mfq4kXm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Mfq4kXm');
} else {
    $response = \Livewire\Livewire::mount('user-manipulation', []);
    $html = $response->html();
    $_instance->logRenderedChild('Mfq4kXm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/User/index.blade.php ENDPATH**/ ?>