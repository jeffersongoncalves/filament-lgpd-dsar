<?php

return [
    'resource' => [
        'label' => '数据主体请求',
        'plural_label' => '数据主体请求',
    ],

    'fields' => [
        'type' => '权利',
        'status' => '状态',
        'requester_name' => '请求人',
        'requester_email' => '请求人邮箱',
        'details' => '详情',
        'response' => '答复',
        'reason' => '原因',
        'subject' => '数据主体',
        'subject_type' => '数据主体模型',
        'subject_id' => '数据主体 ID',
        'verified' => '已验证',
        'due_at' => '截止日期',
        'verified_at' => '验证时间',
        'completed_at' => '关闭时间',
        'created_at' => '接收时间',
    ],

    'type' => [
        'confirmation' => '确认处理',
        'access' => '访问',
        'correction' => '更正',
        'anonymization' => '匿名化或封存',
        'portability' => '可携带',
        'deletion' => '删除',
        'sharing_information' => '共享信息',
        'consent_information' => '同意信息',
        'consent_revocation' => '撤回同意',
    ],

    'status' => [
        'pending' => '待处理',
        'completed' => '已完成',
        'rejected' => '已拒绝',
    ],

    'filters' => [
        'overdue' => '已逾期',
    ],

    'actions' => [
        'verify' => [
            'label' => '验证身份',
            'description' => '确认请求人身份并将请求关联到其记录。在此之前不会导出或删除任何内容。',
            'not_found' => '未找到该数据主体的记录。',
            'success' => '身份已验证。',
        ],
        'fulfil' => [
            'label' => '执行',
            'description' => [
                'access' => '将数据主体所有已声明的个人数据导出为 JSON 文件。',
                'portability' => '将数据主体所有已声明的个人数据导出为 JSON 文件。',
                'anonymization' => '匿名化数据主体的所有记录。此操作无法撤销。',
                'deletion' => '匿名化数据主体的所有记录。此操作无法撤销。',
            ],
            'success' => '请求已执行。',
        ],
        'complete' => [
            'label' => '完成',
            'description' => '此权利需人工答复：记录你给数据主体的答复。',
            'success' => '请求已完成。',
        ],
        'reject' => [
            'label' => '拒绝',
            'success' => '请求已拒绝。',
        ],
        'download' => [
            'label' => '下载导出文件',
        ],
    ],
];
