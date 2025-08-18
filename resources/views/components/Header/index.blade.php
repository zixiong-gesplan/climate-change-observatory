<nav class="sticky top-0 z-10 bg-white border-gray-200 dark:bg-gray-900 drop-shadow-md" role="navigation">

	<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2 px-4">
		<a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
			<img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
		</a>
		<x-Header.langs/>
		<div class="hidden items-center justify-between w-full md:flex md:w-auto md:order-1  flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700" id="navbar-language">
            <x-Header.link link="/cambio-climatico" label="El cambio climatico" current="current"/>
            <x-Header.link link="/observatorio" label="El observatorio" />
            <x-Header.link link="/mitigacion" label="Mitigación" />
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
            <x-Header.link link="/participacion-ciudadana" label="Participación ciudadana" />
            <x-Header.link link="/gobernanza" label="Gobernanza" />
		</div>
	</div>
	<div id="menu-dropdown" class="hidden absolute w-full z-20 shadow-xs bg-gray-50 md:bg-white dark:bg-gray-800 border-t-2 border-blue-800">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
            <ul>
                <li>
                    <x-Header.dropdown-menu-link
                        href="/huella-carbono"
                        title="Huella de Carbono"
                        subtitle="Calcula el impacto de tu huella de carbono."
                    />
                </li>
                <li>
                    <x-Header.dropdown-menu-link
                        href="#"
                        title="Escenarios Climáticos"
                        subtitle="Predicciones climaticas en el periodo de 50 y 100 años."
                    />
                </li>
                <li>
                    <x-Header.dropdown-menu-link
                        href="#"
                        title="Atlas Macaronésico"
                        subtitle="Aplicación que integra nuestro trabajo."
                    />
                </li>
            </ul>
            <ul>
                <li>
                    <x-Header.dropdown-menu-link
                        href="#"
                        title="IDAFE"
                        subtitle="Concienciación del Cambio Climático en Colegios e Institutos."
                    />
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 text-red-500">
                        <div class="font-semibold">Informes de Coyuntura Ambiental</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Informe anual sobre el Cambio Climático en Canarias.</span>
                    </a>
                </li>
                <li>
                    <x-Header.dropdown-menu-link
                        href="#"
                        title="Más Iniciativas"
                        subtitle="Otras iniciativas para el cambio climático."
                    />
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full max-w-screen-xl flex flex-wrap items-center justify-between mx-auto border-t-2 border-blue-800">
        <img src="https://interregmac.org/wp-content/uploads/2023/07/Group-9.jpg" class="w-4/5 md:w-1/2 lg:w-1/3 mx-auto"/>
    </div>
</nav>
