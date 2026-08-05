<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputChecklist;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SendChecklist extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string  Unique identifier of the business connection on behalf of which the message will be
         * sent
         */
        public string $business_connection_id,
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot in the format
         * <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  InputChecklist  A JSON-serialized object for the checklist to send */
        public InputChecklist $checklist,
        /** @var  bool|null  Sends the message silently. Users will receive a notification with no sound. */
        public ?bool $disable_notification,
        /** @var  bool|null  Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /** @var  string|null  Unique identifier of the message effect to be added to the message */
        public ?string $message_effect_id,
        /** @var  ReplyParameters|null  A JSON-serialized object for description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * @var  InlineKeyboardMarkup|null  A JSON-serialized object for an
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
