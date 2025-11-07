<?php

namespace Neondigital\Changelog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static getLatestRelease(): ?\Neondigital\Changelog\Data\ChangelogEntry
 * @method static getReleases(): \Illuminate\Support\Collection
 * @method static release(): void
 * @method static notifyOnRelease(\Closure $callback): void
 */
class Changelog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'changelog';
    }
}
