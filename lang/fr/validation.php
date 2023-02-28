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

    'accepted' => ' :attribute doit être accepté.',
    'accepted_if' => ' :attribute doit être accepté quand :other est :value.',
    'active_url' => " :attribute n'est pas une URL valide.",
    'after' => ' :attribute doit être une date après :date.',
    'after_or_equal' => ' :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => ' :attribute ne doit contenir que des lettres.',
    'alpha_dash' => ' :attribute ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => ' :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => ' :attribute doit être un tableau.',
    'before' => ' :attribute doit être une date avant :date.',
    'before_or_equal' => ' :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => ' :attribute doit avoir entre :min et :max éléments.',
        'file' => ' :attribute doit avoir entre :min et :max kilobytes.',
        'numeric' => ' :attributedoit avoir entre :min et :max.',
        'string' => ' :attribute doit avoir entre :min et :max caractères.',
    ],
    'boolean' => ' :attribute champ doit être vrai ou faux.',
    'confirmed' => ' :attribute la confirmation ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => " :attribute la date n'est pas valide.",
    'date_equals' => ' :attribute doit être une date égale à :date.',
    'date_format' => ' :attribute ne correspond pas au format :format.',
    'declined' => ' :attribute doit être refusé.',
    'declined_if' => ' :attribute doit être refusé lorsque :other est :value.',
    'different' => ' :attribute et :other doit être différent.',
    'digits' => ' :attribute doit être :digits chiffres.',
    'digits_between' => ' :attribute Doit être entre :min et :max chiffres.',
    'dimensions' => " :attribute a des dimensions d'image non valides.",
    'distinct' => ' :attribute champ a une valeur en double.',
    'doesnt_start_with' => " :attribute ne peut pas commencer par l'un des éléments suivants : :values.",
    'email' => ' :attribute Doit être une adresse e-mail valide.',
    'ends_with' => " :attribute doit se terminer par l'un des éléments suivants : :values.",
    'enum' => 'La sélection :attribute est invalide.',
    'exists' => 'La sélection :attribute est invalide.',
    'file' => ' :attribute doit être un fichier.',
    'filled' => ' :attribute le champ doit avoir une valeur.',
    'gt' => [
        'array' => ' :attribute doit avoir plus de :value éléments.',
        'file' => ' :attribute doit avoir plus de :value kilobytes.',
        'numeric' => ' :attribute doit avoir plus de :value.',
        'string' => ' :attribute doit avoir plus de :value characters.',
    ],
    'gte' => [
        'array' => ' :attributedoit avoir :value éléments ou plus.',
        'file' => ' :attribute doit être supérieur ou égal à :value kilobytes.',
        'numeric' => ' :attribute doit être supérieur ou égal à :value.',
        'string' => ' :attribute doit être supérieur ou égal à :value characters.',
    ],
    'image' => ' :attribute doit être une image.',
    'in' => ' choisi :attribute est invalide.',
    'in_array' => " :attribute le champ n'existe pas dans :other.",
    'integer' => ' :attribute Doit être un entier.',
    'ip' => ' :attribute doit être une adresse IP valide.',
    'ipv4' => ' :attribute doit être une adresse IPv4 valide.',
    'ipv6' => ' :attribute doit être une adresse IPv6 valide.',
    'json' => ' :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'array' => ' :attribute doit avoir moins de :value éléments.',
        'file' => ' :attribute doit être inférieur à :value kilobytes.',
        'numeric' => ' :attribute doit être inférieur à :value.',
        'string' => ' :attribute doit être inférieur à :value characters.',
    ],
    'lte' => [
        'array' => ' :attribute ne doit pas avoir plus de :value éléments.',
        'file' => ' :attribute doit être inférieur ou égal à :value kilobytes.',
        'numeric' => ' :attribute doit être inférieur ou égal à :value.',
        'string' => ' :attribute doit être inférieur ou égal à :value caractères.',
    ],
    'mac_address' => ' :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => ' :attribute ne doit pas avoir plus de :max éléments.',
        'file' => ' :attribute ne doit pas être supérieur à :max kilobytes.',
        'numeric' => ' :attribute ne doit pas être supérieur à :max.',
        'string' => ' :attribute ne doit pas être supérieur à :max caractères.',
    ],
    'mimes' => ' :attribute doit être un fichier de type : :values.',
    'mimetypes' => ' :attribute doit être un fichier de type : :values.',
    'min' => [
        'array' => ' :attributedoit avoir au moins :min éléments.',
        'file' => ' :attribute doit être au moins :min kilobytes.',
        'numeric' => ' :attribute doit être au moins :min.',
        'string' => ' :attribute doit être au moins :min caractères.',
    ],
    'multiple_of' => ' :attribute doit être un multiple de :value.',
    'not_in' => ' choisi :attribute est invalide.',
    'not_regex' => ' :attribute format est invalide.',
    'numeric' => ' :attribute doit être un nombre.',
    'password' => [
        'letters' => ' :attribute doit contenir au moins une lettre.',
        'mixed' => ' :attribute doit contenir au moins une majuscule et une minuscule.',
        'numbers' => ' :attribute doit contenir au moins un chiffre.',
        'symbols' => ' :attribute doit contenir au moins un symbole.',
        'uncompromised' => ' donné :attribute est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present' => ' :attribute le champ doit être présent.',
    'prohibited' => ' :attribute le terrain est interdit.',
    'prohibited_if' => ' :attribute le terrain est interdit lorsque :other est :value.',
    'prohibited_unless' => ' :attribute le terrain est interdit sauf si :other est dans :values.',
    'prohibits' => " :attribute champ interdit :other d'être présent.",
    'regex' => " :attribute le format n'est pas valide.",
    'required' => ' :attribute Champ requis.',
    'required_array_keys' => ' :attribute le champ doit contenir des entrées pour : :values.',
    'required_if' => ' :attribute Champ requis lorsque :other est :value.',
    'required_unless' => ' :attribute Champ requis sauf si :other est dans :values.',
    'required_with' => ' :attribute Champ requis lorsque :values est present.',
    'required_with_all' => ' :attribute Champ requis lorsque :values sont present.',
    'required_without' => ' :attribute Champ requis lorsque :values ne sont pas present.',
    'required_without_all' => ' :attribute Champ requis lorsque none of :values are present.',
    'same' => ' :attribute et :other doit correspondre.',
    'size' => [
        'array' => ' :attribute must contain :size items.',
        'file' => ' :attribute doit être :size kilobytes.',
        'numeric' => ' :attribute doit être :size.',
        'string' => ' :attribute doit être :size caractères.',
    ],
    'starts_with' => " :attribute doit commencer par l'un des éléments suivants : :values.",
    'string' => ' :attribute doit être chaine.',
    'timezone' => ' :attribute doit être un fuseau horaire valide.',
    'unique' => ' :attribute a déjà été pris.',
    'uploaded' => ' :attribute échec du téléchargement.',
    'url' => ' :attribute doit être une URL valide.',
    'uuid' => ' :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
