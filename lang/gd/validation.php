<?php

declare(strict_types=1);

return [
    'accepted'             => 'Feumar gabhail ris an :attribute.',
    'accepted_if'          => 'Feumar gabhail ris na :attribute nuair a tha :other aig :value.',
    'active_url'           => 'Chan e URL dligheach a tha san :attribute.',
    'after'                => 'Feumaidh an :attribute a bhith na cheann-latha às deidh :date.',
    'after_or_equal'       => 'Feumaidh an :attribute a bhith na cheann-latha às deidh no co-ionann ri :date.',
    'alpha'                => 'Feumaidh dìreach litrichean a bhith anns na :attribute.',
    'alpha_dash'           => 'Feumaidh dìreach litrichean, àireamhan, sgrìoban agus fo-sgrìobhaidhean a bhith anns an :attribute.',
    'alpha_num'            => 'Feumaidh dìreach litrichean is àireamhan a bhith anns an :attribute.',
    'array'                => 'Feumaidh an :attribute a bhith na raon.',
    'ascii'                => 'Feumaidh an raon :attribute a bhith anns an raon :attribute a-mhàin caractaran agus samhlaidhean alfaimigeach aon-byte.',
    'before'               => 'Feumaidh an :attribute a bhith na cheann-latha ro :date.',
    'before_or_equal'      => 'Feumaidh an :attribute a bhith na cheann-latha ro no co-ionann ri :date.',
    'between'              => [
        'array'   => 'Feumaidh eadar :min agus :max rud a bhith anns na :attribute.',
        'file'    => 'Feumaidh an :attribute a bhith eadar :min agus :max kilobytes.',
        'numeric' => 'Feumaidh na :attribute a bhith eadar :min agus :max.',
        'string'  => 'Feumaidh na :attribute a bhith eadar :min agus :max caractar.',
    ],
    'boolean'              => 'Feumaidh an raon :attribute a bhith fìor no ceàrr.',
    'can'                  => 'Tha luach neo-ùghdarraichte anns an raon :attribute.',
    'confirmed'            => 'Chan eil an dearbhadh :attribute a’ freagairt.',
    'contains'             => 'The :attribute field is missing a required value.',
    'current_password'     => 'Tha am facal-faire ceàrr.',
    'date'                 => 'Chan e ceann-latha dligheach a th’ anns an :attribute.',
    'date_equals'          => 'Feumaidh an :attribute a bhith na cheann-latha co-ionann ri :date.',
    'date_format'          => 'Chan eil an :attribute a’ freagairt ri cruth :format.',
    'decimal'              => 'Feumaidh :decimal ionad deicheach a bhith anns an raon :attribute.',
    'declined'             => 'Feumar an :attribute a dhiùltadh.',
    'declined_if'          => 'Feumar na :attribute a dhiùltadh nuair a tha :other aig :value.',
    'different'            => 'Feumaidh na :attribute agus :other a bhith eadar-dhealaichte.',
    'digits'               => 'Feumaidh na :attribute a bhith :digits figear.',
    'digits_between'       => 'Feumaidh na :attribute a bhith eadar :min agus :max figear.',
    'dimensions'           => 'Tha tomhasan ìomhaigh neo-dhligheach aig an :attribute.',
    'distinct'             => 'Tha luach dùblaichte aig an raon :attribute.',
    'doesnt_end_with'      => 'Chan fhaod an raon :attribute crìochnachadh le aon de na leanas: :values.',
    'doesnt_start_with'    => 'Chan fhaod an raon :attribute tòiseachadh le aon de na leanas: :values.',
    'email'                => 'Feumaidh an :attribute a bhith na sheòladh puist-d dligheach.',
    'ends_with'            => 'Feumaidh na :attribute crìochnachadh le aon de na leanas: :values.',
    'enum'                 => 'Tha an :attribute a chaidh a thaghadh neo-dhligheach.',
    'exists'               => 'Tha an :attribute a chaidh a thaghadh neo-dhligheach.',
    'extensions'           => 'Feumaidh aon de na leudachaidhean a leanas a bhith aig an raon :attribute: :values.',
    'file'                 => 'Feumaidh an :attribute a bhith na fhaidhle.',
    'filled'               => 'Feumaidh luach a bhith aig an raon :attribute.',
    'gt'                   => [
        'array'   => 'Feumaidh barrachd air :value rud a bhith anns na :attribute.',
        'file'    => 'Feumaidh an :attribute a bhith nas àirde na :value kilobytes.',
        'numeric' => 'Feumaidh an :attribute a bhith nas àirde na :value.',
        'string'  => 'Feumaidh na :attribute a bhith nas motha na :value caractar.',
    ],
    'gte'                  => [
        'array'   => 'Feumaidh :value rud no barrachd a bhith aig na :attribute.',
        'file'    => 'Feumaidh an :attribute a bhith nas motha na no co-ionann ri :value kilobytes.',
        'numeric' => 'Feumaidh an :attribute a bhith nas motha na no co-ionann ri :value.',
        'string'  => 'Feumaidh na :attribute a bhith nas motha na no co-ionann ri :value caractar.',
    ],
    'hex_color'            => 'Feumaidh an raon :attribute a bhith na dhath hexadecimal dligheach.',
    'image'                => 'Feumaidh an :attribute a bhith na ìomhaigh.',
    'in'                   => 'Tha an :attribute a chaidh a thaghadh neo-dhligheach.',
    'in_array'             => 'Chan eil an raon :attribute ann an :other.',
    'integer'              => 'Feumaidh an :attribute a bhith na iomlanachd.',
    'ip'                   => 'Feumaidh an :attribute a bhith na sheòladh IP dligheach.',
    'ipv4'                 => 'Feumaidh an :attribute a bhith na sheòladh IPv4 dligheach.',
    'ipv6'                 => 'Feumaidh an :attribute a bhith na sheòladh IPv6 dligheach.',
    'json'                 => 'Feumaidh an :attribute a bhith na shreang JSON dligheach.',
    'list'                 => 'Feumaidh an raon :attribute a bhith na liosta.',
    'lowercase'            => 'Feumaidh an raon :attribute a bhith nas ìsle.',
    'lt'                   => [
        'array'   => 'Feumaidh nas lugha na :value rud a bhith aig na :attribute.',
        'file'    => 'Feumaidh an :attribute a bhith nas lugha na :value kilobytes.',
        'numeric' => 'Feumaidh an :attribute a bhith nas lugha na :value.',
        'string'  => 'Feumaidh na :attribute a bhith nas lugha na :value caractar.',
    ],
    'lte'                  => [
        'array'   => 'Chan fhaod barrachd air :value rud a bhith anns na :attribute.',
        'file'    => 'Feumaidh an :attribute a bhith nas lugha na no co-ionann ri :value kilobytes.',
        'numeric' => 'Feumaidh an :attribute a bhith nas lugha na no co-ionann ri :value.',
        'string'  => 'Feumaidh na :attribute a bhith nas lugha na no co-ionann ri :value caractar.',
    ],
    'mac_address'          => 'Feumaidh an :attribute a bhith na sheòladh MAC dligheach.',
    'max'                  => [
        'array'   => 'Chan fhaod barrachd air :max rud a bhith anns na :attribute.',
        'file'    => 'Chan fhaod an :attribute a bhith nas àirde na :max kilobytes.',
        'numeric' => 'Chan fhaod an :attribute a bhith nas àirde na :max.',
        'string'  => 'Chan fhaod na :attribute a bhith nas motha na :max caractar.',
    ],
    'max_digits'           => 'Chan fhaod barrachd air :max àireamhan a bhith san raon :attribute.',
    'mimes'                => 'Feumaidh an :attribute a bhith mar fhaidhle den t-seòrsa: :values.',
    'mimetypes'            => 'Feumaidh an :attribute a bhith mar fhaidhle den t-seòrsa: :values.',
    'min'                  => [
        'array'   => 'Feumaidh co-dhiù :min rud a bhith aig na :attribute rudan.',
        'file'    => 'Feumaidh an :attribute a bhith co-dhiù :min kilobytes.',
        'numeric' => 'Feumaidh na :attribute a bhith co-dhiù :min.',
        'string'  => 'Feumaidh na :attribute caractaran a bhith co-dhiù :min.',
    ],
    'min_digits'           => 'Feumaidh co-dhiù :min àireamhan a bhith aig an raon :attribute.',
    'missing'              => 'Feumaidh an raon :attribute a bhith a dhìth.',
    'missing_if'           => 'Feumaidh an raon :attribute a bhith a dhìth nuair a tha :other aig :value.',
    'missing_unless'       => 'Feumaidh an raon :attribute a bhith a dhìth mura h-eil :other aig :value.',
    'missing_with'         => 'Feumaidh an raon :attribute a bhith a dhìth nuair a tha :values an làthair.',
    'missing_with_all'     => 'Feumaidh an raon :attribute a bhith a dhìth nuair a tha :values an làthair.',
    'multiple_of'          => 'Feumaidh na :attribute a bhith nan iomadan de :value.',
    'not_in'               => 'Tha an :attribute a chaidh a thaghadh neo-dhligheach.',
    'not_regex'            => 'Tha an cruth :attribute mì-dhligheach.',
    'numeric'              => 'Feumaidh an :attribute a bhith na àireamh.',
    'password'             => [
        'letters'       => 'Feumaidh co-dhiù aon litir a bhith anns an raon :attribute.',
        'mixed'         => 'Feumaidh co-dhiù aon litir mhòr agus aon litir bheag a bhith anns an raon :attribute.',
        'numbers'       => 'Feumaidh co-dhiù aon àireamh a bhith anns an raon :attribute.',
        'symbols'       => 'Feumaidh co-dhiù aon samhla a bhith anns an raon :attribute.',
        'uncompromised' => 'Tha an :attribute a chaidh a thoirt seachad air nochdadh ann an aodion dàta. Feuch an tagh thu :attribute eile.',
    ],
    'present'              => 'Feumaidh an raon :attribute a bhith an làthair.',
    'present_if'           => 'Feumaidh an raon :attribute a bhith an làthair nuair a tha :other aig :value.',
    'present_unless'       => 'Feumaidh an raon :attribute a bhith an làthair mura h-eil :other aig :value.',
    'present_with'         => 'Feumaidh an raon :attribute a bhith an làthair nuair a tha :values an làthair.',
    'present_with_all'     => 'Feumaidh an raon :attribute a bhith an làthair nuair a tha :values an làthair.',
    'prohibited'           => 'Tha an raon :attribute toirmisgte.',
    'prohibited_if'        => 'Tha an raon :attribute toirmisgte nuair a tha :other aig :value.',
    'prohibited_unless'    => 'Tha an raon :attribute toirmisgte mura h-eil :other ann an :values.',
    'prohibits'            => 'Tha an raon :attribute a’ toirmeasg :other a bhith an làthair.',
    'regex'                => 'Tha an cruth :attribute mì-dhligheach.',
    'required'             => 'Tha feum air an raon :attribute.',
    'required_array_keys'  => 'Feumaidh inntrigidhean a bhith anns an raon :attribute airson: :values.',
    'required_if'          => 'Tha feum air an raon :attribute nuair a tha :other aig :value.',
    'required_if_accepted' => 'Tha feum air an raon :attribute nuair a thèid gabhail ri :other.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => 'Tha feum air an raon :attribute mura h-eil :other ann an :values.',
    'required_with'        => 'Tha feum air an raon :attribute nuair a tha :values an làthair.',
    'required_with_all'    => 'Tha feum air an raon :attribute nuair a tha :values an làthair.',
    'required_without'     => 'Tha feum air an raon :attribute nuair nach eil :values an làthair.',
    'required_without_all' => 'Tha feum air an raon :attribute nuair nach eil gin de :values an làthair.',
    'same'                 => 'Feumaidh an :attribute agus an :other a bhith co-ionnan.',
    'size'                 => [
        'array'   => 'Feumaidh :size rud a bhith anns na :attribute rudan.',
        'file'    => 'Feumaidh an :attribute a bhith :size kilobytes.',
        'numeric' => 'Feumaidh an :attribute a bhith :size.',
        'string'  => 'Feumaidh na :attribute caractaran a bhith :size.',
    ],
    'starts_with'          => 'Feumaidh na :attribute tòiseachadh le aon de na leanas: :values.',
    'string'               => 'Feumaidh an :attribute a bhith na shreath.',
    'timezone'             => 'Feumaidh an :attribute a bhith na raon-ama dligheach.',
    'ulid'                 => 'Feumaidh an raon :attribute a bhith na ULID dligheach.',
    'unique'               => 'Chaidh an :attribute a ghabhail mu thràth.',
    'uploaded'             => 'Dh\'fhàillig an :attribute luchdadh a-nuas.',
    'uppercase'            => 'Feumaidh an raon :attribute a bhith gu math àrd.',
    'url'                  => 'Feumaidh an :attribute a bhith na URL dligheach.',
    'uuid'                 => 'Feumaidh an :attribute a bhith na UUID dligheach.',
];
