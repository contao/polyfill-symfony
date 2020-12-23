<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Symfony\Component\HttpFoundation;

class InputBag extends ParameterBag
{
    public function all()
    {
        $key = \func_num_args() > 0 ? func_get_arg(0) : null;

        if (null !== $key) {
            return $this->get($key);
        }

        return parent::all();
    }
}
