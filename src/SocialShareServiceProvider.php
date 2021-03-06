<?php

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Laravel Social Share.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SocialShare;

use BrianFaust\ServiceProvider\AbstractServiceProvider;

class SocialShareServiceProvider extends AbstractServiceProvider
{
    public function register(): void
    {
        parent::register();

        $this->app->singleton('social-share', function () {
            return new Share();
        });
    }

    public function provides(): array
    {
        return array_merge(parent::provides(), ['social-share']);
    }

    public function getPackageName(): string
    {
        return 'social-share';
    }
}
