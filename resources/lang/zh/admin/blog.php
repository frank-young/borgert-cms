<?php

return [

    'module' => '博客',

    'submodule' => [
        'categorys' => '分类',
        'comments' => '评论',
        'posts' => '文章',
    ],

    'categorys' => [
        'index' => [
            'title' => '分类列表 (:total)',
            'is_empty' => '没有分类',
        ],

        'create' => [
            'title' => '创建分类',
        ],

        'store' => [
            'messages' => [
                'success' => '创建分类成功！',
            ],
        ],

        'edit' => [
            'title' => '编辑分类',
        ],

        'update' => [
            'messages' => [
                'success' => '更新分类成功！',
            ],
        ],

        'destroy' => [
            'messages' => [
                'info' => '没有选择任何分类！',
                'success' => '删除分类成功！',
            ],
        ],
    ],

    'comments' => [
        'is_empty' => '该文章没有任何评论',

        'types' => [
            'pending' => '审核中',
            'approved' => '通过审核',
            'reproved' => '拒绝审核',
        ],

        'index' => [
            'title' => '审核中的评论列表 (:total)',
            'is_empty' => '审核中的评论为空',
        ],

        'aproved' => [
            'title' => '通过审核的评论列表 (:total)',
            'is_empty' => '通过审核的评论为空',
        ],

        'aprove' => [
            'messages' => [
                'success' => '通过审核成功！',
            ],
        ],

        'reproved' => [
            'title' => '拒绝审核的评论列表 (:total)',
            'is_empty' => '拒绝审核评论为空',
        ],

        'reprove' => [
            'messages' => [
                'success' => '拒绝审核评论成功！',
            ],
        ],
    ],

    'posts' => [
        'index' => [
            'title' => '文章列表 (:total)',
            'is_empty' => '文章列表为空',
        ],

        'create' => [
            'title' => '创建文章',
        ],

        'edit' => [
            'title' => '编辑文章',
            'posted' => '<strong>:name</strong> put message <strong>:title</strong> in blog.',
        ],

        'store' => [
            'messages' => [
                'success' => '文章创建成功！',
            ],
        ],

        'update' => [
            'messages' => [
                'success' => '更新文章成功！',
            ],
        ],

        'destroy' => [
            'messages' => [
                'info' => '没有选择任何文章！',
                'success' => '删除文章成功！',
            ],
        ],
    ],

];
