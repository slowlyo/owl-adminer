<?php

namespace Slowlyo\OwlAdminer\Http\Controllers;

use Slowlyo\OwlAdmin\Controllers\AdminController;

class OwlAdminerController extends AdminController
{
    public function index()
    {
        $schema = $this->basePage()->bodyClassName('custom-page')->css([
            '.bg-\[var\(--owl-body-bg\)\]' => ['background' => 'white'],
            '.custom-page'                 => ['height' => 'calc(100vh - 65px)', 'overflow' => 'hidden'],
            '.p-5'                         => ['padding' => '0 !important'],
        ])->body([
            amis()->IFrame()->className('my-iframe')->src(url('/extensions/slowlyo/owl-adminer/index.php')),
        ]);

        return $this->response()->success($schema);
    }
}
