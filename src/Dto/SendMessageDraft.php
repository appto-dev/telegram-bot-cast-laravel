<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to stream a partial message to a user while the message is being generated. Note that the
 * streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you must
 * call <a href="https://core.telegram.org/bots/api#sendmessage">sendMessage</a> with the complete message to
 * persist it in the user's chat. Returns <em>True</em> on success.
 */
final class SendMessageDraft extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target private chat */
        public int $chat_id,
        /** Unique identifier for the target message thread */
        public ?int $message_thread_id,
        /**
         * Unique identifier of the message draft; must be non-zero. Changes of drafts with the same identifier are
         * animated.
         */
        public int $draft_id,
        /**
         * Text of the message to be sent, 0-4096 characters after entities parsing. Pass an empty text to show a
         * "Thinking…" placeholder.
         */
        public ?string $text,
        /**
         * Mode for parsing entities in the message text. See <a href="#formatting-options">formatting options</a> for
         * more details.
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in message text, which can be specified instead of
         * <em>parse_mode</em>
         * @var array<MessageEntity>
         */
        public ?array $entities,
    ) {
    }
}
