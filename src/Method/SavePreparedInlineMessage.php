<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Support\Casts\InlineQueryResultCast;
use Appto\TelegramBot\Type\InlineQueryResult;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SavePreparedInlineMessage extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Unique identifier of the target user that can use the prepared message */
        public int $user_id,
        /** @var  InlineQueryResult  A JSON-serialized object describing the message to be sent */
        #[WithCast(InlineQueryResultCast::class)]
        public InlineQueryResult $result,
        /** @var  bool|null  Pass <em>True</em> if the message can be sent to private chats with users */
        public ?bool $allow_user_chats,
        /** @var  bool|null  Pass <em>True</em> if the message can be sent to private chats with bots */
        public ?bool $allow_bot_chats,
        /** @var  bool|null  Pass <em>True</em> if the message can be sent to group and supergroup chats */
        public ?bool $allow_group_chats,
        /** @var  bool|null  Pass <em>True</em> if the message can be sent to channel chats */
        public ?bool $allow_channel_chats,
    ) {
    }
}
