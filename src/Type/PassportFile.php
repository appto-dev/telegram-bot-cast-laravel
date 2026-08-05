<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Telegram Passport is a unified authorization method for services that require personal
 * identification. Users can upload their documents once, then instantly share their data with services
 * that require real-world ID (finance, ICOs, etc.). Please see the <a href="/passport">manual</a> for
 * details.
 */
class PassportFile extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Identifier for this file, which can be used to download or reuse the file */
        public string $file_id,
        /**
         * @var  string  Unique identifier for this file, which is supposed to be the same over time and for
         * different bots. Can't be used to download or reuse the file.
         */
        public string $file_unique_id,
        /** @var  int  File size in bytes */
        public int $file_size,
        /** @var  int  Unix time when the file was uploaded */
        public int $file_date,
    ) {
    }
}
