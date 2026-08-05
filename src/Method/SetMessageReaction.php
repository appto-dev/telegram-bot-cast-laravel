<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\ReactionType;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SetMessageReaction extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot, supergroup or
         * channel in the format <code>@username</code>
         */
        public int|string $chat_id,
        /**
         * @var  int  Identifier of the target message. If the message belongs to a media group, the reaction
         * is set to the first non-deleted message in the group instead.
         */
        public int $message_id,
        /**
         * @var  ReactionType[]|null  A JSON-serialized list of reaction types to set on the message.
         * Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji
         * reaction can be used if it is either already present on the message or explicitly allowed by chat
         * administrators. Paid reactions can't be used by bots.
         */
        public ?array $reaction,
        /** @var  bool|null  Pass <em>True</em> to set the reaction with a big animation */
        public ?bool $is_big,
    ) {
    }
}
