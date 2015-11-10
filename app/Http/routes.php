<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    $items = [
        'Novedades' => [
            'submenu' => [
                'Crear / Comprar animales' => [],
                'Venta / Traslado animales' => [],
                'Semen (Pajillas) / Embriones' => [],
                'Eventos' => [],
                'Celos' => [],
                'Servicios IA/MN/TE' => [],
                'Palpaciones (Chequeo genital)' => [],
                'Partos, abortos, gestaciones interrumpidas' => [],
                'Pesaje de leche' => [],
                'Pesaje de animales' => [],
                'Secado(Destete) / apartar crías' => [],
                'Condición Corporal / Hierros' => [],
                'Clasificación fenotipica y lineal' => [],
                'Activar / Desactivar Animales' => [],
                'Programación - Entore' => [],
                'Exposiciones' => [],
                'BHIR' => [],
                'Cierre de inventario de ganado' => [],
                'Configurar lector Gs2 (Rumitag)' => [],
            ]
        ],
        'Alertas / Analisis' => [
            'submenu' => [
                'Alertas' => [],
                'Reproducción y estructura' => [],
                'Producción de leche' => [],
                'Producción de carne / Cria' => [],
                'Produccón de doble proposito(indices)' => [],
                'Eventos(Salud, Alimentación, Climáticos)' => [],
                'Inventario de animales por fincas' => [],
                'Movimientos de ganado' => [],
                'Multiples Hojas de vida y pedigrís' => [],
                'Progenie' => [],
                'Informe ejecutivo' => [],
                'Modelos de simulación' => [],
                'Embriones(Donadoras y receptoras)' => [],
            ]
        ],
        'Potreros' => [
            'submenu' => [
                'Potreros' => [],
                'Grupos' => [],
                'Existencias por potreros, lotes, grupos' => [],
                'Lotes sin numeración individual' => [],
                'Listados personalizados en potreros' => [],
            ]
        ],
        'Inv. Producción' => [
            'submenu' => [
                'Crear / Consultar' => [],
                'Compras' => [],
                'Salidas' => [],
                'Cuentas por pagar' => [],
                'Consultas / Listar' => [],
                'Imprimir comprobantes' => [],
                'Reversión' => [],
                'Pasar código de inventarios' => [],
                'Limpieza de inventarios' => [],
            ]
        ],
        'Economia' => [
            'submenu' => [
                'Entradas ingresos / Egresos' => [],
                'Consultar / Listar' => [],
                'Ver cuentas / Modificar' => [],
                'Generar plan automatico de cuentas' => [],
                'Colocar cuentas en ceros' => [],
                'Pasar plan de cuentas a otras fincas' => [],
            ]
        ],
        'Nómina' => [
            'submenu' => [
                'Creación' => [],
                'Movimiento de empleados' => [],
                'Reportes' => [],
            ]
        ],
        'Utilidades' => [
            'submenu' => [
                'Mantenimientos del sistema' => [],
                'Cambiar número de animal' => [],
                'Procesos especiales' => [],
                'Copia de seguridad' => [],
                'Restaurar base de datos' => [],
                'Causas, ganaderos,enfermedades...' => [],
                'Usuarios' => [],
                'Productores' => [],
                'Generar pedigrí' => [],
                'Configuración del sistema' => [],
                'Demostración del lector F210' => [],
            ]
        ],
    ];
    return view('welcome', compact('items'));
});
