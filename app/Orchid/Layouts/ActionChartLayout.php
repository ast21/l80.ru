<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Chart;

class ActionChartLayout extends Chart
{
    protected $type = self::TYPE_LINE;
    protected $target = 'actions';
    protected $export = false;
}
