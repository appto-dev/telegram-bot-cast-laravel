<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents type of a poll, which is allowed to be created and sent
 * when the corresponding button is pressed.
 *
 * @version Telegram Bot API 7.10
 */
final class KeyboardButtonPollType extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * If quiz is passed, the user will be allowed to create only polls in the quiz
         * mode. If regular is passed, only regular polls will be allowed. Otherwise, the
         * user will be allowed to create a poll of any type.
         * @var string
         */
        public ?string $type,
    ) {
    }
}
