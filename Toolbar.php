<?php

namespace Codememory\Component\Toolbar;

use Codememory\Component\Toolbar\Interfaces\ToolbarInterface;
use JetBrains\PhpStorm\Pure;

/**
 * Class Toolbar
 *
 * @package Codememory\Component\Toolbar
 *
 * @author  Codememory
 */
class Toolbar implements ToolbarInterface
{

    private const DEFAULT_TEMPLATE = 'Resources/templates/default.php';

    /**
     * @var ToolbarInformation
     */
    private ToolbarInformation $toolbarInfo;

    /**
     * @var string
     */
    private string $templatePath;

    /**
     * Toolbar Construct
     */
    #[Pure]
    public function __construct()
    {

        $this->toolbarInfo = new ToolbarInformation();
        $this->templatePath = sprintf('%s/%s', __DIR__, self::DEFAULT_TEMPLATE);


    }

    /**
     * @inheritDoc
     */
    public function setTemplatePath(string $path): Toolbar
    {

        $this->templatePath = $path;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function getToolbarInfo(): ToolbarInformation
    {

        return $this->toolbarInfo;

    }

    /**
     * @inheritDoc
     */
    public function connectToolbar(): void
    {

        require_once $this->templatePath;

    }

}