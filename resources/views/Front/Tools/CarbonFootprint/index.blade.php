@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-xl font-bold text-gray-800 pt-6 pb-2">Calcula tu huella de carbono</h1>
    </div>

    <main class="container mx-auto px-4">
        <form id="carbonFootprintForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <fieldset class="mb-6">
                <legend class="text-gray-900 font-semibold mb-4">Transporte</legend>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">¿Cuántos kilómetros recorres en coche cada semana?</label>
                    <input type="number" name="carKm" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">¿Qué tipo de combustible usa tu vehículo?</label>
                    <select name="fuelType" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="gasoline">Gasolina</option>
                        <option value="diesel">Diésel</option>
                        <option value="electric">Eléctrico</option>
                    </select>
                </div>
            </fieldset>
            
            <fieldset class="mb-6">
                <legend class="text-gray-900 font-semibold mb-4">Consumo de energía en el hogar</legend>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">¿Cuántos kilovatios hora de electricidad consumes al mes?</label>
                    <input type="number" name="electricityConsumption" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
            </fieldset>
            
            <fieldset class="mb-6">
                <legend class="text-gray-900 font-semibold mb-4">Dieta y consumo</legend>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">¿Cuántas veces a la semana consumes carne?</label>
                    <input type="number" name="meatConsumption" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
            </fieldset>
            
            <fieldset class="mb-6">
                <legend class="text-gray-900 font-semibold mb-4">Gestión de residuos</legend>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="recycles" value="yes" class="mr-2 leading-tight">
                    <label class="text-gray-700 text-sm font-bold">¿Reciclas regularmente papel, plástico y vidrio?</label>
                </div>
            </fieldset>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Calcular Huella de Carbono</button>
        </form>

        <div id="result" class="fixed bottom-4 right-4 w-72 bg-white p-4 shadow-lg rounded-lg text-sm font-medium text-gray-700">
            Tu huella de carbono anual es de: -- kg de CO2.
        </div>
        <p>
            Idea: Que este formulario este vinculado a la documentación realizada en Planclimac y Planclimac2, añadiendo los datos de 
            <a 
                class="text-blue-500 hover:underline"
            href="https://www.gobiernodecanarias.org/medioambiente/descargas/Cofinanciacion-europea/PLANCLIMAC_PUBLICACIONES/Guia-de-Forma%C3%A7%C3%A3o-em-Arquitetura-Bioclim%C3%A1tica-e-Efici%C3%AAncia-Energ%C3%A9tica-nos-A%C3%A7ores.pdf"> manual de arquitectura bioclimatica</a> 
            y darle un valor añadido a la documentación
        </p>
        <script>
            document.getElementById('carbonFootprintForm').addEventListener('submit', function(event) {
                event.preventDefault();
                let carKm = parseFloat(document.querySelector('input[name="carKm"]').value);
                let fuelType = document.querySelector('select[name="fuelType"]').value;
                let electricityConsumption = parseFloat(document.querySelector('input[name="electricityConsumption"]').value);
                let meatConsumption = parseFloat(document.querySelector('input[name="meatConsumption"]').value);
                let recycles = document.querySelector('input[name="recycles"]').checked;
                
                let co2Emissions = 0;

                // Cálculos para el transporte (anualizado)
                switch (fuelType) {
                    case 'gasoline':
                        co2Emissions += carKm * 0.21 * 52;  // Anualizando la emisión por km semanal
                        break;
                    case 'diesel':
                        co2Emissions += carKm * 0.18 * 52;
                        break;
                    case 'electric':
                        co2Emissions += carKm * 0.05 * 52;
                        break;
                }

                // Cálculos para el consumo de energía (anualizado)
                co2Emissions += electricityConsumption * 0.4 * 12;  // Anualizando el consumo mensual

                // Cálculos para la dieta (anualizado)
                co2Emissions += meatConsumption * 27 * 52;  // Anualizando el consumo semanal de carne

                // Cálculos para la gestión de residuos
                if (recycles) {
                    co2Emissions -= 2;  // Esto es una reducción anual fija
                }

                document.getElementById('result').innerHTML = "Tu huella de carbono anual es de: " + co2Emissions.toFixed(2) + " kg de CO2.";
            })
        </script>
    </main>
@endsection