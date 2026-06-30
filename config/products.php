<?php

return [
    'filtro-cartucho-industrial' => [
        'category' => 'filtracion',
        'name' => 'Filtro de Cartucho Industrial',
        'image' => 'img/muestra.jpg',
        'spec' => 'Microfiltracion de precision | Capacidad: 500-5000 m3/h',
        'summary' => 'Filtros de cartucho para sistemas cerrados con alta eficiencia de retencion.',
        'description' => 'Solucion de microfiltracion para capturar solidos finos en lineas de proceso. Recomendado para sectores alimentario, quimico y tratamiento de aguas de proceso.',
        'features' => [
            'Material: Poliester termofusionado',
            'Presion maxima: 10 bar',
            'Temperatura: -10C a 80C',
            'Vida util: 2000-3000 horas',
        ],
        'applications' => [
            'Prefiltracion de agua de proceso',
            'Proteccion de equipos aguas abajo',
            'Filtracion de fluidos industriales',
        ],
    ],
    'filtracion-por-bolsa' => [
        'category' => 'filtracion',
        'name' => 'Sistema de Filtracion por Bolsa',
        'image' => 'img/muestra.jpg',
        'spec' => 'Filtracion de gases | Caudal: 1000-10000 m3/h',
        'summary' => 'Sistema modular de bolsas reemplazables para despolvorizacion industrial.',
        'description' => 'Equipo de filtracion robusto para captura de polvo en instalaciones industriales. Facil acceso para mantenimiento y alta continuidad de operacion.',
        'features' => [
            'Material filtrante: Fieltro acrilico',
            'Presion diferencial: 0.5-2.5 mbar',
            'Eficiencia: 99.8%',
            'Limpieza: Sistema de pulso inverso',
        ],
        'applications' => [
            'Aspiracion de polvo de proceso',
            'Filtracion de aire en lineas de produccion',
            'Control de emisiones en planta',
        ],
    ],
    'filtro-mallas-metalicas' => [
        'category' => 'filtracion',
        'name' => 'Filtro de Mallas Metalicas',
        'image' => 'img/muestra.jpg',
        'spec' => 'Retencion de particulas gruesas | Malla: 10-500 um',
        'summary' => 'Filtro de acero inoxidable para prefiltracion y proteccion de equipos.',
        'description' => 'Elemento de filtracion mecanica con diferentes grados de malla para separar solidos de mayor tamano en fluidos de proceso.',
        'features' => [
            'Material: Acero inoxidable 316L',
            'Presion maxima: 25 bar',
            'Rango de malla: 10-500 um',
            'Mantenimiento: Facil desmontaje',
        ],
        'applications' => [
            'Proteccion de bombas y valvulas',
            'Prefiltracion de lineas de produccion',
            'Retencion de particulado en liquidos',
        ],
    ],
    'filtro-carbon-activado' => [
        'category' => 'filtracion',
        'name' => 'Filtro de Carbon Activado',
        'image' => 'img/muestra.jpg',
        'spec' => 'Adsorcion y desodorizacion | Purificacion avanzada',
        'summary' => 'Sistema de adsorcion para reducir compuestos organicos y olores.',
        'description' => 'Equipo para mejorar la calidad de fluidos mediante adsorcion en carbon granular, con configuraciones para distintos tiempos de contacto.',
        'features' => [
            'Carbon: Grado industrial ASTM',
            'Capacidad de adsorcion: 50-200 g/l',
            'Tiempo de contacto: 5-15 minutos',
            'Regimen: Ascendente o descendente',
        ],
        'applications' => [
            'Pulido final de agua de proceso',
            'Eliminacion de olores en corrientes de aire',
            'Reduccion de compuestos organicos',
        ],
    ],
    'filtro-membrana-ultrafiltracion' => [
        'category' => 'filtracion',
        'name' => 'Filtro de Membrana (Ultrafiltracion)',
        'image' => 'img/muestra.jpg',
        'spec' => 'Microfiltracion avanzada | Poro: 0.1-0.5 um',
        'summary' => 'Tecnologia de membrana para retencion de microparticulas y coloides.',
        'description' => 'Sistema de ultrafiltracion de alta precision orientado a procesos que requieren estabilidad de calidad en salida y reduccion de carga microbiologica.',
        'features' => [
            'Tipo de membrana: Polisulfona',
            'MWCO: 5,000-100,000 Da',
            'Flujo: 50-500 l/m2/h',
            'Retencion: 99.99%',
        ],
        'applications' => [
            'Tratamiento de agua industrial',
            'Recuperacion de producto',
            'Clarificacion de corrientes liquidas',
        ],
    ],
    'filtro-ceramica-porosa' => [
        'category' => 'filtracion',
        'name' => 'Filtro de Ceramica Porosa',
        'image' => 'img/muestra.jpg',
        'spec' => 'Filtracion de precision | Aplicaciones criticas',
        'summary' => 'Velas ceramicas para separaciones finas en condiciones exigentes.',
        'description' => 'Elemento filtrante para aplicaciones de alta exigencia termica y quimica, con estabilidad dimensional y excelente repetibilidad de filtrado.',
        'features' => [
            'Material: Ceramica Al2O3',
            'Tamano de poro: 0.2-10 um',
            'Temperatura maxima: 250C',
            'Presion maxima: 5 bar',
        ],
        'applications' => [
            'Procesos quimicos especiales',
            'Filtracion en farmaceutica',
            'Filtracion de bebidas y liquidos tecnicos',
        ],
    ],
    //Aqui van los productos de separación.
    'ILB-ILS Separators' => [
        'category' => 'separacion',
        'name' => 'ILB-ILS Separators',
        'image' => 'img/Separador-ILB_ILS.png',
        'spec' => [
            'rango_caudal' => '3 – 290 GPM estadounidenses (0,7 – 66 m³/h)',
            'presion_maxima' => '150 psi (10,3 bar)',
            'perdida_presion' => 'Tan baja como 5 psid',
            'materiales' => 'Versiones estandar en acero al carbono (ILB) y acero inoxidable (ILS).',
            'conexiones' => 'Rosca macho NPT (también disponible con roscas BSP o JIS)',
            'certificacion' => 'Modelos con certificacion NSF/ANSI 372 disponibles',
            //'modelos_disponibles' => 'ILB/ILS-0037, ILB/ILS-0050, ILB/ILS-0075, ILB/ILS-0100, ILB/ILS-0125, ILB/ILS-0150, ILB/ILS-0200, ILB/ILS-0250, ILB/ILS-0300',
        ],
        'summary' => 'Ideales para sistemas pequeños, instalaciones de derivacion y proteccion de equipos individuales, los separadores centrifugos LAKOS ILB-ILS eliminan hasta el 98 % de particulas de 74 micras o mas en una sola pasada.',
        'description' => 'Los ILB-ILS son una opcion preferida para remover arena, gravilla y otros solidos finos de sistemas de agua/liquido de proceso. Para solidos mas pesados, como virutas de metal y virutas de plomo, se obtienen resultados aun mejores. Su diseno sin piezas moviles reduce mantenimiento, paradas y complejidad operativa.',
        'features' => [
            'Tecnología patentada de separador centrífugo',
            'Eliminacion de hasta el 98 % de solidos de 74 micras o mayores',
            'Sin piezas móviles que se desgasten o necesiten reemplazo',
            'No hay que limpiar ni reemplazar pantallas, cartuchos, conos ni elementos filtrantes',
            'Requisitos de cero retrolavado y minimo tiempo de inactividad',
            'Perdida de presion baja, tan baja como 5 psid',
            'Construccion robusta para operacion industrial continua'
        ],
        'applications' => [
            'Separacion para eliminar arena, gravilla y otros solidos finos de sistemas de agua/liquidos',
            'Clarificación de corrientes de proceso',
            'Reduccion de carga de particulas',
            'Instalaciones de derivación (bypass)',
            'Protección de equipos individuales',
            'Filtración en sistemas de climatización, industrial, riego y aguas subterráneas'
        ],
        'destaque' => [
            'tiempo' => 'Sin tiempo de inactividad, Los separadores ILB-ILS están diseñados para un funcionamiento continuo sin paradas para limpieza o mantenimiento rutinario.',
            'mantenimiento' => 'No hay que limpiar ni reemplazar filtros ni elementos filtrantes. La acción centrífuga elimina la arena sin ensuciar ni restringir el flujo.',
            'lavado' => 'Minimice la pérdida de agua y líquidos con las opciones disponibles que garantizan cero pérdidas de líquidos.'
        ],
        'dimensiones_img' => 'img/dimensiones_separacionILB-ILS1.png',
        'url_video_youtube' => 'https://www.youtube.com/watch?v=PckuC5_T0F4&t=10s',
    ],
    'JPX Standard Efficiency Separator' => [
        'category' => 'separacion',
        'name' => 'JPX Standard Efficiency Separator',
        'image' => 'img/Separador-JPX.png',
        'spec' => [
            'rango_caudal' => '4 – 12.750 GPM estadounidenses (1 – 2.895 m³/h)',
            'presión_máxima' => '150 psi (10,3 bar)',
            'perdida_presion' => '3-12 psi (0,2-0,8 bar)',
            'temperatura_maxima' => '180 °F (82,2 °C). Consulte con la fábrica para temperaturas más altas',
            'materiales' => 'Estandar: acero al carbono y acero inoxidable 304L/316L. Materiales especiales bajo consulta.',
            'conexiones' => 'Entrada/salida con bridas ANSI de serie (bridas DIN o JIS disponibles bajo pedido)',
            'tamano_purga' => 'NPT macho desde 1" hasta 3", según modelo',
            //'modelos_disponibles' => 'JPX-0004, JPX-0010, JPX-0016, JPX-0028, JPX-0038, JPX-0060, JPX-0085, JPX-0130, JPX-0200-L/V, JPX-0285-L/V, JPX-0450-L/V, JPX-0650-L/V, JPX-1160-L/V, JPX-1850-L/V, JPX-2650-L/V, JPX-4200-L/V, JPX-6700-L/V',

        ],
        'summary' => 'La línea de separadores LAKOS Industrial JPX está diseñada para una amplia variedad de aplicaciones comerciales e industriales, con operación continua y alta confiabilidad.',
        'description' => 'El separador JPX de eficiencia estándar es ideal para aumentar la eficiencia del proceso, reducir costos de mantenimiento y bajar el consumo energético. Su rendimiento ha sido probado para eliminar hasta el 98 % de sólidos de 74 micras o mayores en una sola pasada.',
        'features' => [
            'Tecnología patentada de separador centrífugo',
            'Elimina hasta el 98 % de sólidos de 74 micras o mayores en una sola pasada',
            'Sin piezas móviles que se desgasten o necesiten reemplazo',
            'Filtración centrífuga continua sin retrolavado ni medios filtrantes reemplazables',
            'Pérdida de presión predecible y estable en función del caudal',
            'Conexiones bridadas de serie para instalación industrial'
        ],
        'applications' => [
            'Protección de boquillas de pulverización, orificios pequeños e intercambiadores de calor',
            'Prefiltración de corrientes para minimizar residuos y carga de sólidos aguas abajo',
            'Sistemas de pozos, sumideros, depósitos y circuitos de recirculación',
            'Aplicaciones industriales en petróleo y gas, metales primarios, climatización, riego e industria general',
            'Procesos con necesidad de operación continua y bajo mantenimiento',
        ],
        'destaque' => [
            'tiempo' => 'Filtración continua, Los separadores LAKOS están diseñados para funcionar de forma continua, sin paradas rutinarias para limpieza o mantenimiento',
            'mantenimiento' => 'Sin rejillas ni elementos filtrantes que limpiar o reemplazar. La acción centrífuga elimina los residuos sin restringir el flujo ni generar la suciedad que produce un filtro.',
            'rentabilidad' => 'Reduce los defectos, las piezas de repuesto y los ciclos de mantenimiento, al tiempo que aumenta la eficiencia y la uniformidad del producto.'
        ], 'dimensiones_img' => [
            'img/dimensiones_JPX1.png',
            'img/dimensiones_JPX2.png',
            'img/dimensiones_JPX3.png',
        ]
        
    ],
     'eJPX High Efficiency Separator' => [
        'category' => 'separacion',
        'name' => 'eJPX High Efficiency Separator',
        'image' => 'img/eJPX_high_efficiency.jpg',
        'spec' => [
            'rango_caudal' => '55 - 1.030 GPM estadounidenses (12 - 233 m3/h), segun modelo',
            'presion_maxima' => 'Hasta 150 psi (10,3 bar), segun configuracion',
            'perdida_presion' => 'Pérdida de presión baja y constante; tan baja como 3 psid',
            'tamano_particula_objetivo' => 'Elimina hasta el 98 % de solidos de 44 micras (malla 325) o mas, en una sola pasada',
            'piezas_moviles' => 'Sin piezas móviles que se desgasten o necesiten reemplazo',
            'smartpurge' => 'Preinstalado para integracion rapida con SmartPurge; purga automatica solo cuando es necesario',
            'conexiones' => 'Entrada/salida desde 1-1/2" hasta 6" y purga NPT desde 3/4" hasta 1-1/2", segun modelo',
            'materiales' => 'Estandar: acero al carbono y acero inoxidable 304L/316L. Opcionales: superduplex, cromo-molibdeno, titanio, Hastelloy, aleaciones de niquel, cuproniquel, plastico o fibra de vidrio (bajo consulta).',
            //'modelos_disponibles' => 'eJPX-0055 V, eJPX-0080 V, eJPX-0110 V, eJPX-0195-V/L, eJPX-0350-V/L, eJPX-0560-V/L',
        ],
        'summary' => 'El eJPX es una version de mayor eficiencia del separador JPX que elimina hasta el 98 % de los solidos de 44 micras (malla 325) o mayores en una sola pasada.',
        'description' => 'El separador de alta eficiencia eJPX esta orientado a aplicaciones industriales y comerciales que requieren filtracion mas fina de solidos en liquidos. Incluye preparacion para SmartPurge, sistema que detecta la acumulacion de solidos y activa la purga solo cuando se requiere, reduciendo desperdicio de liquido y costos operativos.',
        'features' => [
            'Separacion centrifuga de alta eficiencia para particulas finas (44 micras o mayores)',
            'El rendimiento de filtracion esta clasificado para eliminar hasta el 98 % de los solidos objetivo en una sola pasada',
            'Sin piezas móviles que se desgasten o necesiten reemplazo',
            'Sin barreras, rejillas ni medios filtrantes que reemplazar',
            'Perdida de presion baja y constante, tan baja como 3 psid',
            'Preinstalado para SmartPurge: purga automatica solo cuando hay acumulacion real de solidos'
        ],
        'applications' => [
            'Procesos industriales y comerciales donde se requiere filtracion de solidos mas fina que la de un JPX estandar',
            'Proteccion de boquillas de pulverizacion, orificios pequenos e intercambiadores de calor',
            'Prefiltracion para reducir carga de solidos antes de etapas sensibles del proceso',
            'Sistemas con necesidad de operacion continua y minima intervencion de mantenimiento',
            'Aplicaciones donde se busca minimizar la perdida de liquido durante purgas'
        ],
        'destaque' => [
            'tiempo' => 'Filtración continua, Los separadores LAKOS están diseñados para funcionar de forma continua, sin paradas rutinarias para limpieza o mantenimiento',
            'mantenimiento' => 'Sin rejillas ni elementos filtrantes que limpiar o reemplazar. La acción centrífuga elimina los residuos sin restringir el flujo ni generar la suciedad que produce un filtro.',
            'rentabilidad' => 'Reduce los defectos, las piezas de repuesto y los ciclos de mantenimiento, al tiempo que aumenta la eficiencia y la uniformidad del producto.'
        ],
         'dimensiones_img' => [
            'img/dimensiones-eJPX1.png',
            'img/dimensiones-eJPX2.png',

        ]
     ],    
];
