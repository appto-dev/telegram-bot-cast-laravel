<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class WidgetQueryTypeSentTransaction extends Data implements TelegramType, WidgetQueryType
{
    public function __construct(
        /** @var  string  Type of the query, always "sent_transaction" */
        public string $type,
        /** @var  WidgetQueryWallet  The wallet from which the transaction was sent */
        public WidgetQueryWallet $wallet,
        /** @var  string  Value of msg_hash of the transaction */
        public string $msg_hash,
    ) {
    }
}
