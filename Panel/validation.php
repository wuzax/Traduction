<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute doit être accepté.',
    'active_url' => ':attribute n\'est pas un URL valide.',
    'after' => ':attribute doit être une date après :date.',
    'after_or_equal' => ':attribute doit être une date après ou égale à :date.',
    'alpha' => ':attribute ne doit contenir que des lettres.',
    'alpha_dash' => ':attribute ne peut contenir que des lettres, des chiffres, et des tirets.',
    'alpha_num' => ':attribute ne peut contenir que des lettres et des nombres.',
    'array' => ':attribute doit être un tableau.',
    'before' => ':attribute doit être une date avant :date.',
    'before_or_equal' => ':attribute doit être une date avant ou égale à :date.',
    'between' => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file' => ':attribute doit être entre :min et :max kilobytes.',
        'string' => ':attribute doit être entre :min et :max caractères.',
        'array' => ':attribute doit avoir entre :min et :max articles.',
    ],
    'boolean' => 'Le champ :attribute doit être sur vrai ou faux.',
    'confirmed' => ':attribute de confirmation ne correspond pas.',
    'date' => ':attribute n\'est pas une date valide.',
    'date_format' => ':attribute ne correspond pas au format :format.',
    'different' => ':attribute et :other doit être différent.',
    'digits' => ':attribute doit être :digits chiffres.',
    'digits_between' => ':attribute doit être entre :min et :max chiffres.',
    'dimensions' => ':attribute n\'a pas les bonnes dimensions d\'images.',
    'distinct' => 'Le champ :attribute a une valeur dupliquée.',
    'email' => ':attribute doit être une adresse e-mail valide.',
    'exists' => 'L\':attribute séléctionné est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => 'Le champ :attribute est requis.',
    'image' => ':attribute doit être une image.',
    'in' => 'L\' :attribute sélectionné n\'est pas valide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => ':attribute doit être en entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'json' => ':attribute doit être une chaîne de caractères JSON valide.',
    'max' => [
        'numeric' => ':attribute ne peut pas être supérieur à :max.',
        'file' => ':attribute ne peut pas être supérieur à :max kilobytes.',
        'string' => ':attribute ne peut pas être supérieur à :max caractères.',
        'array' => ':attribute peut ne pas avoir plus de :max articles.',
    ],
    'mimes' => ':attribute doit être un fichier de type: :values.',
    'mimetypes' => ':attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => ':attribute doit être au moins à :min.',
        'file' => ':attribute doit être au moins à :min kilobytes.',
        'string' => ':attribute à moins de :min caractères.',
        'array' => ':attribute doit avoir au moins :min articles.',
    ],
    'not_in' => 'L\' :attribute sélectionné n'est pas valide.',
    'numeric' => ':attribute doit être un nombre.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format :attribute n\'est pas valide.',
    'required' => 'Le champ :attribute est requis.',
    'required_if' => 'Le champ :attribute est requis quand :other est :value.',
    'required_unless' => 'Le champ :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est requis quand :values est présente.',
    'required_with_all' => 'Le champ :attribute est requis quand :values est présente.',
    'required_without' => 'Le champ :attribute est requis quand :values n\'est pas présente.',
    'required_without_all' => 'Le champ :attribute est requis quand aucunes :values sont présentes.',
    'same' => ':attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => ':attribute doit être :size.',
        'file' => ':attribute doit être :size kilobytes.',
        'string' => ':attribute doit être :size caractères.',
        'array' => ':attribute doit contenir :size articles.',
    ],
    'string' => ':attribute doit être une chaîne de caractères.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute est déjà utilisé.',
    'uploaded' => ':attribute à rencontré un problème lors de l\'upload.',
    'url' => 'Le format :attribute n\'est pas valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env variable',
    ],
];
