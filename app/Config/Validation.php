<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $categorias = [
        'titulo' => [
            'rules' => 'required|min_length[3]|max_Length[255]',
            'errors' => [
                'required' => 'Debes introducir un título',
                'min_length' => 'El título debe contener al menos 3 caracteres',
                'max_length' => 'El título no puede exceder de 255 caracteres'
            ]
        ]
    ];

    public $peliculas = [
        'titulo' => [
            'rules' => 'required|min_length[3]|max_Length[255]',
            'errors' => [
                'required' => 'Debes introducir un título',
                'min_length' => 'El título debe contener al menos 3 caracteres',
                'max_length' => 'El título no puede exceder de 255 caracteres'
            ]
        ],
        'descripcion' => [
            'rules' => 'required|min_length[3]|max_Length[255]',
            'errors' => [
                'required' => 'Debes introducir una descripcion',
                'min_length' => 'La descripción debe contener al menos 3 caracteres',
                'max_length' => 'La descripción no puede exceder de 255 caracteres'
            ]
        ]
    ];
}
