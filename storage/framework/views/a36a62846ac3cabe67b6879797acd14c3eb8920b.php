
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
            <h2 class="font-semibold text-xl leading-tight">
                <?php echo e(__('Invoice')); ?>

            </h2>

            <a class="lms-btn" href="<?php echo e(route('invoice_index')); ?>">back</a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('invoice-edit', ['invoiceId' => $invoice->id,'invoice_id' => $invoice->id])->html();
} elseif ($_instance->childHasBeenRendered('WDKgQPZ')) {
    $componentId = $_instance->getRenderedChildComponentId('WDKgQPZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('WDKgQPZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WDKgQPZ');
} else {
    $response = \Livewire\Livewire::mount('invoice-edit', ['invoiceId' => $invoice->id,'invoice_id' => $invoice->id]);
    $html = $response->html();
    $_instance->logRenderedChild('WDKgQPZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                    <?php if($invoice->amount()['deu'] > 0): ?>
                    <h2 class="font-bold mb-2">Add a payment</h2>
                    <form method="post" action="<?php echo e(route('stripe')); ?>"> <?php echo csrf_field(); ?>
                        <div class="flex mb-4">
                            <div class="w-full">
                                <input value="4242424242424242" name="card_no" type="number" class="lms-input" placeholder="Card number">
                            </div>
                            <div class="min-w-max ml-4">
                                <input value="12/28" name="card_expiry_date" type="text" class="lms-input" placeholder="Expiry month/year">
                            </div>
                            <div class="min-w-max ml-4">
                                <input value="123" name="card_ccv" type="text" class="lms-input" placeholder="CCV">
                            </div>
                            <div class="min-w-max ml-4">
                                <input name="amount" type="number" class="lms-input" value="<?php echo e(number_format($invoice->amount()['deu'], 2)); ?>" placeholder="<?php echo e(number_format($invoice->amount()['deu'], 2)); ?>">
                            </div>
                            <input type="hidden" name="invoice_id" value="<?php echo e($invoice->id); ?>">
                        </div>
                        <button type="submit" class="lms-btn">Pay Now</button>
                    </form>
                    <?php endif; ?>


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

<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/invoice/show.blade.php ENDPATH**/ ?>