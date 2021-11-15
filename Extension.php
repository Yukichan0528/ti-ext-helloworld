<?php

namespace Test\HelloWorld;

use System\Classes\BaseExtension;

/**
 * HelloWorld Extension Information File
 */
class Extension extends BaseExtension
{
    /**
     * Returns information about this extension.
     *
     * @return array
     */
    public function extensionMeta()
    {
        return [
            'name'        => 'HelloWorld',
            'author'      => 'Test',
            'description' => 'This extension is practice of tastyigniter extensions.',
            'icon'        => 'fa-plug',
            // get icon from https://fontawesome.com/
            'version'     => '1.0.0'
        ];
    }

    /**
     * Register method, called when the extension is first registered.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Registers any front-end components implemented in this extension.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Test\HelloWorld\Components\Child1' => [
                'code' => 'helloworldChild1',
                'name' => 'helloworld-child1',
                'description' => 'Description of the helloworld-child1 component',
            ],
        ];
    }

    // ナビゲーションメニューに項目を追加する
    // 反映には Extension の再起動が必要。
    public function registerNavigation()
    {
        return [
            // 新規メニュー
            'helloworld' => [ // Required : 【必須】
                'priority' => 990, // optional : ナビゲーションメニューの表示順の優先順位。
                'icon' => 'fa-plug', // optional : ナビゲーションメニューに表示するアイコン。
                'title' => 'HelloWorld', // Required : 【必須】ナビゲーションメニューに表示するタイトル。
                // 'class' => '', // optioonal : メニューのclass属性。
                // 'href' => admin_url('test/helloworld'), // optional : メニュー押下時の遷移先。child が設定されている時は機能しない。url は autherから先を記載。
                'permission' => ['Test.HelloWorld'], // optional : 表示に必要な Permissions。registerPermissions での定義名に合わせる。
                'child' => [ // optional
                    'child1' => [ // Required : 【必須】
                        'priority' => 10, // optional
                        // 'icon' => 'fa-plug', // optional
                        'title' => 'Child1', // Required : 【必須】
                        'class' => 'helloworld', // optioonal
                        'href' => admin_url('test/helloworld/child1'), // Required : 【必須】
                        'permission' => ['Test.HelloWorld'],
                    ],
                    // 'child2' => [ // optional : 最低1つ。
                    //     'priority' => 20, // optional
                    //     // 'icon' => 'fa-plug', // optional
                    //     'title' => 'Child2', // Required : 【必須】
                    //     'class' => 'helloworld', // optioonal
                    //     'href' => admin_url('test/helloworld/child2'), // Required : 【必須】
                    //     // 'permission' => ['Test.HelloWorld'], // optioonal
                    // ],
                ],
            ],
            // TODO 既存メニューにchildを追加する方法
        ];
    }

    /**
     * Registers any admin permissions used by this extension.
     *
     * @return array
     */
    public function registerPermissions()
    {
        // Remove this line and uncomment block to activate
        return [
            //            'Test.HelloWorld.SomePermission' => [
            //                'description' => 'Some permission',
            //                'group' => 'module',
            //            ],
            'Test.HelloWorld' => [
                'label' => 'test.helloworld::default.permissions',
                'group' => 'admin::lang.permissions.name',
            ],
        ];
    }
}
