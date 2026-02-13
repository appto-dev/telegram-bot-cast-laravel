<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to stream a partial message to a user while the message is being
 * generated; supported only for bots with forum topic mode enabled. Returns
 * <em>True</em> on success.
 */
final class SendMessageDraft extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target private chat */
        public int $chat_id,
        /** Unique identifier for the target message thread */
        public ?int $message_thread_id,
        /**
         * Unique identifier of the message draft; must be non-zero. Changes of drafts with
         * the same identifier are animated
         */
        public int $draft_id,
        /** Text of the message to be sent, 1-4096 characters after entities parsing */
        public string $text,
        /**
         * Mode for parsing entities in the message text. See <a
         * href="#formatting-options">formatting options</a> for more details.
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in message text, which
         * can be specified instead of <em>parse_mode</em>
         */
        public ?MessageEntity $entities,
    ) {
    }
}
