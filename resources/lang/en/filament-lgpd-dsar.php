<?php

return [
    'resource' => [
        'label' => 'Data subject request',
        'plural_label' => 'Data subject requests',
    ],

    'fields' => [
        'type' => 'Right',
        'status' => 'Status',
        'requester_name' => 'Requester',
        'requester_email' => 'Requester email',
        'details' => 'Details',
        'response' => 'Response',
        'reason' => 'Reason',
        'subject' => 'Data subject',
        'subject_type' => 'Data subject model',
        'subject_id' => 'Data subject ID',
        'verified' => 'Verified',
        'due_at' => 'Due',
        'verified_at' => 'Verified at',
        'completed_at' => 'Closed at',
        'created_at' => 'Received at',
    ],

    'type' => [
        'confirmation' => 'Confirmation of processing',
        'access' => 'Access',
        'correction' => 'Correction',
        'anonymization' => 'Anonymization or blocking',
        'portability' => 'Portability',
        'deletion' => 'Deletion',
        'sharing_information' => 'Sharing information',
        'consent_information' => 'Consent information',
        'consent_revocation' => 'Consent revocation',
    ],

    'status' => [
        'pending' => 'Pending',
        'completed' => 'Completed',
        'rejected' => 'Rejected',
    ],

    'filters' => [
        'overdue' => 'Overdue',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Verify identity',
            'description' => 'Confirm who the requester is and link the request to their record. Nothing is exported or erased before this.',
            'not_found' => 'No record found for this data subject.',
            'success' => 'Identity verified.',
        ],
        'fulfil' => [
            'label' => 'Fulfil',
            'description' => [
                'access' => 'Export every declared personal data of the data subject to a JSON file.',
                'portability' => 'Export every declared personal data of the data subject to a JSON file.',
                'anonymization' => 'Anonymize every record of the data subject. This cannot be undone.',
                'deletion' => 'Anonymize every record of the data subject. This cannot be undone.',
            ],
            'success' => 'Request fulfilled.',
        ],
        'complete' => [
            'label' => 'Complete',
            'description' => 'This right is answered by hand: record the answer you gave the data subject.',
            'success' => 'Request completed.',
        ],
        'reject' => [
            'label' => 'Reject',
            'success' => 'Request rejected.',
        ],
        'download' => [
            'label' => 'Download export',
        ],
    ],
];
