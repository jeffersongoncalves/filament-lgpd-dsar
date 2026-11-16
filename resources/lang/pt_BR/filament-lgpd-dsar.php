<?php

return [
    'resource' => [
        'label' => 'Solicitação do titular',
        'plural_label' => 'Solicitações dos titulares',
    ],

    'fields' => [
        'type' => 'Direito',
        'status' => 'Status',
        'requester_name' => 'Solicitante',
        'requester_email' => 'E-mail do solicitante',
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
        'correction' => 'Correção',
        'anonymization' => 'Anonimização ou bloqueio',
        'portability' => 'Portabilidade',
        'deletion' => 'Eliminação',
        'sharing_information' => 'Informação sobre compartilhamento',
        'consent_information' => 'Informação sobre consentimento',
        'consent_revocation' => 'Revogação do consentimento',
    ],

    'status' => [
        'pending' => 'Pendente',
        'completed' => 'Concluída',
        'rejected' => 'Recusada',
    ],

    'filters' => [
        'overdue' => 'Vencidas',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Verificar identidade',
            'description' => 'Confirme quem é o solicitante e vincule a solicitação ao registro dele. Nada é exportado nem apagado antes disso.',
            'not_found' => 'Nenhum registro encontrado para este titular.',
            'success' => 'Identidade verificada.',
        ],
        'fulfil' => [
            'label' => 'Atender',
            'description' => [
                'access' => 'Exporta todos os dados pessoais declarados do titular para um arquivo JSON.',
                'portability' => 'Exporta todos os dados pessoais declarados do titular para um arquivo JSON.',
                'anonymization' => 'Anonimiza todos os registros do titular. Não é possível desfazer.',
                'deletion' => 'Anonimiza todos os registros do titular. Não é possível desfazer.',
            ],
            'success' => 'Solicitação atendida.',
        ],
        'complete' => [
            'label' => 'Concluir',
            'description' => 'Este direito é respondido manualmente: registre a resposta dada ao titular.',
            'success' => 'Solicitação concluída.',
        ],
        'reject' => [
            'label' => 'Recusar',
            'success' => 'Solicitação recusada.',
        ],
        'download' => [
            'label' => 'Baixar exportação',
        ],
    ],
];
