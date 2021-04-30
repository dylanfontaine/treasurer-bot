<?php

include __DIR__ . '/vendor/autoload.php';

use Discord\Discord;
use Discord\Parts\User\Activity;
use Discord\Slash\Client;
use Discord\Slash\RegisterClient;
use TreasurerBot\CommandRegistrar;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$registerClient = new RegisterClient($_ENV['TOKEN']);

$discord = new Discord(['token' => $_ENV['TOKEN']]);

$client = new Client(['loop' => $discord->getLoop()]);

$client->linkDiscord($discord);

$discord->on('ready', function (Discord $discord) {
  $activity = new Activity($discord, [
    'type' => Activity::TYPE_WATCHING,
    'name' => 'your investments',
  ]);
  $discord->updatePresence($activity);
});

CommandRegistrar::createCommands($registerClient);
CommandRegistrar::attachListeners($client);


$discord->run();
