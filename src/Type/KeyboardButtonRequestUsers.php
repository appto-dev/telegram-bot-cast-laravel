<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object defines the criteria used to request suitable users. Information
 * about the selected users will be shared with the bot when the corresponding
 * button is pressed. <a href="/bots/features#chat-and-user-selection">More about
 * requesting users »</a>
 *
 * @version Telegram Bot API 7.10
 */
final class KeyboardButtonRequestUsers extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Signed 32-bit identifier of the request that will be received back in the
         * UsersShared object. Must be unique within the message
         * @var int
         */
        public int $request_id,
        /**
         * Pass True to request bots, pass False to request regular users. If not
         * specified, no additional restrictions are applied.
         * @var bool
         */
        public ?bool $user_is_bot,
        /**
         * Pass True to request premium users, pass False to request non-premium users. If
         * not specified, no additional restrictions are applied.
         * @var bool
         */
        public ?bool $user_is_premium,
        /**
         * The maximum number of users to be selected; 1-10. Defaults to 1.
         * @var int
         */
        public ?int $max_quantity,
        /**
         * Pass True to request the users' first and last names
         * @var bool
         */
        public ?bool $request_name,
        /**
         * Pass True to request the users' usernames
         * @var bool
         */
        public ?bool $request_username,
        /**
         * Pass True to request the users' photos
         * @var bool
         */
        public ?bool $request_photo,
    ) {
    }
}
