<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Contains information about the start page settings of a Telegram Business
 * account.
 *
 * @version Telegram Bot API 7.11
 */
final class BusinessIntro extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Title text of the business intro
         * @var string
         */
        public ?string $title,
        /**
         * Message text of the business intro
         * @var string
         */
        public ?string $message,
        /**
         * Sticker of the business intro
         * @var Sticker
         */
        public ?Sticker $sticker,
    ) {
    }
}
