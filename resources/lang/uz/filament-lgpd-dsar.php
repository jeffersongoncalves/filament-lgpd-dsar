<?php

return [
    'resource' => [
        'label' => 'Ma\'lumot subyekti so\'rovi',
        'plural_label' => 'Ma\'lumot subyektlari so\'rovlari',
    ],

    'fields' => [
        'type' => 'Huquq',
        'status' => 'Holat',
        'requester_name' => 'So\'rovchi',
        'requester_email' => 'So\'rovchining e-pochtasi',
        'details' => 'Tafsilotlar',
        'response' => 'Javob',
        'reason' => 'Sabab',
        'subject' => 'Ma\'lumot subyekti',
        'subject_type' => 'Subyekt modeli',
        'subject_id' => 'Subyekt ID',
        'verified' => 'Tasdiqlangan',
        'due_at' => 'Muddat',
        'verified_at' => 'Tasdiqlangan vaqt',
        'completed_at' => 'Yopilgan vaqt',
        'created_at' => 'Qabul qilingan vaqt',
    ],

    'type' => [
        'confirmation' => 'Ishlov berishni tasdiqlash',
        'access' => 'Kirish',
        'correction' => 'Tuzatish',
        'anonymization' => 'Anonimlashtirish yoki bloklash',
        'portability' => 'Ko\'chirish',
        'deletion' => 'O\'chirish',
        'sharing_information' => 'Ulashish haqida ma\'lumot',
        'consent_information' => 'Rozilik haqida ma\'lumot',
        'consent_revocation' => 'Rozilikni qaytarib olish',
    ],

    'status' => [
        'pending' => 'Kutilmoqda',
        'completed' => 'Bajarildi',
        'rejected' => 'Rad etildi',
    ],

    'filters' => [
        'overdue' => 'Muddati o\'tgan',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Shaxsni tasdiqlash',
            'description' => 'So\'rovchi kimligini tasdiqlang va so\'rovni uning yozuviga bog\'lang. Bundan oldin hech narsa eksport qilinmaydi va o\'chirilmaydi.',
            'not_found' => 'Bu ma\'lumot subyekti uchun yozuv topilmadi.',
            'success' => 'Shaxs tasdiqlandi.',
        ],
        'fulfil' => [
            'label' => 'Bajarish',
            'description' => [
                'access' => 'Ma\'lumot subyektining e\'lon qilingan barcha shaxsiy ma\'lumotlarini JSON faylga eksport qiladi.',
                'portability' => 'Ma\'lumot subyektining e\'lon qilingan barcha shaxsiy ma\'lumotlarini JSON faylga eksport qiladi.',
                'anonymization' => 'Ma\'lumot subyektining barcha yozuvlarini anonimlashtiradi. Bekor qilib bo\'lmaydi.',
                'deletion' => 'Ma\'lumot subyektining barcha yozuvlarini anonimlashtiradi. Bekor qilib bo\'lmaydi.',
            ],
            'success' => 'So\'rov bajarildi.',
        ],
        'complete' => [
            'label' => 'Yakunlash',
            'description' => 'Bu huquqqa qo\'lda javob beriladi: subyektga bergan javobingizni qayd eting.',
            'success' => 'So\'rov yakunlandi.',
        ],
        'reject' => [
            'label' => 'Rad etish',
            'success' => 'So\'rov rad etildi.',
        ],
        'download' => [
            'label' => 'Eksportni yuklab olish',
        ],
    ],
];
