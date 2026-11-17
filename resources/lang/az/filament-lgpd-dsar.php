<?php

return [
    'resource' => [
        'label' => 'Məlumat subyektinin sorğusu',
        'plural_label' => 'Məlumat subyektlərinin sorğuları',
    ],

    'fields' => [
        'type' => 'Hüquq',
        'status' => 'Status',
        'requester_name' => 'Sorğu edən',
        'requester_email' => 'Sorğu edənin e-poçtu',
        'details' => 'Təfərrüatlar',
        'response' => 'Cavab',
        'reason' => 'Səbəb',
        'subject' => 'Məlumat subyekti',
        'subject_type' => 'Subyekt modeli',
        'subject_id' => 'Subyekt ID',
        'verified' => 'Təsdiqlənib',
        'due_at' => 'Son tarix',
        'verified_at' => 'Təsdiqlənmə',
        'completed_at' => 'Bağlanma',
        'created_at' => 'Alınma',
    ],

    'type' => [
        'confirmation' => 'Emalın təsdiqi',
        'access' => 'Giriş',
        'correction' => 'Düzəliş',
        'anonymization' => 'Anonimləşdirmə və ya bloklama',
        'portability' => 'Daşınma',
        'deletion' => 'Silinmə',
        'sharing_information' => 'Paylaşma haqqında məlumat',
        'consent_information' => 'Razılıq haqqında məlumat',
        'consent_revocation' => 'Razılığın geri götürülməsi',
    ],

    'status' => [
        'pending' => 'Gözləyir',
        'completed' => 'Tamamlandı',
        'rejected' => 'Rədd edildi',
    ],

    'filters' => [
        'overdue' => 'Gecikmiş',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Kimliyi təsdiqlə',
            'description' => 'Sorğu edənin kim olduğunu təsdiqləyin və sorğunu onun qeydinə bağlayın. Bundan əvvəl heç nə ixrac edilmir və silinmir.',
            'not_found' => 'Bu məlumat subyekti üçün qeyd tapılmadı.',
            'success' => 'Kimlik təsdiqləndi.',
        ],
        'fulfil' => [
            'label' => 'İcra et',
            'description' => [
                'access' => 'Məlumat subyektinin bütün elan edilmiş şəxsi məlumatlarını JSON faylına ixrac edir.',
                'portability' => 'Məlumat subyektinin bütün elan edilmiş şəxsi məlumatlarını JSON faylına ixrac edir.',
                'anonymization' => 'Məlumat subyektinin bütün qeydlərini anonimləşdirir. Geri qaytarıla bilməz.',
                'deletion' => 'Məlumat subyektinin bütün qeydlərini anonimləşdirir. Geri qaytarıla bilməz.',
            ],
            'success' => 'Sorğu icra edildi.',
        ],
        'complete' => [
            'label' => 'Tamamla',
            'description' => 'Bu hüquq əl ilə cavablandırılır: məlumat subyektinə verdiyiniz cavabı qeyd edin.',
            'success' => 'Sorğu tamamlandı.',
        ],
        'reject' => [
            'label' => 'Rədd et',
            'success' => 'Sorğu rədd edildi.',
        ],
        'download' => [
            'label' => 'İxracı yüklə',
        ],
    ],
];
