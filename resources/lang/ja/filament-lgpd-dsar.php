<?php

return [
    'resource' => [
        'label' => 'データ主体の請求',
        'plural_label' => 'データ主体の請求',
    ],

    'fields' => [
        'type' => '権利',
        'status' => 'ステータス',
        'requester_name' => '請求者',
        'requester_email' => '請求者のメール',
        'details' => '詳細',
        'response' => '回答',
        'reason' => '理由',
        'subject' => 'データ主体',
        'subject_type' => 'データ主体のモデル',
        'subject_id' => 'データ主体のID',
        'verified' => '本人確認済み',
        'due_at' => '期限',
        'verified_at' => '本人確認日時',
        'completed_at' => '完了日時',
        'created_at' => '受付日時',
    ],

    'type' => [
        'confirmation' => '処理の確認',
        'access' => 'アクセス',
        'correction' => '訂正',
        'anonymization' => '匿名化またはブロック',
        'portability' => 'ポータビリティ',
        'deletion' => '削除',
        'sharing_information' => '共有に関する情報',
        'consent_information' => '同意に関する情報',
        'consent_revocation' => '同意の撤回',
    ],

    'status' => [
        'pending' => '保留中',
        'completed' => '完了',
        'rejected' => '却下',
    ],

    'filters' => [
        'overdue' => '期限切れ',
    ],

    'actions' => [
        'verify' => [
            'label' => '本人確認',
            'description' => '請求者が誰かを確認し、請求をその人のレコードに紐付けます。それまでは何もエクスポートも削除もされません。',
            'not_found' => 'このデータ主体のレコードが見つかりません。',
            'success' => '本人確認が完了しました。',
        ],
        'fulfil' => [
            'label' => '対応する',
            'description' => [
                'access' => 'データ主体の申告済み個人データをすべて JSON ファイルにエクスポートします。',
                'portability' => 'データ主体の申告済み個人データをすべて JSON ファイルにエクスポートします。',
                'anonymization' => 'データ主体のすべてのレコードを匿名化します。元に戻せません。',
                'deletion' => 'データ主体のすべてのレコードを匿名化します。元に戻せません。',
            ],
            'success' => '請求に対応しました。',
        ],
        'complete' => [
            'label' => '完了にする',
            'description' => 'この権利には手動で回答します。データ主体に伝えた回答を記録してください。',
            'success' => '請求を完了しました。',
        ],
        'reject' => [
            'label' => '却下する',
            'success' => '請求を却下しました。',
        ],
        'download' => [
            'label' => 'エクスポートをダウンロード',
        ],
    ],
];
