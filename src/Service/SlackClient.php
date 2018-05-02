<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 15.04.18
 * Time: 16:52
 */

namespace App\Service;


use App\Helper\LoggerTrait;
use Monolog\Logger;
use Nexy\Slack\Client;

class SlackClient
{
    use LoggerTrait;

    private $slack;

    public function __construct(Client $slack)
    {
        $this->slack = $slack;
    }

    public function sendMessage(string $from, string $message)
    {
        $this->logInfo(
            'Beaming a message to slack', [
                'message' => $message
            ]);

        $slackMessage = $this->slack->createMessage();
        $slackMessage
            ->from($from)
            ->withIcon(':ghost:')
            ->setText($message);

        $this->slack->sendMessage($slackMessage);
    }

}