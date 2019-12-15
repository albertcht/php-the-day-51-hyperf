<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Model\User;

class IndexController extends AbstractController
{
    public function analysis()
    {
        return [
            'required_files' => count(get_included_files())
        ];
    }

    public function hello()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    public function sleep()
    {
        sleep(1);

        return [
            'foo' => 'bar'
        ];
    }

    public function user()
    {
        return User::first();
    }
}
