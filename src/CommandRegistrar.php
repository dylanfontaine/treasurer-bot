<?php

namespace TreasurerBot;

use Discord\Slash\Client;
use Discord\Slash\RegisterClient;
use TreasurerBot\Command\DepositCommand;

class CommandRegistrar
{

  /**
   * Create global slash commands.
   */
  public static function createCommands(RegisterClient $client) {
    $client->createGlobalCommand(
      DepositCommand::NAME,
      DepositCommand::DESCRIPTION,
      DepositCommand::OPTIONS );
  }

  /**
   * Attach listeners to our global commands.
   */
  public static function attachListeners(Client $client) {
    $client->registerCommand(DepositCommand::NAME, [DepositCommand::class, 'executeCommand']);

  }

}
