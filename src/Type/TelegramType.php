<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

/**
 * Базовый контракт для сгенерированных типов Telegram Bot API.
 */
interface TelegramType
{
    public function toArray(): array;

    public static function from(mixed ...$payload): static;
}
