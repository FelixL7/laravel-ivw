<?php

return [
    //Angebotskennung; site/domain
    'st' => env('IVW_DEFAULT_ST', ''),

    //Seitencode
    'cp' => env('IVW_DEFAULT_CP', ''),

    //Frabo Steuerung
    'sv' => env('IVW_DEFAULT_SV', ''),

    //Kommentar
    'co' => env('IVW_DEFAULT_CO', ''),

    //Privacy Settings
    'ps' => env('IVW_DEFAULT_PS', ''),
    'use_ps' => env('IVW_USE_PS', false),

    //MCVD Aktivierung
    'sc' => env('IVW_DEFAULT_SC', ''),
    'use_sc' => env('IVW_USE_SC', false),

    //Übertragungsmethode
    'method' => env('IVW_METHOD', 0),

    //wenn true -> volle Script Integration
    'enabled' => env('IVW_ENABLED', false),

    //Testmodus
    'test_mode' => env('IVW_TEST_MODE', false),
];
