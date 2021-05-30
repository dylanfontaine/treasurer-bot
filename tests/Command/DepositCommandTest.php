<?php

namespace Tests\Command;

use Discord\Slash\Parts\Choices;
use Discord\Slash\Parts\Interaction;
use TreasurerBot\Command\DepositCommand;
use PHPUnit\Framework\TestCase;

class DepositCommandTest extends TestCase
{
    public function testExecute(): void
    {
        $interaction = $this->getMockBuilder(Interaction::class)->getMock();
        $choices = $this->getMockBuilder(Choices::class)->disableOriginalConstructor()->getMock();
        DepositCommand::executeCommand($interaction, $choices);
        self::fail('fail');
    }
}
