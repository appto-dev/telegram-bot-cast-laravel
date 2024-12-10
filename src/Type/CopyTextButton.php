<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents an inline keyboard button that copies specified text to
 * the clipboard.
 */
final class CopyTextButton extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The text to be copied to the clipboard; 1-256 characters
         * @var string
         */
        public string $text,
    ) {
    }
}
