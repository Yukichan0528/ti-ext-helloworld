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
            // Remove this line and uncomment the line below to activate
            //            'Test\HelloWorld\Components\MyComponent' => 'myComponent',
        ];
    }

    // ナビゲーションメニューに項目を追加する
    // 反映には Extension の再起動が必要。
    public function registerNavigation()
    {
        return [
            'helloworld' => [ // Required : 【必須】
                'priority' => 990, // optional : ナビゲーションメニューの表示順の優先順位。
                'icon' => 'fa-plug', // optional : ナビゲーションメニューに表示するアイコン。
                'title' => 'HelloWorld', // Required : 【必須】ナビゲーションメニューに表示するタイトル。
                // 'class' => '', // optioonal : メニューのclass属性。
                // 'href' => admin_url('helloworld'), // optional : メニュー押下時の遷移先。child が設定されている時は機能しない。
                // 'permission' => ['Test.HelloWorld'], // optional : 表示に必要な Permissions。
                'child' => [ // optional
                    'test1' => [ // Required : 【必須】
                        'priority' => 10, // optional
                        // 'icon' => 'fa-plug', // optional
                        'title' => 'Test', // Required : 【必須】
                        'class' => 'helloworld', // optioonal
                        'href' => admin_url('helloworld/test'), // Required : 【必須】
                        // 'permission' => ['Test.HelloWorld.Test1'],
                    ],
                    // 'test2' => [ // optional : 最低1つ。
                    //     'priority' => 20, // optional
                    //     // 'icon' => 'fa-plug', // optional
                    //     'title' => 'Test2', // Required : 【必須】
                    //     'class' => 'helloworld', // optioonal
                    //     'href' => admin_url('helloworld/test2'), // Required : 【必須】
                    //     // 'permission' => ['Test.HelloWorld.Test2'], // optioonal
                    // ],
                ],
            ],
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
        ];
    }
}
