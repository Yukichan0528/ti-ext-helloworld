<?php

namespace Test\Helloworld\Controllers;

use Admin\Facades\AdminMenu;

/**
 * Child1 Admin Controller
 */
class Child1 extends \Admin\Classes\AdminController
{
    public $implement = [
        'Admin\Actions\FormController',
        'Admin\Actions\ListController'
    ];

    // TODO modelが必要？
    public $listConfig = [
        'list' => [
            'model'        => 'Test\Helloworld\Models\Child1',
            'title'        => 'Child1',
            'emptyMessage' => 'lang:admin::lang.list.text_empty',
            'defaultSort'  => ['id', 'DESC'],
            'configFile'   => 'child1',
        ],
    ];

    // TODO modelが必要？
    public $formConfig = [
        'name'       => 'Child1',
        'model'      => 'Test\Helloworld\Models\Child1',
        'create'     => [
            'title'         => 'lang:admin::lang.form.create_title',
            'redirect'      => 'test/helloworld/child1/edit/{id}',
            'redirectClose' => 'test/helloworld/child1',
            'redirectNew'   => 'test/helloworld/child1/create',
        ],
        'edit'       => [
            'title'         => 'lang:admin::lang.form.edit_title',
            'redirect'      => 'test/helloworld/child1/edit/{id}',
            'redirectClose' => 'test/helloworld/child1',
            'redirectNew'   => 'test/helloworld/child1/create',
        ],
        'preview'    => [
            'title'    => 'lang:admin::lang.form.preview_title',
            'redirect' => 'test/helloworld/child1',
        ],
        'configFile' => 'child1',
    ];

    protected $requiredPermissions = 'Test.Helloworld';

    public function __construct()
    {
        // for controller test.
        dd('this is controller of child1.');

        parent::__construct();

        AdminMenu::setContext('child1', 'test.helloworld');
    }
}
