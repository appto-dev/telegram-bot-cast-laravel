<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

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
class Game extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Title of the game */
        public string $title,
        /** @var  string  Description of the game */
        public string $description,
        /** @var  PhotoSize[]  Photo that will be displayed in the game message in chats */
        public array $photo,
        /**
         * @var  string|null  Brief description of the game or high scores included in the game message. Can be
         * automatically edited to include current high scores for the game when the bot calls setGameScore, or
         * manually edited using editMessageText. 0-4096 characters.
         */
        public ?string $text,
        /**
         * @var  MessageEntity[]|null  Special entities that appear in text, such as usernames, URLs, bot
         * commands, etc.
         */
        public ?array $text_entities,
        /**
         * @var  Animation|null  Animation that will be displayed in the game message in chats. Upload via
         * BotFather.
         */
        public ?Animation $animation,
    ) {
    }
}
