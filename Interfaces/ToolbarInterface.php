<?php

namespace Codememory\Component\Toolbar\Interfaces;

/**
 * Interface ToolbarInterface
 *
 * @package Codememory\Component\Toolbar\Interfaces
 *
 * @author  Codememory
 */
interface ToolbarInterface
{

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Set your toolbar template
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @param string $path
     *
     * @return ToolbarInterface
     */
    public function setTemplatePath(string $path): ToolbarInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Returns the information object for the toolbar
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return ToolbarInformationInterface
     */
    public function getToolbarInfo(): ToolbarInformationInterface;

    /**
     * =>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>
     * Connects and displays the toolbar template
     * <=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=<=
     *
     * @return void
     */
    public function connectToolbar(): void;

}