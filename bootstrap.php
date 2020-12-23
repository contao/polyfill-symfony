<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

use Symfony\Component\HttpFoundation\InputBag;
use Symfony\Component\Translation\TranslatorInterface;

if (!class_exists(InputBag::class)) {
    include_once __DIR__.'/InputBag.php';
}

if (!interface_exists(TranslatorInterface::class)) {
    include_once __DIR__.'/TranslatorInterface.php';
}
