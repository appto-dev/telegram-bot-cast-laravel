<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\PassportElementError;
use Spatie\LaravelData\Data;

/**
 * Telegram Passport is a unified authorization method for services that require personal
 * identification. Users can upload their documents once, then instantly share their data with services
 * that require real-world ID (finance, ICOs, etc.). Please see the <a href="/passport">manual</a> for
 * details.
 */
class SetPassportDataErrors extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  User identifier */
        public int $user_id,
        /** @var  PassportElementError[]  A JSON-serialized Array describing the errors */
        public array $errors,
    ) {
    }
}
