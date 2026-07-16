<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InputRichMessage;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to stream a partial rich message to a user while the message is being generated. Note that the
 * streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you must
 * call <a href="https://core.telegram.org/bots/api#sendrichmessage">sendRichMessage</a> with the complete
 * message to persist it in the user's chat. Returns <em>True</em> on success.
 */
final class SendRichMessageDraft extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target private chat */
        public int $chat_id,
        /** Unique identifier for the target message thread */
        public ?int $message_thread_id,
        /**
         * Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are
         * animated.
         */
        public int $draft_id,
        /** The partial message to be streamed. Direct upload of new files isn't supported. */
        public InputRichMessage $rich_message,
    ) {
    }
}
