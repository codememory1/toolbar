<?php

namespace Codememory\Component\Toolbar;

use Codememory\Component\Toolbar\Interfaces\ToolbarInformationInterface;

/**
 * Class ToolbarInformation
 *
 * @package Codememory\Component\Toolbar
 *
 * @author  Codememory
 */
class ToolbarInformation implements ToolbarInformationInterface
{

    /**
     * @inheritDoc
     */
    public function addVarDump(string $dump): ToolbarInformationInterface
    {

        $_SERVER['VAR_DUMPER'][] = $dump;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function addInfo(string $info): ToolbarInformationInterface
    {

        $_SERVER['CDM_INFORMATION'][] = $info;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function getVarDumper(): array
    {

        return $_SERVER['VAR_DUMPER'] ?? [];

    }

    /**
     * @inheritDoc
     */
    public function getInfo(): array
    {

        return $_SERVER['CDM_INFORMATION'] ?? [];

    }

    /**
     * @inheritDoc
     */
    public function getResponseTime(): int
    {

        $microTime = microtime(true);
        $requestTimeFloat = $_SERVER['REQUEST_TIME_FLOAT'];

        return round(($microTime - $requestTimeFloat) * 1000);

    }

}