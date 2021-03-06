<?php

return [

    'company' => [
        'name'              => '名称',
        'email'             => '邮箱',
        'phone'             => '电话',
        'address'           => '地址',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => '本地化',
        'date' => [
            'format'        => '日期格式',
            'separator'     => '日期分隔',
            'dash'          => '破折号 (-)',
            'dot'           => '点 (.)',
            'comma'         => '逗号 (,)',
            'slash'         => '斜线 (/)',
            'space'         => '空格 ( )',
        ],
        'timezone'          => '时区',
        'percent' => [
            'title'         => '百分比 (%) 位置',
            'before'        => '编号之前',
            'after'         => '编号之后',
        ],
    ],
    'invoice' => [
        'tab'               => '订单',
        'prefix'            => '订单前缀',
        'digit'             => '数字位数',
        'next'              => '下一个号码',
        'logo'              => 'Logo',
    ],
    'default' => [
        'tab'               => '默认',
        'account'           => '默认账户',
        'currency'          => '默认货币',
        'tax'               => '默认税率',
        'payment'           => '默认付款方式',
        'language'          => '默认语言',
    ],
    'email' => [
        'protocol'          => '协议',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP IP',
            'port'          => 'SMTP Port',
            'username'      => 'SMTP 账户',
            'password'      => 'SMTP 绵绵',
            'encryption'    => 'SMTP 安全性',
            'none'          => '无',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail 路径',
        'log'               => '邮件日志',
    ],
    'scheduling' => [
        'tab'               => '计划任务',
        'send_invoice'      => '发送订单提醒',
        'invoice_days'      => '与到期日后发送',
        'send_bill'         => '发送账单提醒',
        'bill_days'         => '与到期日前发送',
        'cron_command'      => 'Cron命令',
        'schedule_time'     => '执行时间',
    ],
    'appearance' => [
        'tab'               => '显示',
        'theme'             => '主题',
        'light'             => '明亮',
        'dark'              => '暗色',
        'list_limit'        => '每页记录数量',
        'use_gravatar'      => '使用 Gravatar(邮箱头像：不建议开启，影响系统速度)',
    ],
    'system' => [
        'tab'               => '系统',
        'session' => [
            'lifetime'      => 'Session周期 (分钟)',
            'handler'       => 'Session管理',
            'file'          => '文件',
            'database'      => '数据库',
        ],
        'file_size'         => '最大文件容量 (MB)',
        'file_types'        => '允许文件格式',
    ],

];
