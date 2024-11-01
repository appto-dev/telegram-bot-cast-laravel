<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\ChatPermissions;
use Spatie\LaravelData\Data;

/**
 * Use this method to set default chat permissions for all members. The bot must be
 * an administrator in the group or a supergroup for this to work and must have the
 * <em>can_restrict_members</em> administrator rights. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot API 7.11
 */
final class SetChatPermissions extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format <code>@supergroupusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * A JSON-serialized object for new default chat permissions
         * @var ChatPermissions
         */
        public ChatPermissions $permissions,
        /**
         * Pass <em>True</em> if chat permissions are set independently. Otherwise, the
         * <em>can_send_other_messages</em> and <em>can_add_web_page_previews</em>
         * permissions will imply the <em>can_send_messages</em>, <em>can_send_audios</em>,
         * <em>can_send_documents</em>, <em>can_send_photos</em>, <em>can_send_videos</em>,
         * <em>can_send_video_notes</em>, and <em>can_send_voice_notes</em> permissions;
         * the <em>can_send_polls</em> permission will imply the <em>can_send_messages</em>
         * permission.
         * @var bool
         */
        public ?bool $use_independent_chat_permissions,
    ) {
    }
}
