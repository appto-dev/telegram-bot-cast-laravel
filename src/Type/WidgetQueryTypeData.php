<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class WidgetQueryTypeData extends Data implements TelegramType, WidgetQueryType
{
    public function __construct(
        /** @var  string  Type of the query, always "data" */
        public string $type,
        /**
         * @var  TonWalletCard|null  TON wallet card of the user who sent the query, if it was sent to the bot
         * along with the query
         */
        public ?TonWalletCard $wallet_card,
    ) {
    }
}
