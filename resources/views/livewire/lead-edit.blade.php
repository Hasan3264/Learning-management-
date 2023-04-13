<div>
    <h3 class="lms-heading">Edit Data</h3>
    <form action="" wire:submit.prevent="submitForm" class="mb-6">
        <div class="flex -mx-4 mb-4">
            <div class="flex-1 px-4">
                <label for="" class="lms-lavel">Edit Name:</label>
                <input class="lms-input"  type="text" wire:model="name">

                @error('name')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex-1 px-4">
                <label for="" class="lms-lavel">Edit Number:</label>
            <input class="lms-input" type="number" wire:model="number">

            @error('number')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
            </div>
        </div>
        @include('components.wire-loadingbtn')
    </form>





<h3 class="lms-heading"> Notes:</h3>
<table class="table w-full mb-4">
  @foreach ($notes as $note)
               <tr class="mb-4">
                 <td class="border m-5 px-4 -mx-4 "> {{$note->description}}</td>
               </tr>

  @endforeach
</table>
 <button wire:click="addNotes" class="lms-btn">Add Notes</button>

    <form wire:submit.prevent="submitNote" class="mt-4">
        <div class="mb-4">
            <label for="" class="lms-lavel">Add Description</label>
            <textarea class="lms-input" wire:model="note" cols="30"></textarea>

            @error('description')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button class="lms-btn" type="submit">Save</button>
    </form>

</div>
