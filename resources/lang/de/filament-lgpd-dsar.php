<?php

return [
    'resource' => [
        'label' => 'Betroffenenanfrage',
        'plural_label' => 'Betroffenenanfragen',
    ],

    'fields' => [
        'type' => 'Recht',
        'status' => 'Status',
        'requester_name' => 'Antragsteller',
        'requester_email' => 'E-Mail des Antragstellers',
        'details' => 'Details',
        'response' => 'Antwort',
        'reason' => 'Grund',
        'subject' => 'Betroffene Person',
        'subject_type' => 'Modell der betroffenen Person',
        'subject_id' => 'ID der betroffenen Person',
        'verified' => 'Verifiziert',
        'due_at' => 'Fällig',
        'verified_at' => 'Verifiziert am',
        'completed_at' => 'Abgeschlossen am',
        'created_at' => 'Eingegangen am',
    ],

    'type' => [
        'confirmation' => 'Bestätigung der Verarbeitung',
        'access' => 'Auskunft',
        'correction' => 'Berichtigung',
        'anonymization' => 'Anonymisierung oder Sperrung',
        'portability' => 'Datenübertragbarkeit',
        'deletion' => 'Löschung',
        'sharing_information' => 'Information über Weitergabe',
        'consent_information' => 'Information über Einwilligung',
        'consent_revocation' => 'Widerruf der Einwilligung',
    ],

    'status' => [
        'pending' => 'Offen',
        'completed' => 'Erledigt',
        'rejected' => 'Abgelehnt',
    ],

    'filters' => [
        'overdue' => 'Überfällig',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Identität prüfen',
            'description' => 'Bestätigen Sie, wer der Antragsteller ist, und verknüpfen Sie die Anfrage mit seinem Datensatz. Vorher wird nichts exportiert oder gelöscht.',
            'not_found' => 'Kein Datensatz für diese betroffene Person gefunden.',
            'success' => 'Identität geprüft.',
        ],
        'fulfil' => [
            'label' => 'Ausführen',
            'description' => [
                'access' => 'Exportiert alle deklarierten personenbezogenen Daten der betroffenen Person in eine JSON-Datei.',
                'portability' => 'Exportiert alle deklarierten personenbezogenen Daten der betroffenen Person in eine JSON-Datei.',
                'anonymization' => 'Anonymisiert alle Datensätze der betroffenen Person. Dies kann nicht rückgängig gemacht werden.',
                'deletion' => 'Anonymisiert alle Datensätze der betroffenen Person. Dies kann nicht rückgängig gemacht werden.',
            ],
            'success' => 'Anfrage ausgeführt.',
        ],
        'complete' => [
            'label' => 'Abschließen',
            'description' => 'Dieses Recht wird manuell beantwortet: Halten Sie die Antwort fest, die Sie der betroffenen Person gegeben haben.',
            'success' => 'Anfrage abgeschlossen.',
        ],
        'reject' => [
            'label' => 'Ablehnen',
            'success' => 'Anfrage abgelehnt.',
        ],
        'download' => [
            'label' => 'Export herunterladen',
        ],
    ],
];
