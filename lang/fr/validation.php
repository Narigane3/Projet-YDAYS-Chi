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

    'accepted' => 'le champ :attribute doit être accepté.',
    'accepted_if' => 'le champ :attribute doit être accepté si :other est égale a :value.',
    'active_url' => 'le champ :attribute n\'est pas un URL valide.',
    'after' => 'Le champ :attribute doit être une date postérieure au :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieur ou égal à :date.',
    'alpha' => 'le champ :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'le champ :attribute ne doit contenir que des lettres, nombres, espaces et underscores.',
    'alpha_num' => 'Le champ :attribute ne doit contenir que des lettres et nombres.',
    'array' => 'le champ :attribute doit être un tableau.',
    'before' => 'le champ :attribute doit être un antérieur à :date.',
    'before_or_equal' => 'Le champ :attribute doit être antérieur ou égal à :date.',
    'between' => [
        'array' => 'Le champ :attribute doit être entre :min et :max des objets.',
        'file' => 'Le champ :attribute doit être entre :min et :max kilobytes.',
        'numeric' => 'le champ :attribute doit être entre :min et :max.',
        'string' => 'le champ :attribute doit être entre :min et :max caractères.',
    ],
    'boolean' => 'le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'le champ :attribute la confirmation ne correspond pas.',
    'current_password' => 'Le Mot de passe est incorrect.',
    'date' => 'le champ :attribute est une date incorrect .',
    'date_equals' => 'le champ :attribute doit être égal à :date.',
    'date_format' => 'le champ :attribute ne correspond pas au format :format.',
    'declined' => 'le champ :attribute doit être refusé.',
    'declined_if' => 'le champ :attribute doit être refusé quand :other est :value.',
    'different' => 'le champ :attribute et :other doivent être différent.',
    'digits' => 'le champ :attribute doit être de :digits digits.',
    'digits_between' => 'le champ :attribute doit être entre :min et :max digits.',
    'dimensions' => 'le champ :attribute a des dimensions incorrect.',
    'distinct' => 'le champ :attribute a une valeur dupliqué.',
    'doesnt_end_with' => 'le champ :attribute ne doit pas se terminer avec les valeurs suivante : :values.',
    'doesnt_start_with' => 'le champ :attribute ne doit pas commencer avec les valeurs suivante : :values.',
    'email' => 'le champ :attribute doit être une adresse mail valide.',
    'ends_with' => 'le champ :attribute doit pas se terminer avec les valeurs suivante :values.',
    'enum' => 'le champ sélectionné :attribute est incorrect.',
    'exists' => 'le champ sélectionné :attribute est incorrect.',
    'file' => 'le champ :attribute doit être un fichier.',
    'filled' => 'le champ :attribute doit être une valeur.',
    'gt' => [
        'array' => 'le champ  :attribute doit avoir plus que :value objets.',
        'file' => 'le champ :attribute doit être plus grand que :value kilobytes.',
        'numeric' => 'le champ :attribute doit être plus grand que  :value.',
        'string' => 'le champ :attribute doit être plus grand que :value caractères.',
    ],
    'gte' => [
        'array' => 'le champ :attribute doit avoir :value objets ou plus.',
        'file' => 'le champ :attribute doit être supérieur ou égale à :value kilobytes.',
        'numeric' => 'le champ :attribute doit être supérieur ou égal à :value.',
        'string' => 'le champ :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'image' => 'le champ :attribute doit être une image.',
    'in' => 'le champ sélectionné :attribute est incorrect.',
    'in_array' => 'le champ :attribute existe pas dans :other.',
    'integer' => 'le champ :attribute doit être un nombre entier.',
    'ip' => 'le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'le champ :attribute doit être une adresse IPv6 valide..',
    'json' => 'le champ :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'array' => 'le champ :attribute doit avoir moin que :value objets.',
        'file' => 'le champ :attribute doit être inférieur  que  :value kilobytes.',
        'numeric' => 'le champ :attribute doit être inférieur à :value.',
        'string' => 'le champ :attribute doit avoir moins que :value caractères.',
    ],
    'lte' => [
        'array' => 'le champ :attribute ne doit avoir plus éléments que :value.',
        'file' => 'le champ :attribute ne doit avoir plus ou être égal à :value kilobytes.',
        'numeric' => 'le champ :attribute ne doit avoir plus ou être égal à :value.',
        'string' => 'le champ :attribute doit avoir moin ou égale à :value caractères.',
    ],
    'mac_address' => 'le champ :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'le champ :attribute ne doit pas être supérieur à :max objets.',
        'file' => 'le champ :attribute ne doit pas être supérieur à :max kilobytes.',
        'numeric' => 'le champ :attribute ne doit pas être supérieur à :max.',
        'string' => 'le champ :attribute ne doit pas être supérieur à :max caractères.',
    ],
    'max_digits' => 'le champ :attribute ne doit pas être supérieur à :max digits.',
    'mimes' => 'le champ :attribute doit être un fichier de  type: :values.',
    'mimetypes' => 'The :attribute doit être un fichier de type: :values.',
    'min' => [
        'array' => 'le champ :attribute doit avoir au minimum :min objets.',
        'file' => 'le champ :attribute doit avoir au minimum :min kilobytes.',
        'numeric' => 'le champ :attribute doit avoir au minimum :min.',
        'string' => 'le champ :attribute doit avoir au minimum :min caractères.',
    ],
    'min_digits' => 'le champ :attribute doit avoir au minimum :min digits.',
    'multiple_of' => 'le champ :attribute doit être un multiple de :value.',
    'not_in' => 'le champ sélectionné :attribute est incorrect.',
    'not_regex' => 'le champ :attribute a un format incorrect.',
    'numeric' => 'le champ :attribute doit être un nombre.',
    'password' => [
        'letters' => 'le champ :attribute doit contenir au minimum une lettre.',
        'mixed' => 'le champ :attribute doit contenir au minimum une majuscule et une minuscule.',
        'numbers' => 'le champ :attribute doit contenir au minimum un nombre.',
        'symbols' => 'le champ :attribute doit contenir au minimum un symbole.',
        'uncompromised' => 'le champ donné :attribute est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present' => 'le champ :attribute doit être présent.',
    'prohibited' => 'le champ :attribute est interdit.',
    'prohibited_if' => 'le champ :attribute est interdit quand :other est :value.',
    'prohibited_unless' => 'le champ :attribute est interdit à moin que :other est dans :values.',
    'prohibits' => 'le champ :attribute interdit :other d être présent.',
    'regex' => 'le champ :attribute est incorrect.',
    'required' => 'le champ :attribute est requis.',
    'required_array_keys' => 'le champ :attribute doit contenir des entrées pour: :values.',
    'required_if' => 'le champ :attribute est requis quand :other est :value.',
    'required_if_accepted' => 'le champ :attribute requis quand :other est accepted.',
    'required_unless' => 'le champ :attribute est requis a moin que :other est dans :values.',
    'required_with' => 'le champ :attribute est requis quand :values est présent.',
    'required_with_all' => 'le champ :attribute est requis quand  :values sont présents.',
    'required_without' => 'le champ :attribute est requis quand :values est pas présent.',
    'required_without_all' => 'le champ :attribute est requis quand aucun des :values est présent.',
    'same' => 'le champ :attribute et :other doivent correspondre.',
    'size' => [
        'array' => 'le champ :attribute doit être de :size objets.',
        'file' => 'le champ :attribute  doit être de :size kilobytes.',
        'numeric' => 'le champ :attribute doit être de :size.',
        'string' => 'le champ :attribute doit être de :size caractères.',
    ],
    'starts_with' => 'le champ :attribute doit commencer avec les valeurs suivantes : :values.',
    'string' => 'le champ :attribute doit être une chaîne.',
    'timezone' => 'le champ :attribute doit être un fuseau horaire correct.',
    'unique' => 'le champ :attribute a déjà était pris .',
    'uploaded' => 'le champ :attribute a échoué à télécharger.',
    'url' => 'le champ :attribute doit être une URL valide.',
    'uuid' => 'le champ :attribute doit être un UUID valide .',

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
