<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class BanChatMember extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target group or username of the target supergroup or
         * channel in the format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  int  Unique identifier of the target user */
        public int $user_id,
        /**
         * @var  int|null  Date when the user will be unbanned; Unix time. If user is banned for more than 366
         * days or less than 30 seconds from the current time they are considered to be banned forever. Applied
         * for supergroups and channels only.
         */
        public ?int $until_date,
        /**
         * @var  bool|null  Pass <em>True</em> to delete all messages from the chat for the user that is being
         * removed. If <em>False</em>, the user will be able to see messages in the group that were sent before
         * the user was removed. Always <em>True</em> for supergroups and channels.
         */
        public ?bool $revoke_messages,
    ) {
    }
}
