<div class="mx-auto p-4">
    <h1 class="font-bold mb-2 underline">{{$course->name}}</h1>
    <p class="mb-4 italic">Price: ${{$course->price}}</p>
    <p class="pb-6">{{$course->description}}</p>


    <h2 class="font-bold mb-2">Classes</h2>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Actions</th>
        </tr>

        @foreach ($curriculums as $class)
        <tr>
            <td class="border px-4 py-2">{{$class->name}}</td>
            <td class="border px-4 py-2">
                <div class="flex items-center">
                    <a class="mx-3" href="{{route('class.edit',$class->id)}}">
                        @include('components.icon.edit')
                    </a>

                    <a class="mx-3" href="{{route('class.show', $class->id)}}">
                        @include('components.icon.eye')
                    </a>

                    <form class="mx-3" onsubmit="return confirm('Are you sure?');"
                        wire:submit.prevent="curriculamDelete({{$class->id}})">
                        <button type="submit">
                            @include('components.icon.trash')
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="mt-4">
        {{$curriculums->links()}}
    </div>
</div>
