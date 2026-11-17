<?php

return [
    'resource' => [
        'label' => 'طلب صاحب البيانات',
        'plural_label' => 'طلبات أصحاب البيانات',
    ],

    'fields' => [
        'type' => 'الحق',
        'status' => 'الحالة',
        'requester_name' => 'مقدّم الطلب',
        'requester_email' => 'بريد مقدّم الطلب',
        'details' => 'التفاصيل',
        'response' => 'الرد',
        'reason' => 'السبب',
        'subject' => 'صاحب البيانات',
        'subject_type' => 'نموذج صاحب البيانات',
        'subject_id' => 'معرّف صاحب البيانات',
        'verified' => 'تم التحقق',
        'due_at' => 'الموعد النهائي',
        'verified_at' => 'تم التحقق في',
        'completed_at' => 'أُغلق في',
        'created_at' => 'استُلم في',
    ],

    'type' => [
        'confirmation' => 'تأكيد المعالجة',
        'access' => 'الوصول',
        'correction' => 'التصحيح',
        'anonymization' => 'التجهيل أو الحجب',
        'portability' => 'قابلية النقل',
        'deletion' => 'الحذف',
        'sharing_information' => 'معلومات المشاركة',
        'consent_information' => 'معلومات الموافقة',
        'consent_revocation' => 'سحب الموافقة',
    ],

    'status' => [
        'pending' => 'قيد الانتظار',
        'completed' => 'مكتمل',
        'rejected' => 'مرفوض',
    ],

    'filters' => [
        'overdue' => 'متأخرة',
    ],

    'actions' => [
        'verify' => [
            'label' => 'التحقق من الهوية',
            'description' => 'تأكد من هوية مقدّم الطلب واربط الطلب بسجله. لا يتم تصدير أو حذف أي شيء قبل ذلك.',
            'not_found' => 'لم يُعثر على سجل لصاحب البيانات هذا.',
            'success' => 'تم التحقق من الهوية.',
        ],
        'fulfil' => [
            'label' => 'تنفيذ',
            'description' => [
                'access' => 'تصدير جميع البيانات الشخصية المعلنة لصاحب البيانات إلى ملف JSON.',
                'portability' => 'تصدير جميع البيانات الشخصية المعلنة لصاحب البيانات إلى ملف JSON.',
                'anonymization' => 'تجهيل جميع سجلات صاحب البيانات. لا يمكن التراجع عن ذلك.',
                'deletion' => 'تجهيل جميع سجلات صاحب البيانات. لا يمكن التراجع عن ذلك.',
            ],
            'success' => 'تم تنفيذ الطلب.',
        ],
        'complete' => [
            'label' => 'إكمال',
            'description' => 'يُجاب عن هذا الحق يدويًا: سجّل الرد الذي قدّمته لصاحب البيانات.',
            'success' => 'تم إكمال الطلب.',
        ],
        'reject' => [
            'label' => 'رفض',
            'success' => 'تم رفض الطلب.',
        ],
        'download' => [
            'label' => 'تنزيل التصدير',
        ],
    ],
];
