<?php

return [
    'resource' => [
        'label' => 'Pedido do titular',
        'plural_label' => 'Pedidos dos titulares',
    ],

    'fields' => [
        'type' => 'Direito',
        'status' => 'Estado',
        'requester_name' => 'Requerente',
        'requester_email' => 'E-mail do requerente',
        'details' => 'Detalhes',
        'response' => 'Resposta',
        'reason' => 'Motivo',
        'subject' => 'Titular',
        'subject_type' => 'Modelo do titular',
        'subject_id' => 'ID do titular',
        'verified' => 'Verificado',
        'due_at' => 'Prazo',
        'verified_at' => 'Verificado em',
        'completed_at' => 'Encerrado em',
        'created_at' => 'Recebido em',
    ],

    'type' => [
        'confirmation' => 'Confirmação do tratamento',
        'access' => 'Acesso',
        'correction' => 'Retificação',
        'anonymization' => 'Anonimização ou bloqueio',
        'portability' => 'Portabilidade',
        'deletion' => 'Eliminação',
        'sharing_information' => 'Informação sobre partilha',
        'consent_information' => 'Informação sobre consentimento',
        'consent_revocation' => 'Revogação do consentimento',
    ],

    'status' => [
        'pending' => 'Pendente',
        'completed' => 'Concluído',
        'rejected' => 'Recusado',
    ],

    'filters' => [
        'overdue' => 'Em atraso',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Verificar identidade',
            'description' => 'Confirme quem é o requerente e associe o pedido ao respetivo registo. Nada é exportado nem eliminado antes disso.',
            'not_found' => 'Nenhum registo encontrado para este titular.',
            'success' => 'Identidade verificada.',
        ],
        'fulfil' => [
            'label' => 'Executar',
            'description' => [
                'access' => 'Exporta todos os dados pessoais declarados do titular para um ficheiro JSON.',
                'portability' => 'Exporta todos os dados pessoais declarados do titular para um ficheiro JSON.',
                'anonymization' => 'Anonimiza todos os registos do titular. Não é possível anular.',
                'deletion' => 'Anonimiza todos os registos do titular. Não é possível anular.',
            ],
            'success' => 'Pedido executado.',
        ],
        'complete' => [
            'label' => 'Concluir',
            'description' => 'Este direito é respondido manualmente: registe a resposta dada ao titular.',
            'success' => 'Pedido concluído.',
        ],
        'reject' => [
            'label' => 'Recusar',
            'success' => 'Pedido recusado.',
        ],
        'download' => [
            'label' => 'Descarregar exportação',
        ],
    ],
];
