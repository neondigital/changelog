<?php

namespace Neondigital\Changelog\Data;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ChangelogEntry extends Data
{
    public function __construct(
        public string $filename,
        public Carbon $date,
        public string $title,
        /** @var DataCollection<ChangelogEntryChange> */
        public DataCollection $changes,
        public ?string $body = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            filename: $data['filename'],
            date: $data['date'],
            title: $data['title'],
            changes: ChangelogEntryChange::collection($data['changes'] ?? []),
            body: $data['body'] ?? null,
        );
    }
}
