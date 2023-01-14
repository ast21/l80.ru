<?php

declare(strict_types=1);

namespace App\Orchid\Fields;

use Orchid\Screen\Concerns\Multipliable;
use Orchid\Screen\Field;

/**
 * Class Input.
 *
 * @method Cmd accept($value = true)
 * @method Cmd accesskey($value = true)
 * @method Cmd autocomplete($value = true)
 * @method Cmd autofocus($value = true)
 * @method Cmd checked($value = true)
 * @method Cmd disabled($value = true)
 * @method Cmd form($value = true)
 * @method Cmd formaction($value = true)
 * @method Cmd formenctype($value = true)
 * @method Cmd formmethod($value = true)
 * @method Cmd formnovalidate($value = true)
 * @method Cmd formtarget($value = true)
 * @method Cmd max(int $value)
 * @method Cmd maxlength(int $value)
 * @method Cmd min(int $value)
 * @method Cmd minlength(int $value)
 * @method Cmd name(string $value = null)
 * @method Cmd pattern($value = true)
 * @method Cmd placeholder(string $value = null)
 * @method Cmd readonly($value = true)
 * @method Cmd required(bool $value = true)
 * @method Cmd size($value = true)
 * @method Cmd src($value = true)
 * @method Cmd step($value = true)
 * @method Cmd tabindex($value = true)
 * @method Cmd type($value = true)
 * @method Cmd value($value = true)
 * @method Cmd help(string $value = null)
 * @method Cmd popover(string $value = null)
 * @method Cmd mask($value = true)
 * @method Cmd title(string $value = null)
 * @method Cmd inputmode(string $value = null)
 */
class Cmd extends Field
{
    use Multipliable;

    /**
     * @var string
     */
    protected $view = 'fields.cmd';

    /**
     * Default attributes value.
     *
     * @var array
     */
    protected $attributes = [
        'class' => 'form-control',
        'datalist' => [],
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    protected $inlineAttributes = [
        'accept',
        'accesskey',
        'autocomplete',
        'autofocus',
        'checked',
        'disabled',
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'list',
        'max',
        'maxlength',
        'min',
        'minlength',
        'name',
        'pattern',
        'placeholder',
        'readonly',
        'required',
        'size',
        'src',
        'step',
        'tabindex',
        'type',
        'value',
        'mask',
        'inputmode',
    ];

    /**
     * Input constructor.
     */
    public function __construct()
    {
        $this->addBeforeRender(function () {
            $mask = $this->get('mask');

            if (is_array($mask)) {
                $this->set('mask', json_encode($mask));
            }
        });
    }

    /**
     * @param array $datalist
     *
     * @return Cmd
     */
    public function datalist(array $datalist = []): self
    {
        if (empty($datalist)) {
            return $this;
        }

        $this->set('datalist', $datalist);

        return $this->addBeforeRender(function () {
            $this->set('list', 'datalist-' . $this->get('name'));
        });
    }
}
