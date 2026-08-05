<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\ChatPermissions;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class RestrictChatMember extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target supergroup in the
         * format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  int  Unique identifier of the target user */
        public int $user_id,
        /** @var  ChatPermissions  A JSON-serialized object for new user permissions */
        public ChatPermissions $permissions,
        /**
         * @var  bool|null  Pass <em>True</em> if chat permissions are set independently. Otherwise, the
         * <em>can_send_other_messages</em> and <em>can_add_web_page_previews</em> permissions will imply the
         * <em>can_send_messages</em>, <em>can_send_audios</em>, <em>can_send_documents</em>,
         * <em>can_send_photos</em>, <em>can_send_videos</em>, <em>can_send_video_notes</em>, and
         * <em>can_send_voice_notes</em> permissions; the <em>can_send_polls</em> permission will imply the
         * <em>can_send_messages</em> permission.
         */
        public ?bool $use_independent_chat_permissions,
        /**
         * @var  int|null  Date when restrictions will be lifted for the user; Unix time. If user is restricted
         * for more than 366 days or less than 30 seconds from the current time, they are considered to be
         * restricted forever.
         */
        public ?int $until_date,
    ) {
    }
}
