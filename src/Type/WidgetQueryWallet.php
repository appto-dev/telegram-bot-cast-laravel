<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class WidgetQueryWallet extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Address of the wallet */
        public string $address,
        /**
         * @var  string  Balance of the wallet, in the smallest units of the cryptocurrency, as a decimal
         * number
         */
        public string $amount,
        /** @var  string|null  Hex-encoded public key of the wallet; omitted if unknown */
        public ?string $public_key,
        /**
         * @var  string|null  Base64-encoded serialized StateInit of the wallet contract; omitted if and only
         * if public_key is omitted
         */
        public ?string $state_init,
    ) {
    }
}
