<?php

return [
    'resource' => [
        'label' => 'İlgili kişi başvurusu',
        'plural_label' => 'İlgili kişi başvuruları',
    ],

    'fields' => [
        'type' => 'Hak',
        'status' => 'Durum',
        'requester_name' => 'Başvuran',
        'requester_email' => 'Başvuranın e-postası',
        'details' => 'Ayrıntılar',
        'response' => 'Yanıt',
        'reason' => 'Gerekçe',
        'subject' => 'İlgili kişi',
        'subject_type' => 'İlgili kişi modeli',
        'subject_id' => 'İlgili kişi ID',
        'verified' => 'Doğrulandı',
        'due_at' => 'Son tarih',
        'verified_at' => 'Doğrulanma',
        'completed_at' => 'Kapanma',
        'created_at' => 'Alınma',
    ],

    'type' => [
        'confirmation' => 'İşlemenin teyidi',
        'access' => 'Erişim',
        'correction' => 'Düzeltme',
        'anonymization' => 'Anonimleştirme veya engelleme',
        'portability' => 'Taşınabilirlik',
        'deletion' => 'Silme',
        'sharing_information' => 'Paylaşım hakkında bilgi',
        'consent_information' => 'Onay hakkında bilgi',
        'consent_revocation' => 'Onayın geri alınması',
    ],

    'status' => [
        'pending' => 'Bekliyor',
        'completed' => 'Tamamlandı',
        'rejected' => 'Reddedildi',
    ],

    'filters' => [
        'overdue' => 'Süresi geçmiş',
    ],

    'actions' => [
        'verify' => [
            'label' => 'Kimliği doğrula',
            'description' => 'Başvuranın kim olduğunu doğrulayın ve başvuruyu kaydına bağlayın. Bundan önce hiçbir şey dışa aktarılmaz veya silinmez.',
            'not_found' => 'Bu ilgili kişi için kayıt bulunamadı.',
            'success' => 'Kimlik doğrulandı.',
        ],
        'fulfil' => [
            'label' => 'Yerine getir',
            'description' => [
                'access' => 'İlgili kişinin beyan edilen tüm kişisel verilerini bir JSON dosyasına aktarır.',
                'portability' => 'İlgili kişinin beyan edilen tüm kişisel verilerini bir JSON dosyasına aktarır.',
                'anonymization' => 'İlgili kişinin tüm kayıtlarını anonimleştirir. Geri alınamaz.',
                'deletion' => 'İlgili kişinin tüm kayıtlarını anonimleştirir. Geri alınamaz.',
            ],
            'success' => 'Başvuru yerine getirildi.',
        ],
        'complete' => [
            'label' => 'Tamamla',
            'description' => 'Bu hak elle yanıtlanır: ilgili kişiye verdiğiniz yanıtı kaydedin.',
            'success' => 'Başvuru tamamlandı.',
        ],
        'reject' => [
            'label' => 'Reddet',
            'success' => 'Başvuru reddedildi.',
        ],
        'download' => [
            'label' => 'Dışa aktarımı indir',
        ],
    ],
];
