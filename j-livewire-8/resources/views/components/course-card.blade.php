<div>
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <!-- nombre de la ruta como se cunfiguro web en href de la etiqueta a 
        mas el elemento que recibe-->
        <a href="{{ route('course', $course->slug) }}">
            <img src="{{ $course->image }}" class="rounded-md mb-2">
            <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
            <h2 class="tect-md text-gray-500">{{ $course->excerpt }}</h2>

            <img 
                src="{{ $course->user->avatar }}"
                class="reunded-full mt-4 mx-auto h-16 w-16"
            >
        </a>
    </div>
</div>