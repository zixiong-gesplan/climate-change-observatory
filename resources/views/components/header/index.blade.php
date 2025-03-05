<nav class="sticky top-0 z-10 bg-white border-gray-200 dark:bg-gray-900">
    <div class="w-full max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <img src="https://interregmac.org/wp-content/uploads/2023/07/Group-9.jpg" class="w-1/4 mx-auto"/>
    </div>
	<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
		<a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
			<img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
		</a>
		<x-header.lang/>
		<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
		<ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
			<li>
			<x-header.link link="/cambio-climatico" label="El cambio climatico" current="current"/>
			</li>
			<li>
			<x-header.link link="/observatorio" label="El observatorio" />
			</li>
			<li>
			<x-header.link link="/mitigacion" label="Mitigación" />
			</li>
			<li>
				<button 
					id="menu-dropdown-button" 
					data-collapse-toggle="menu-dropdown" 
					class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
				>
					Adaptación 
					<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
					</svg>
				</button>
			</li>
			<li>
			<x-header.link link="/participacion-ciudadana" label="Participación ciudadana" />
			</li>
			<li>
			<x-header.link link="/gobernanza" label="Gobernanza" />
			</li>
		</ul>
		</div>
	</div>

	<div id="menu-dropdown" class="hidden absolute w-full z-20 shadow-xs bg-gray-50 md:bg-white dark:bg-gray-800">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
		<ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Huella de Carbono</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Calcula el impacto de tu huella de carbono.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Escenarios Climáticos</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Predicciones climaticas en el periodo de 50 y 100 años.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Atlas Macaronésico</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Aplicación que integra nuestro trabajo.</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">IDAFE</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Concienciación del Cambio Climático en Colegios e Institutos.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-red-500">
                        <div class="font-semibold">Informes de Coyuntura Ambiental</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Un pedazo de informe que hace un gran equipo.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="font-semibold">Más Iniciativas</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Otras iniciativas para el cambio climático.</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</nav>
