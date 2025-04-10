@extends('layouts.app')

@section('title', 'Testimonios')

@section('content')
<h1 class="text-3xl font-bold text-center mb-10 text-gray-800">Testimonios</h1>

<div class="space-y-12">
    <!-- Hotel 43 -->
    <div>
        <h2 class="text-2xl font-semibold mb-4 text-gray-700">Cards Testimonios</h2>

        <div class="text-center text-gray-500 my-6">***************</div>

        <!-- Contenedor de cards horizontales -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Card Felix -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="h-full flex flex-col">
                    <p class="text-lg mb-4 flex-grow">SEPRINAL y su tecnología innovadora ha transformado por completo la forma en que operamos.</p>
                    <div class="mt-auto">
                        <p class="font-bold text-right">Felix Rojas</p>
                        <p class="text-gray-600 text-right">Director de Seguridad IPS</p>
                    </div>
                </div>
            </div>

            <!-- Card Aurora -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="h-full flex flex-col">
                    <p class="text-lg mb-4 flex-grow">Cada solución que nos han proporcionado SEPRINAL ha superado nuestras expectativas, brindándonos resultados duraderos y de alto rendimiento.</p>
                    <div class="mt-auto">
                        <p class="font-bold text-right">Aurora Pulido</p>
                        <p class="text-gray-600 text-right">Gerente de Administración La Costeña</p>
                    </div>
                </div>
            </div>

            <!-- Card Rodrigo -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="h-full flex flex-col">
                    <p class="text-lg mb-4 flex-grow">Es un placer contar con un proveedor que pone tanto énfasis en la excelencia y la fiabilidad de lo que ofrece.</p>
                    <div class="mt-auto">
                        <p class="font-bold text-right">Rodrigo Camacho</p>
                        <p class="text-gray-600 text-right">Gerente de T.I. SCS</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center text-gray-500 my-6">***************</div>
    </div>

    <!-- Hotel 45 -->
    <div>
        <h2 class="text-2xl font-semibold mb-4 text-gray-700">Imagenes implementación</h2>

        <div class="text-center text-gray-500 my-6">***************</div>

        <!-- Sección CTA con imagen de fondo -->
<div class="relative bg-cover bg-center py-16 my-12 rounded-lg overflow-hidden" style="background-image: url('/image/background1.JPG'); min-height: 500px;">
    <!-- Contenedor del contenido -->
    <div class="relative container mx-auto px-4 h-full">
        <!-- Panel transparente gris (ocupa la mitad derecha) -->
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

            <!-- Botón opcional de CTA -->
            <div class="mt-8 text-center">
                <a href="#" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    Contáctanos ahora
                </a>
            </div>
        </div>
    </div>
</div>

    <!-- Hotel 45 (repetido) -->
    <h2 class="text-2xl font-semibold mb-4 text-gray-700">Luceías grande hotel "45"</h2>
</div>
@endsection