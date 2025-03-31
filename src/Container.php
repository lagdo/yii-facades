<?php

/**
 * Container.php
 * PSR-11 compatible proxy to the service container
 *
 * @package yii-facades
 * @author Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @copyright 2025 Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @license https://opensource.org/licenses/BSD-3-Clause BSD 3-Clause License
 * @link https://github.com/lagdo/yii-facades
 */

namespace Lagdo\Yii\Facades;

use Psr\Container\ContainerInterface;
use Yii;

class Container implements ContainerInterface
{
    /**
     * @inheritDoc
     */
    public function has(string $serviceId): bool
    {
        return Yii::$container->has($serviceId);
    }

    /**
     * @inheritDoc
     */
    public function get(string $serviceId)
    {
        return Yii::$container->get($serviceId);
    }
}
