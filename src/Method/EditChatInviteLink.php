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
class EditChatInviteLink extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target channel in the
         * format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  string  The invite link to edit */
        public string $invite_link,
        /** @var  string|null  Invite link name; 0-32 characters */
        public ?string $name,
        /** @var  int|null  Point in time (Unix timestamp) when the link will expire */
        public ?int $expire_date,
        /**
         * @var  int|null  The maximum number of users that can be members of the chat simultaneously after
         * joining the chat via this invite link; 1-99999
         */
        public ?int $member_limit,
        /**
         * @var  bool|null  <em>True</em>, if users joining the chat via the link need to be approved by chat
         * administrators. If <em>True</em>, <em>member_limit</em> can't be specified.
         */
        public ?bool $creates_join_request,
    ) {
    }
}
