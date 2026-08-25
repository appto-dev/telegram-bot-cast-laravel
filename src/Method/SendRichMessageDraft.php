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
         * identifier are animated. Otherwise, the draft is replaced without animation.
         */
        public int $draft_id,
        /**
         * @var  InputRichMessage  The partial message to be streamed. Direct upload of new files and explicit
         * upload of files by a URL isn't supported.
         */
        public InputRichMessage $rich_message,
        /**
         * @var  bool|null  Pass <em>True</em> to show the user a button to stop further drafts. The bot will
         * receive an <a href="#update">Update</a> "stopped_message_generation" if the user presses the button.
         */
        public ?bool $can_stop,
        /**
         * @var  bool|null  Pass <em>True</em> to keep the draft in the chat when the button is pressed. The
         * draft will still disappear after a short time or if the bot sends a message. To fully preserve the
         * partial draft, the bot should send it as a new message.
         */
        public ?bool $keep_on_stop,
    ) {
    }
}
