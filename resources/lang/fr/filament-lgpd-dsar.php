<?php

return [
    'resource' => [
        'label' => 'Demande de la personne concernée',
        'plural_label' => 'Demandes des personnes concernées',
    ],

    'fields' => [
        'type' => 'Droit',
        'status' => 'Statut',
        'requester_name' => 'Demandeur',
        'requester_email' => 'E-mail du demandeur',
        'details' => 'Détails',
        'response' => 'Réponse',
        'reason' => 'Motif',
        'subject' => 'Personne concernée',
        'subject_type' => 'Modèle de la personne concernée',
        'subject_id' => 'ID de la personne concernée',
        'verified' => 'Vérifié',
        'due_at' => 'Échéance',
        'verified_at' => 'Vérifié le',
        'completed_at' => 'Clôturé le',
        'created_at' => 'Reçu le',
    ],

    'type' => [
        'confirmation' => 'Confirmation du traitement',
        'access' => 'Accès',
        'correction' => 'Rectification',
        'anonymization' => 'Anonymisation ou blocage',
        'portability' => 'Portabilité',
        'deletion' => 'Suppression',
        'sharing_information' => 'Information sur le partage',
        'consent_information' => 'Information sur le consentement',
        'consent_revocation' => 'Retrait du consentement',
    ],

    'status' => [
        'pending' => 'En attente',
        'completed' => 'Traitée',
        'rejected' => 'Rejetée',
    ],

    'filters' => [
        'overdue' => 'En retard',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Vérifier l\'identité',
            'description' => 'Confirmez qui est le demandeur et liez la demande à son enregistrement. Rien n\'est exporté ni supprimé avant cela.',
            'not_found' => 'Aucun enregistrement trouvé pour cette personne concernée.',
            'success' => 'Identité vérifiée.',
        ],
        'fulfil' => [
            'label' => 'Traiter',
            'description' => [
                'access' => 'Exporte toutes les données personnelles déclarées de la personne concernée dans un fichier JSON.',
                'portability' => 'Exporte toutes les données personnelles déclarées de la personne concernée dans un fichier JSON.',
                'anonymization' => 'Anonymise tous les enregistrements de la personne concernée. Action irréversible.',
                'deletion' => 'Anonymise tous les enregistrements de la personne concernée. Action irréversible.',
            ],
            'success' => 'Demande traitée.',
        ],
        'complete' => [
            'label' => 'Clôturer',
            'description' => 'Ce droit est traité manuellement : consignez la réponse donnée à la personne concernée.',
            'success' => 'Demande clôturée.',
        ],
        'reject' => [
            'label' => 'Rejeter',
            'success' => 'Demande rejetée.',
        ],
        'download' => [
            'label' => 'Télécharger l\'export',
        ],
    ],
];
