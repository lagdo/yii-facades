<?php

/**
 * FacadesFilter.php
 *
 * @package yii-facades
 * @author Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @copyright 2025 Thierry Feuzeu <thierry.feuzeu@gmail.com>
 * @license https://opensource.org/licenses/BSD-3-Clause BSD 3-Clause License
 * @link https://github.com/lagdo/yii-facades
 */

namespace Lagdo\Yii\Facades;

use Lagdo\Facades\ContainerWrapper;
use yii\base\ActionFilter;

class FacadesFilter extends ActionFilter
{
    /**
     * @inheritDoc
     */
    public function beforeAction($action)
    {
        ContainerWrapper::setContainer(new Container());

        return parent::beforeAction($action);
    }
}
