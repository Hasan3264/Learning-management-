<div>
    <table class="table w-full">
           <tr>
              <th class="text-start">Id</th>
              <th class="text-start">User</th>
              <th class="text-start">Deu Date</th>
              <th class="text-start">Total Amount</th>
              <th class="text-start">Paid</th>
              <th class="text-start">Deu</th>
              <th class="text-start">Action</th>
           </tr>
           <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                     <td> <?php echo e($invoice->id); ?></td>
                     <td> <?php echo e($invoice->user->name); ?></td>
                     <td> <?php echo e(date('F j, Y', strtotime($invoice->due_date))); ?></td>
                     <td> <?php echo e($invoice->amount()['total']); ?></td>
                     <td> <?php echo e($invoice->amount()['paid']); ?></td>
                     <td> <?php echo e($invoice->amount()['deu']); ?></td>
                     <td class="flex justify-between">
                        <a href="">
                         <?php echo $__env->make('components/icon/edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                        <a href="<?php echo e(route('invoice-show', $invoice->id)); ?>">
                         <?php echo $__env->make('components.icon.eye', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                      <form onsubmit="return confirm('Are You Sure?')" wire:submit.prevent="invoiceDelete(<?php echo e($invoice->id); ?>)">
                           <button> <?php echo $__env->make('components/icon/trash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></button>
                      </form>
                    </td>
                </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="mt-4">
        <?php echo e($invoices->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\Mahmudul Hassan\Desktop\lms-app\resources\views/livewire/invoice-index.blade.php ENDPATH**/ ?>