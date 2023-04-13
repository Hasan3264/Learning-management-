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
        <h2 class="font-semibold text-xl text-gray-800 dark:text-black leading-tight">
            <?php echo e(__('Quistion Edit')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('quistion-edit', ['questionId' => $question_id,'question_id' => $question_id])->html();
} elseif ($_instance->childHasBeenRendered('FLTg1LX')) {
    $componentId = $_instance->getRenderedChildComponentId('FLTg1LX');
    $componentTag = $_instance->getRenderedChildComponentTagName('FLTg1LX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FLTg1LX');
} else {
    $response = \Livewire\Livewire::mount('quistion-edit', ['questionId' => $question_id,'question_id' => $question_id]);
    $html = $response->html();
    $_instance->logRenderedChild('FLTg1LX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/Question/edit.blade.php ENDPATH**/ ?>