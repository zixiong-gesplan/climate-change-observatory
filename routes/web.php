<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Front.Home.index');
});

Route::get('/cambio-climatico', function () {
    return view('Front.Climate-Change.index');
});

Route::get('/observatorio', function () {
    return view('Front.Observatory.index');
});
Route::get('/mitigacion', function () {
    $data = [
        [
            'category' => "Desarrollo energético",
            'title' => "Instalación de placas fotovóltaicas.",
            'src' => "https://live.staticflickr.com/7193/6790847394_8e5667ee78_b.jpg",
        ],[
            'category' => "Zonas verdes",
            'title' => "Cuidamos el medio ambiente.",
            'src' => "https://rtvc.es/archivos/2021/10/FOTO-DRAGO-MILENARIO-ICOD-DE-LOS-VINOS-2-803x1024.jpg",
        ],[
            'category' => "Desarrollo energético",
            'title' => "Energía eólica.",
            'src' => "https://www.puertodelrosario.org/wp-content/uploads/Aerogeneradores.jpg",

        ],[
            'category' => "Movilidad sostenible",
            'title' => "Por una movilidad más limpia entre las islas.",
            'src' => "https://live.staticflickr.com/6027/5883642831_749356907b_b.jpg"
        ],[
            'category' => "Divulgación",
            'title' => "Participación en diferentes medios.",
            'src' => "https://www.gobiernodecanarias.org/cmsgob1/export/sites/cambioclimatico/galerias/Conferencia_internacional_alteraciones_climaticas.jpeg_1585730967.jpeg",
        ],[
            'category' => "Biodiversidad",
            'title' => "Monitorización de la biodiversidad.",
            'src' => "https://redpromar.org/img/bg-cover.png",
        ]
    ];

    return view('Front.Mitigation.index',  ['data' => $data]);
});

Route::get('/participacion-ciudadana', function () {
    return view('Front.Citizenship.index');
});

Route::get('/gobernanza', function () {
    return view('Front.Governance.index');
});

Route::get('/huella-carbono', function (){
    return view('Front.Tools.CarbonFootprint.index');
});