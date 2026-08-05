<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InputRichMessage;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class SendRichMessageDraft extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Unique identifier for the target private chat */
        public int $chat_id,
        /** @var  int|null  Unique identifier for the target message thread */
        public ?int $message_thread_id,
        /**
         * @var  int  Unique identifier of the message draft; must be non-zero. Changes to drafts with the same
         * identifier are animated.
         */
        public int $draft_id,
        /**
         * @var  InputRichMessage  The partial message to be streamed. Direct upload of new files isn't
         * supported.
         */
        public InputRichMessage $rich_message,
    ) {
    }
}
