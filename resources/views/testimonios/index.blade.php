@extends('layouts.app')

@section('title', 'Testimonios')

@section('content')
{{-- Contenedor principal --}}
<div class="min-h-screen" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"
    x-init="$watch('darkMode', value => localStorage.setItem('darkMode', value))"
    :class="{ 'dark': darkMode }">

    {{-- Botón de cambiar tema --}}
    <div class="absolute top-4 right-4">
        <button @click="darkMode=!darkMode" type="button" class="relative inline-flex flex-shrink-0 h-6 mr-5 transition-colors duration-200 ease-in-out border-2 border-transparent rounded-full cursor-pointer bg-zinc-200 dark:bg-zinc-700 w-11 focus:outline-none focus:ring-2 focus:ring-neutral-700 focus:ring-offset-2" role="switch" aria-checked="false">
            <span class="sr-only">Use setting</span>
            <span class="relative inline-block w-5 h-5 transition duration-500 ease-in-out transform translate-x-0 bg-white rounded-full shadow pointer-events-none dark:translate-x-5 ring-0">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-500 ease-in opacity-100 dark:opacity-0 dark:duration-100 dark:ease-out" aria-hidden="true">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun w-4 h-4 text-neutral-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                    </svg>
                </span>
                <span class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity duration-100 ease-out opacity-0 dark:opacity-100 dark:duration-200 dark:ease-in" aria-hidden="true">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon w-4 h-4 text-neutral-700" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
                    </svg>
                </span>
            </span>
        </button>
    </div>

    {{-- Título  --}}
    <h1 class="text-3xl font-bold text-center mb-10 text-gray-800 dark:text-gray-200">Sección Testimonios</h1>

    <div class="space-y-12">
        {{-- Sección de Cards de Testimonios --}}
        <div>
            <h2 class="text-2xl font-semibold mb-4 text-gray-700 dark:text-gray-300">Cards Testimonios</h2>

            {{-- Separador de seccion --}}
            <div class="text-center text-gray-500 my-6">***************</div>

            {{-- Contenedor de cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                {{-- Card 1 --}}
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-full flex flex-col items-center">
                        {{-- Imagen del cliente --}}
                        <div class="w-24 h-24 mb-4 rounded-full overflow-hidden border-4 border-gray-500">
                            <img src="/image/felixRojas.png" alt="Felix Rojas" class="w-full h-full object-cover">
                        </div>

                        <p class="text-lg mb-4 flex-grow dark:text-gray-300 text-center">SEPRINAL y su tecnología innovadora ha transformado por completo la forma en que operamos.</p>
                        <div class="mt-auto w-full">
                            <p class="font-bold text-center dark:text-white">Felix Rojas</p>
                            <p class="text-gray-600 dark:text-gray-400 text-center">Director de Seguridad IPS</p>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-full flex flex-col items-center">
                        {{-- Imagen del cliente --}}
                        <div class="w-24 h-24 mb-4 rounded-full overflow-hidden border-4 border-gray-500">
                            <img src="/image/auroraPulido.png" alt="Aurora Pulido" class="w-full h-full object-cover">
                        </div>

                        <p class="text-lg mb-4 flex-grow dark:text-gray-300 text-center">Cada solución que nos han proporcionado SEPRINAL ha superado nuestras expectativas, brindándonos resultados duraderos y de alto rendimiento.</p>
                        <div class="mt-auto w-full">
                            <p class="font-bold text-center dark:text-white">Aurora Pulido</p>
                            <p class="text-gray-600 dark:text-gray-400 text-center">Gerente de Administración La Costeña</p>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="h-full flex flex-col items-center">
                        {{-- Imagen del cliente --}}
                        <div class="w-24 h-24 mb-4 rounded-full overflow-hidden border-4 border-gray-500">
                            <img src="/image/rodrigoCamacho.png" alt="Rodrigo Camacho" class="w-full h-full object-cover">
                        </div>

                        <p class="text-lg mb-4 flex-grow dark:text-gray-300 text-center">Es un placer contar con un proveedor que pone tanto énfasis en la excelencia y la fiabilidad de lo que ofrece.</p>
                        <div class="mt-auto w-full">
                            <p class="font-bold text-center dark:text-white">Rodrigo Camacho</p>
                            <p class="text-gray-600 dark:text-gray-400 text-center">Gerente de T.I. SCS</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center text-gray-500 my-6">***************</div>
        </div>

        {{-- Sección de Imágenes --}}
        <div>
            <h2 class="text-2xl font-semibold mb-4 text-gray-700 dark:text-gray-300">Imagenes implementación</h2>

            <div class="text-center text-gray-500 my-6">***************</div>

            {{-- Sección con imagen de fondo --}}
            <div class="relative bg-cover bg-center py-16 my-12 rounded-lg overflow-hidden " style="background-image: url('/image/background1.JPG'); min-height: 500px;">
                {{-- Caja del contenido --}}
                <div class="relative container mx-auto px-4 h-full">
                    {{-- Panel transparente --}}
                    <div class="bg-gray-800 bg-opacity-70 backdrop-blur-sm p-8 rounded-lg max-w-lg ml-auto h-full flex flex-col justify-center">
                        <h2 class="text-2xl font-bold text-center mb-4 text-white">Tu seguridad, nuestra prioridad!</h2>
                        <h3 class="text-xl text-center mb-6 text-white">Transforma tu hogar y negocio con lo último en tecnología:</h3>

                        <ul class="space-y-3 pl-5 text-white">
                            <li class="relative pl-4">
                                <span class="absolute left-0 text-red-400">•</span> Biometría avanzada: Acceso seguro con solo tu huella o rostro.
                            </li>
                            <li class="relative pl-4">
                                <span class="absolute left-0 text-red-400">•</span> Cámaras de seguridad inteligentes: Vigilancia en tiempo real, siempre a tu alcance.
                            </li>
                            <li class="relative pl-4">
                                <span class="absolute left-0 text-red-400">•</span> Casa inteligente: Controla tu hogar con solo un toque, ¡tú eres el dueño de la tecnología!
                            </li>
                            <li class="relative pl-4">
                                <span class="absolute left-0 text-red-400">•</span> Cerca eléctrica: Protección confiable y efectiva las 24/7.
                            </li>
                            <li class="relative pl-4">
                                <span class="absolute left-0 text-red-400">•</span> Equipos de cómputo de alto rendimiento: Potencia y eficiencia para cada tarea.
                            </li>
                        </ul>

                        <p class="mt-8 text-center text-lg text-white">
                            Todo lo que necesitas para un entorno seguro, inteligente y conectado. ¡Siente la tranquilidad de estar un paso adelante con nuestras soluciones integrales!
                        </p>

                        {{-- Botón  --}}
                        <div class="mt-8 text-center">
                            <a href="#" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                                Contáctanos ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sección adicional --}}
            <h2 class="text-2xl font-semibold mb-4 text-gray-700 dark:text-gray-300">Siguiente seccion</h2>
        </div>
    </div>
</div>
@endsection