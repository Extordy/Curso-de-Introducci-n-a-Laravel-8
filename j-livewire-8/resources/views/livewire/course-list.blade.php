<div class="grid grid-cols-3 gap-4 mt-8">
    <!-- ciclo para imrpimir los cursos-->
    @foreach ($courses as $course )
    <!-- llamar el componente con el contenido de la variable curse-->
    <x-course-card :course="$course" />
    @endforeach
</div>
