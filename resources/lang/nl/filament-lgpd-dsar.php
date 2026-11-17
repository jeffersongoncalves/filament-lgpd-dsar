<?php

return [
    'resource' => [
        'label' => 'Verzoek van betrokkene',
        'plural_label' => 'Verzoeken van betrokkenen',
    ],

    'fields' => [
        'type' => 'Recht',
        'status' => 'Status',
        'requester_name' => 'Aanvrager',
        'requester_email' => 'E-mail van de aanvrager',
        'details' => 'Details',
        'response' => 'Antwoord',
        'reason' => 'Reden',
        'subject' => 'Betrokkene',
        'subject_type' => 'Model van de betrokkene',
        'subject_id' => 'ID van de betrokkene',
        'verified' => 'Geverifieerd',
        'due_at' => 'Uiterste datum',
        'verified_at' => 'Geverifieerd op',
        'completed_at' => 'Afgesloten op',
        'created_at' => 'Ontvangen op',
    ],

    'type' => [
        'confirmation' => 'Bevestiging van verwerking',
        'access' => 'Inzage',
        'correction' => 'Rectificatie',
        'anonymization' => 'Anonimisering of blokkering',
        'portability' => 'Overdraagbaarheid',
        'deletion' => 'Verwijdering',
        'sharing_information' => 'Informatie over delen',
        'consent_information' => 'Informatie over toestemming',
        'consent_revocation' => 'Intrekking van toestemming',
    ],

    'status' => [
        'pending' => 'In behandeling',
        'completed' => 'Afgehandeld',
        'rejected' => 'Afgewezen',
    ],

    'filters' => [
        'overdue' => 'Te laat',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Identiteit verifiëren',
            'description' => 'Bevestig wie de aanvrager is en koppel het verzoek aan diens record. Daarvoor wordt niets geëxporteerd of verwijderd.',
            'not_found' => 'Geen record gevonden voor deze betrokkene.',
            'success' => 'Identiteit geverifieerd.',
        ],
        'fulfil' => [
            'label' => 'Uitvoeren',
            'description' => [
                'access' => 'Exporteert alle opgegeven persoonsgegevens van de betrokkene naar een JSON-bestand.',
                'portability' => 'Exporteert alle opgegeven persoonsgegevens van de betrokkene naar een JSON-bestand.',
                'anonymization' => 'Anonimiseert alle records van de betrokkene. Dit kan niet ongedaan worden gemaakt.',
                'deletion' => 'Anonimiseert alle records van de betrokkene. Dit kan niet ongedaan worden gemaakt.',
            ],
            'success' => 'Verzoek uitgevoerd.',
        ],
        'complete' => [
            'label' => 'Afronden',
            'description' => 'Dit recht wordt handmatig beantwoord: leg het antwoord vast dat je de betrokkene gaf.',
            'success' => 'Verzoek afgerond.',
        ],
        'reject' => [
            'label' => 'Afwijzen',
            'success' => 'Verzoek afgewezen.',
        ],
        'download' => [
            'label' => 'Export downloaden',
        ],
    ],
];
