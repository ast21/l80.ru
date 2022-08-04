<?php

declare(strict_types=1);

namespace App\Orchid\Fields;

use Orchid\Screen\Field;

/**
 * Class Interpreter.
 *
 * @method Interpreter accesskey($value = true)
 * @method Interpreter autofocus($value = true)
 * @method Interpreter cols($value = true)
 * @method Interpreter disabled($value = true)
 * @method Interpreter form($value = true)
 * @method Interpreter maxlength(int $value)
 * @method Interpreter name(string $value = null)
 * @method Interpreter placeholder(string $value = null)
 * @method Interpreter readonly($value = true)
 * @method Interpreter required(bool $value = true)
 * @method Interpreter rows(int $value)
 * @method Interpreter tabindex($value = true)
 * @method Interpreter wrap($value = true)
 * @method Interpreter help(string $value = null)
 * @method Interpreter max(int $value)
 * @method Interpreter popover(string $value = null)
 * @method Interpreter title(string $value = null)
 */
class Interpreter extends Field
{
    /**
     * @var string
     */
    protected $view = 'fields.interpreter';

    /**
     * Default attributes value.
     *
     * @var array
     */
    protected $attributes = [
        'class' => 'form-control no-resize',
        'value' => null,
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    protected $inlineAttributes = [
        'accesskey',
        'autofocus',
        'cols',
        'disabled',
        'form',
        'maxlength',
        'name',
        'placeholder',
        'readonly',
        'required',
        'rows',
        'tabindex',
        'wrap',
    ];
}
