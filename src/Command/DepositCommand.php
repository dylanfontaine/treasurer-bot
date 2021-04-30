<?php

namespace TreasurerBot\Command;

use Discord\Slash\Parts\Choices;
use Discord\Slash\Parts\Interaction;

class DepositCommand {

  public const NAME = 'deposit';

  public const DESCRIPTION = 'Deposits currency';

  public const OPTIONS = [];

  public static function executeCommand(Interaction $interaction, Choices $choices) {
    var_dump($interaction);
    var_dump($choices);
  }

}
