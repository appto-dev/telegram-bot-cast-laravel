<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\MessageEntity;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SendMessageDraft extends Data implements TelegramMethod
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
         * @var  string|null  Text of the message to be sent, 0-4096 characters after entities parsing. Pass an
         * empty text to show a "Thinking…" placeholder.
         */
        public ?string $text,
        /**
         * @var  string|null  Mode for parsing entities in the message text. See
         * <a href="#formatting-options">formatting options</a> for more details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  A JSON-serialized list of special entities that appear in message text,
         * which can be specified instead of <em>parse_mode</em>
         */
        public ?array $entities,
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
