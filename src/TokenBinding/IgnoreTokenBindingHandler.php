<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2020 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Webauthn\TokenBinding;

use JetBrains\PhpStorm\Pure;
use Psr\Http\Message\ServerRequestInterface;

final class IgnoreTokenBindingHandler implements TokenBindingHandler
{
    #[Pure]
    public static function create(): self
    {
        return new self();
    }

    #[Pure]
    public function check(TokenBinding $tokenBinding, ServerRequestInterface $request): void
    {
        //Does nothing
    }
}
