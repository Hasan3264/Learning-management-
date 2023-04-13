<div>
    <h2>Information</h2>
    <p>Invoice to: <?php echo e($invoice->user->name); ?></p>

    <table class="table-auto w-full">
        <tr>
            <th class="lms-cell-border border text-left">Name</th>
            <th class="lms-cell-border border">Price</th>
            <th class="lms-cell-border border">Quantity</th>
            <th class="lms-cell-border border">Total</th>
        </tr>

        <?php $__currentLoopData = $invoice->Invoiceitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="lms-cell-border border  "><?php echo e($item->name); ?></td>
            <td class="lms-cell-border border text-center">$<?php echo e(number_format($item->price, 2)); ?></td>
            <td class="lms-cell-border border text-center"><?php echo e($item->quantity); ?></td>
            <td class="lms-cell-border border text-right">$<?php echo e(number_format($item->price * $item->quantity, 2)); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr class="mb-6">
            <td colspan="3" class="lms-cell-border border text-right">Subtotal</td>
            <td  class="border lms-cell-border text-right">$<?php echo e(number_format($invoice->amount()['total'], 2)); ?></td>
        </tr>
        <tr class="mb-6">
            <td colspan="3" class="border lms-cell-border text-right">Paid</td>
            <td class="border lms-cell-border text-right">- $<?php echo e(number_format($invoice->amount()['paid'], 2)); ?></td>
        </tr>
        <tr class="mb-6">
            <td colspan="3" class="border lms-cell-border text-right">Due</td>
            <td class="border lms-cell-border text-right">$<?php echo e(number_format($invoice->amount()['deu'], 2)); ?></td>
        </tr>
    </table>




    <?php if($enableAddItem): ?>
    <form wire:submit.prevent="saveNewItem" class="mt-8">
        <div class="flex mb-4">
            <div class="w-full">
                <?php echo $__env->make('components.form-fild-dynamic', [
                    'name' => 'name',
                    'label' => 'Name',
                    'type' => 'text',
                    'placeholder' => 'Item name',
                    'required' => 'required',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="min-w-max ml-4">
                <?php echo $__env->make('components.form-fild-dynamic', [
                    'name' => 'price',
                    'label' => 'Price',
                    'type' => 'number',
                    'placeholder' => 'Type price',
                    'required' => 'required',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="min-w-max ml-4">
                <?php echo $__env->make('components.form-fild-dynamic', [
                    'name' => 'quantity',
                    'label' => 'Quantity',
                    'type' => 'number',
                    'placeholder' => 'Type quantity',
                    'required' => 'required',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>


        </div>
        <div class="flex">
            <?php echo $__env->make('components.wire-loadingbtn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <button wire:click="addNewItem" type="button lms-btn mt-8 mb-8">Cancel</button>
        </div>
    </form>
    <?php else: ?>
        <button wire:click="addNewItem" class="underline lms-btn mt-8 mb-8">Add</button>
    <?php endif; ?>


    <h3 class="font-bold text-lg mt-6 mb-2">Payments</h3>
    <ul class="mb-4">
        <?php $__currentLoopData = $invoice->payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e(date('F j, Y - g:i:a', strtotime($payment->created_at))); ?> - $<?php echo e(number_format($payment->amount, 2)); ?> - transaction ID: <?php echo e($payment->transaction_id); ?> <button wire:click="refund(<?php echo e($payment->id); ?>)" class="bg-red-500 text-white px-2 text-xs">Refund</button></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/invoice-edit.blade.php ENDPATH**/ ?>