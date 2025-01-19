<?php

declare(strict_types=1);

return [
    'accepted'             => 'Reiturinn :attribute verður að vera samþykktur.',
    'accepted_if'          => 'Samþykkja verður :attribute þegar :other er :value.',
    'active_url'           => 'Reiturinn :attribute er ekki leyfileg vefslóð.',
    'after'                => 'Reiturinn :attribute verður að vera dagsetning eftir :date.',
    'after_or_equal'       => ':Attribute verður að vera dagsetning eftir eða sú sama og :date.',
    'alpha'                => 'Reiturinn :attribute má aðeins innihalda bókstafi.',
    'alpha_dash'           => 'Reiturinn :attribute má aðeins innihalda bókstafi, tölur og undirstikanir.',
    'alpha_num'            => 'Reiturinn :attribute má aðeins innihalda bókstafi og tölur.',
    'array'                => 'Reiturinn :attribute verður að vera fylki.',
    'ascii'                => ':Attribute má aðeins innihalda einsbæta alfanumeríska stafi og tákn.',
    'before'               => 'Reiturinn :attribute verður að vera dagsetning eftir :date.',
    'before_or_equal'      => ':Attribute verður að vera dagsetning fyrir eða sú samaog :date.',
    'between'              => [
        'array'   => 'Reiturinn :attribute verður að vera á milli :min - :max staka.',
        'file'    => 'Reiturinn :attribute verður að vera á milli :min - :max kílóbæta.',
        'numeric' => 'Reiturinn :attribute verður að vera á milli :min - :max.',
        'string'  => 'Reiturinn :attribute verður að vera á milli :min - :max stafa.',
    ],
    'boolean'              => 'Reiturinn :attribute verður að vera réttur eða rangur.',
    'can'                  => 'Reiturinn :attribute inniheldur óheimilt gildi.',
    'confirmed'            => 'Staðfesting á reitnum :attribute passar ekki.',
    'contains'             => 'The :attribute field is missing a required value.',
    'current_password'     => 'Lykilorðið er rangt.',
    'date'                 => 'Reiturinn :attribute er ekki rétt dagsetning.',
    'date_equals'          => ':Attribute verður að vera dagsetning sem er sú sama og :date.',
    'date_format'          => 'Reiturinn :attribute passar ekki við :format.',
    'decimal'              => ':Attribute verða að hafa :decimal aukastafi.',
    'declined'             => ':Attribute verður að hafna.',
    'declined_if'          => ':Attribute verður að hafna þegar :other er :value.',
    'different'            => 'Reiturinn :attribute og :other verða að vera ólíkir.',
    'digits'               => 'Reiturinn :attribute verður að vera :digits tölustafir.',
    'digits_between'       => 'Reiturinn :attribute verður að vera á milli :min og :max tölustafa.',
    'dimensions'           => ':Attribute hefur ógilda myndvídd.',
    'distinct'             => ':Attribute reiturinn hefur tvítekið gildi.',
    'doesnt_end_with'      => ':Attribute má ekki enda á einu af eftirfarandi: :values.',
    'doesnt_start_with'    => ':Attribute mega ekki byrja á einu af eftirfarandi: :values.',
    'email'                => 'Reiturinn :attribute snið netfangsins er ekki rétt.',
    'ends_with'            => 'Við :attribute verður að enda með eftirfarandi: :values.',
    'enum'                 => 'Valin :attribute eru ógild.',
    'exists'               => 'Reiturinn :attribute er nú þegar til.',
    'extensions'           => 'Reiturinn :attribute verður að hafa eina af eftirfarandi viðbótum: :values.',
    'file'                 => ':Attribute verður að vera skrá.',
    'filled'               => 'Reiturinn :attribute verður að innihalda eitthvað.',
    'gt'                   => [
        'array'   => ':Attribute verður að hafa fleiri en :value atriði.',
        'file'    => ':Attribute verður að vera stærra en :value kílóbæti.',
        'numeric' => ':Attribute verður að vera stærra en :value.',
        'string'  => ':Attribute verður að vera lengri en :value stafir.',
    ],
    'gte'                  => [
        'array'   => ':Attribute verður að hafa :value eða fleiri atriði.',
        'file'    => ':Attribute verður að vera stærra en eða jafnt :value kílóbætum.',
        'numeric' => ':Attribute verður að vera stærra en eða jafnt :value.',
        'string'  => ':Attribute verður að vera lengri eða jafnlangur og :value stafir.',
    ],
    'hex_color'            => 'Reiturinn :attribute verður að vera gildur sextándabilslitur.',
    'image'                => 'Reiturinn :attribute verður að vera mynd.',
    'in'                   => 'Reiturinn :attribute er ekki réttur.',
    'in_array'             => ':Attribute reiturinn er ekki til í :other.',
    'integer'              => 'Reiturinn :attribute verður að vera tala.',
    'ip'                   => 'Reiturinn :attribute verður að vera lögleg IP-tala.',
    'ipv4'                 => ':Attribute verður að vera gild IPv4-tala.',
    'ipv6'                 => ':Attribute verður að vera gild IPv6-tala.',
    'json'                 => ':Attribute verður að vera gildur JSON-strengur.',
    'list'                 => 'Reiturinn :attribute verður að vera listi.',
    'lowercase'            => ':Attribute verða að vera lágstafir.',
    'lt'                   => [
        'array'   => ':Attribute verður að hafa færri en :value atriði.',
        'file'    => ':Attribute verður að vera minni en :value kílóbæti.',
        'numeric' => ':Attribute verður að vera minni en :value.',
        'string'  => ':Attribute verður að vera styttri en :value stafir.',
    ],
    'lte'                  => [
        'array'   => ':Attribute má ekki hafa fleiri en :value atriði.',
        'file'    => ':Attribute verður að vera minni eða jafnstór og :value kílóbæti.',
        'numeric' => ':Attribute verður að vera minna en eða jafnt :value.',
        'string'  => ':Attribute verður að vera styttri eða jafnlangur og :value stafir.',
    ],
    'mac_address'          => ':Attribute verður að vera gilt MAC vistfang.',
    'max'                  => [
        'array'   => 'Reiturinn :attribute verður að innihalda færri en :max stök.',
        'file'    => 'Reiturinn :attribute verður að vera minni en :max kílóbæt.',
        'numeric' => 'Reiturinn :attribute verður að innihalda færri stafi en :max.',
        'string'  => 'Reiturinn :attribute verður að innihalda færri en :max stafi.',
    ],
    'max_digits'           => ':Attribute má ekki hafa fleiri en :max tölustafi.',
    'mimes'                => 'Reiturinn :attribute verður að vera skrá af gerðinni: :values.',
    'mimetypes'            => 'Reiturinn :attribute verður að vera skrá af gerðinni: :values.',
    'min'                  => [
        'array'   => 'Reiturinn :attribute verður að vera að lágmarki :min stök.',
        'file'    => 'Reiturinn :attribute verður að vera að lágmarki :min kílóbæt.',
        'numeric' => 'Reiturinn :attribute verður að vera að lágmarki :min tölustafir.',
        'string'  => 'Reiturinn :attribute verður að vera að lágmarki :min stafir.',
    ],
    'min_digits'           => ':Attribute verða að hafa að minnsta kosti :min tölustafi.',
    'missing'              => ':Attribute reitinn hlýtur að vanta.',
    'missing_if'           => ':Attribute reitinn verður að vanta þegar :other er :value.',
    'missing_unless'       => ':Attribute reitinn verður að vanta nema :other sé :value.',
    'missing_with'         => ':Attribute reitinn verður að vanta þegar :values er til staðar.',
    'missing_with_all'     => ':Attribute reitinn verður að vanta þegar :values eru til staðar.',
    'multiple_of'          => 'Við :attribute verður að vera margar af :value',
    'not_in'               => 'Reiturinn :attribute er ógildur.',
    'not_regex'            => ':Attribute sniðið er ógilt.',
    'numeric'              => 'Reiturinn :attribute verður að vera tala.',
    'password'             => [
        'letters'       => ':Attribute verður að innihalda að minnsta kosti einn staf.',
        'mixed'         => ':Attribute verður að innihalda að minnsta kosti einn hástaf og einn lágstaf.',
        'numbers'       => ':Attribute verður að innihalda að minnsta kosti eina tölu.',
        'symbols'       => ':Attribute verður að innihalda að minnsta kosti eitt tákn.',
        'uncompromised' => 'Uppgefin :attribute hefur birst í gagnaleka. Vinsamlegast veldu aðra :attribute.',
    ],
    'present'              => ':Attribute reiturinn verður að vera til staðar.',
    'present_if'           => ':attribute reiturinn verður að vera til staðar þegar :other er :value.',
    'present_unless'       => ':attribute reiturinn verður að vera til staðar nema :other sé :value.',
    'present_with'         => ':attribute reiturinn verður að vera til staðar þegar :values er til staðar.',
    'present_with_all'     => ':attribute reiturinn verður að vera til staðar þegar :values eru til staðar.',
    'prohibited'           => 'Við :attribute sviði er bannað.',
    'prohibited_if'        => 'Við :attribute sviði er bannað þegar :other er :value.',
    'prohibited_unless'    => 'Við :attribute sviði er bönnuð nema :other er í :values.',
    'prohibits'            => ':Attribute reiturinn bannar :other að vera viðstaddir.',
    'regex'                => 'Reiturinn :attribute er ekki á réttu formi.',
    'required'             => 'Reiturinn :attribute er nauðsynlegur.',
    'required_array_keys'  => ':Attribute reiturinn verður að innihalda færslur fyrir: :values.',
    'required_if'          => 'Reiturinn :attribute er nauðsynlegur þegar :other er :value.',
    'required_if_accepted' => ':Attribute reiturinn er nauðsynlegur þegar :other er samþykkt.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => ':Attribute er áskilinn nema :other sé í :values.',
    'required_with'        => ':Attribute er áskilinn þegar :values er til staðar.',
    'required_with_all'    => ':Attribute er áskilinn þegar :values er til staðar.',
    'required_without'     => ':Attribute er áskilinn þegar :values er ekki til staðar.',
    'required_without_all' => ':Attribute reiturinn er áskilinn þegar engin af :values eru til staðar.',
    'same'                 => 'Reiturinn :attribute og :other verða að stemma.',
    'size'                 => [
        'array'   => 'Reiturinn :attribute verður að innihalda :size hluti.',
        'file'    => 'Reiturinn :attribute verður að vera :size kílóbæt.',
        'numeric' => 'Reiturinn :attribute verður að vera :size.',
        'string'  => 'Reiturinn :attribute verður að vera :size stafir.',
    ],
    'starts_with'          => ':Attribute verður að byrja á einu af eftirfarandi: :values',
    'string'               => ':Attribute verður að vera strengur.',
    'timezone'             => 'Reiturinn :attribute verður að vera rétt tímabelti.',
    'ulid'                 => ':Attribute verður að vera gilt ULID.',
    'unique'               => 'Reiturinn :attribute er því miður ekki leyfilegur. Það er annar eins.',
    'uploaded'             => 'Ekki tókst að hlaða :attribute upp.',
    'uppercase'            => ':Attribute verða að vera hástafir.',
    'url'                  => 'Reiturinn :attribute verður að vera netslóð.',
    'uuid'                 => ':Attribute verður að vera gilt UUID.',
];
