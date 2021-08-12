<?php

namespace Codememory\Component\Toolbar\Interfaces;

/**
 * Interface ToolbarInformationInterface
 *
 * @package Codememory\Component\Toolbar\Interfaces
 *
 * @author  Codememory
 */
interface ToolbarInformationInterface
{

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Add dump result to toolbar under "Dump" section
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $dump
     *
     * @return ToolbarInformationInterface
     */
    public function addVarDump(string $dump): ToolbarInformationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Add new information to the toolbar in the "Information" section
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $info
     *
     * @return ToolbarInformationInterface
     */
    public function addInfo(string $info): ToolbarInformationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Recovers all caused dumps
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return array
     */
    public function getVarDumper(): array;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns all the toolbar information of the "Information" section
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return array
     */
    public function getInfo(): array;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns response time in milliseconds
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return int
     */
    public function getResponseTime(): int;

}