<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Your bot can offer users HTML5 games to play solo or to compete against each other in groups and
 * one-on-one chats. Create games via <a href="https://t.me/botfather">@BotFather</a> using the
 * <em>/newgame</em> command. Please note that this kind of power requires responsibility: you will
 * need to accept the terms for each game that your bots will be offering.
 *  - Games are a new type of content on Telegram, represented by the <a href="#game">Game</a> and
 * <a href="#inlinequeryresultgame">InlineQueryResultGame</a> objects.
 *  - Once you've created a game via <a href="https://t.me/botfather">BotFather</a>, you can send games
 * to chats as regular messages using the <a href="#sendgame">sendGame</a> method, or use
 * <a href="#inline-mode">inline mode</a> with
 * <a href="#inlinequeryresultgame">InlineQueryResultGame</a>.
 *  - If you send the game message without any buttons, it will automatically have a 'Play
 * <em>GameName</em>' button. When this button is pressed, your bot gets a
 * <a href="#callbackquery">CallbackQuery</a> with the <em>game_short_name</em> of the requested game.
 * You provide the correct URL for this particular user and the app opens the game in the in-app
 * browser.
 *  - You can manually add multiple buttons to your game message. Please note that the first button in
 * the first row must always launch the game, using the field <em>callback_game</em> in
 * <a href="#inlinekeyboardbutton">InlineKeyboardButton</a>. You can add extra buttons according to
 * taste: e.g., for a description of the rules, or to open the game's official community.
 *  - To make your game more attractive, you can upload a GIF animation that demonstrates the game to
 * the users via <a href="https://t.me/botfather">BotFather</a> (see
 * <a href="https://t.me/gamebot?game=lumberjack">Lumberjack</a> for example).
 *  - A game message will also display high scores for the current chat. Use
 * <a href="#setgamescore">setGameScore</a> to post high scores to the chat with the game, add the
 * <em>disable_edit_message</em> parameter to disable automatic update of the message with the current
 * scoreboard.
 *  - Use <a href="#getgamehighscores">getGameHighScores</a> to get data for in-game high score tables.
 *  - You can also add an extra
 * <a href="/bots/games#sharing-your-game-to-telegram-chats">sharing button</a> for users to share
 * their best score to different chats.
 *  - For examples of what can be done using this new stuff, check the
 * <a href="https://t.me/gamebot">@gamebot</a> and <a href="https://t.me/gamee">@gamee</a> bots.
 */
class SendGame extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the message will
         * be sent
         */
        public ?string $business_connection_id,
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot in the format
         * <code>@username</code>. Games can't be sent to channel direct messages chats and channel chats.
         */
        public int|string $chat_id,
        /**
         * @var  int|null  Unique identifier for the target message thread (topic) of a forum; for forum
         * supergroups and private chats of bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * @var  string  Short name of the game, serves as the unique identifier for the game. Set up your
         * games via <a href="https://t.me/botfather">@BotFather</a>.
         */
        public string $game_short_name,
        /**
         * @var  bool|null  Sends the message
         * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
         * notification with no sound.
         */
        public ?bool $disable_notification,
        /** @var  bool|null  Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /**
         * @var  bool|null  Pass <em>True</em> to allow up to 1000 messages per second, ignoring
         * <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a>
         * for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
         * balance.
         */
        public ?bool $allow_paid_broadcast,
        /**
         * @var  string|null  Unique identifier of the message effect to be added to the message; for private
         * chats only
         */
        public ?string $message_effect_id,
        /** @var  ReplyParameters|null  Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * @var  InlineKeyboardMarkup|null  A JSON-serialized object for an
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>. If empty, one 'Play game_title'
         * button will be shown. If not empty, the first button must launch the game.
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
