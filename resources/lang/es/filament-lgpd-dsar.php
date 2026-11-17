<?php

return [
    'resource' => [
        'label' => 'Solicitud del titular',
        'plural_label' => 'Solicitudes de los titulares',
    ],

    'fields' => [
        'type' => 'Derecho',
        'status' => 'Estado',
        'requester_name' => 'Solicitante',
        'requester_email' => 'Correo del solicitante',
        'details' => 'Detalles',
        'response' => 'Respuesta',
        'reason' => 'Motivo',
        'subject' => 'Titular',
        'subject_type' => 'Modelo del titular',
        'subject_id' => 'ID del titular',
        'verified' => 'Verificado',
        'due_at' => 'Plazo',
        'verified_at' => 'Verificado el',
        'completed_at' => 'Cerrado el',
        'created_at' => 'Recibido el',
    ],

    'type' => [
        'confirmation' => 'Confirmación del tratamiento',
        'access' => 'Acceso',
        'correction' => 'Rectificación',
        'anonymization' => 'Anonimización o bloqueo',
        'portability' => 'Portabilidad',
        'deletion' => 'Eliminación',
        'sharing_information' => 'Información sobre compartición',
        'consent_information' => 'Información sobre el consentimiento',
        'consent_revocation' => 'Revocación del consentimiento',
    ],

    'status' => [
        'pending' => 'Pendiente',
        'completed' => 'Completada',
        'rejected' => 'Rechazada',
    ],

    'filters' => [
        'overdue' => 'Vencidas',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Verificar identidad',
            'description' => 'Confirma quién es el solicitante y vincula la solicitud a su registro. Nada se exporta ni se elimina antes de esto.',
            'not_found' => 'No se encontró ningún registro para este titular.',
            'success' => 'Identidad verificada.',
        ],
        'fulfil' => [
            'label' => 'Atender',
            'description' => [
                'access' => 'Exporta todos los datos personales declarados del titular a un archivo JSON.',
                'portability' => 'Exporta todos los datos personales declarados del titular a un archivo JSON.',
                'anonymization' => 'Anonimiza todos los registros del titular. No se puede deshacer.',
                'deletion' => 'Anonimiza todos los registros del titular. No se puede deshacer.',
            ],
            'success' => 'Solicitud atendida.',
        ],
        'complete' => [
            'label' => 'Completar',
            'description' => 'Este derecho se responde manualmente: registra la respuesta que diste al titular.',
            'success' => 'Solicitud completada.',
        ],
        'reject' => [
            'label' => 'Rechazar',
            'success' => 'Solicitud rechazada.',
        ],
        'download' => [
            'label' => 'Descargar exportación',
        ],
    ],
];
