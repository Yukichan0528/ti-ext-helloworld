# ti-ext-helloworld

This repository is practice of tastyigniter extensions.

https://github.com/tastyigniter/TastyIgniter

# How to install this extension

Copy this into your extension folder as /extensions/[Your original name]/helloworld.

# How to create this extension

https://tastyigniter.com/docs/master/extend/extensions

## 1. Run create command and set metadata

```bat
$ cd /var/www/html/...[application home]
$ php artisan create:extension [Your original name].HelloWorld
```

-> create 後、下図のように TastyIgniter > Extensions からが参照できるようになる。
![ss_helloworld_extension](./assets/images/ss_helloworld_extension.png "ss_helloworld_extension")

このとき、name, author, description, icon, version などの Metadata を編集可能です。

cf. get icon from https://fontawesome.com/

## 2. Create extension.json

```json
{
  "code": "Test.HelloWorld",
  "name": "HelloWorld",
  "description": "This extension is practice of tastyigniter extensions.",
  "version": "1.0.0",
  "author": "Test",
  "icon": "fa-plug",
  "homepage": "https://github.com/Yukichan0528/ti-ext-helloworld",
  "require": {
    "igniter.demo": "*"
  }
}
```

-> require の設定で、前提 Extensions を指定可能です。（動作していない可能性あり？）

## 3. Add navigation menu

```php : Extension.php
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
```
