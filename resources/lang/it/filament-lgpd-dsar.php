<?php

return [
    'resource' => [
        'label' => 'Richiesta dell\'interessato',
        'plural_label' => 'Richieste degli interessati',
    ],

    'fields' => [
        'type' => 'Diritto',
        'status' => 'Stato',
        'requester_name' => 'Richiedente',
        'requester_email' => 'Email del richiedente',
        'details' => 'Dettagli',
        'response' => 'Risposta',
        'reason' => 'Motivo',
        'subject' => 'Interessato',
        'subject_type' => 'Modello dell\'interessato',
        'subject_id' => 'ID dell\'interessato',
        'verified' => 'Verificato',
        'due_at' => 'Scadenza',
        'verified_at' => 'Verificato il',
        'completed_at' => 'Chiuso il',
        'created_at' => 'Ricevuto il',
    ],

    'type' => [
        'confirmation' => 'Conferma del trattamento',
        'access' => 'Accesso',
        'correction' => 'Rettifica',
        'anonymization' => 'Anonimizzazione o blocco',
        'portability' => 'Portabilità',
        'deletion' => 'Cancellazione',
        'sharing_information' => 'Informazioni sulla condivisione',
        'consent_information' => 'Informazioni sul consenso',
        'consent_revocation' => 'Revoca del consenso',
    ],

    'status' => [
        'pending' => 'In attesa',
        'completed' => 'Completata',
        'rejected' => 'Respinta',
    ],

    'filters' => [
        'overdue' => 'Scadute',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Verifica identità',
            'description' => 'Conferma chi è il richiedente e collega la richiesta al suo record. Nulla viene esportato o cancellato prima.',
            'not_found' => 'Nessun record trovato per questo interessato.',
            'success' => 'Identità verificata.',
        ],
        'fulfil' => [
            'label' => 'Evadi',
            'description' => [
                'access' => 'Esporta tutti i dati personali dichiarati dell\'interessato in un file JSON.',
                'portability' => 'Esporta tutti i dati personali dichiarati dell\'interessato in un file JSON.',
                'anonymization' => 'Anonimizza tutti i record dell\'interessato. Non può essere annullato.',
                'deletion' => 'Anonimizza tutti i record dell\'interessato. Non può essere annullato.',
            ],
            'success' => 'Richiesta evasa.',
        ],
        'complete' => [
            'label' => 'Completa',
            'description' => 'A questo diritto si risponde manualmente: registra la risposta data all\'interessato.',
            'success' => 'Richiesta completata.',
        ],
        'reject' => [
            'label' => 'Respingi',
            'success' => 'Richiesta respinta.',
        ],
        'download' => [
            'label' => 'Scarica esportazione',
        ],
    ],
];
