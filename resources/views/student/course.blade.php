
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">{{ $course->title }}</h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 shadow-sm sm:rounded-lg">
            <p class="text-gray-700 mb-4">{{ $course->short_description }}</p>
            <div class="prose">
                {!! nl2br(e($course->content)) !!}
            </div>
        </div>
    </div>
</x-app-layout>