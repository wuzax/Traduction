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
    'alpha' => ':attribute may only contain letters.',
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
    'in' => 'L\' :attribute sélectionné n'est pas valide.',
    'in_array' => 'Le champ :attribute n'existe pas dans :other.',
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
        'file' => 'The :attribute doit être au moins à :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values is present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',

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
