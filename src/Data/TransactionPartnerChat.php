<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;
use Spatie\LaravelData\Data;

/**
 * Describes a transaction with a chat.
 */
final class TransactionPartnerChat extends Data implements TelegramBotData, TransactionPartner
{
    public function __construct(
        /** Type of the transaction partner, always "chat" */
        public string $type,
        /** Information about the chat */
        public Chat $chat,
        /** The gift sent to the chat by the bot */
        public ?Gift $gift,
    ) {
    }
}
