<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class TonWalletTransfer extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Unique identifier of the transaction; may be empty if the transfer hasn't been sent
         * yet
         */
        public string $transaction_id,
        /** @var  string  Address of the transfer peer in the TON blockchain */
        public string $peer_address,
        /**
         * @var  string  The amount of transferred cryptocurrency, in the smallest units of the cryptocurrency,
         * as a decimal number; negative for outgoing transfers
         */
        public string $amount,
        /** @var  string|null  Comment added to the transfer; omitted if the comment is encrypted */
        public ?string $comment,
    ) {
    }
}
