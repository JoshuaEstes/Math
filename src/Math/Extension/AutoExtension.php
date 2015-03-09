<?php
/**
 */

namespace Math\Extension;

/**
 * This extension will auto pick the best extension for you and use
 * that as your extension math class
 */
class AutoExtension implements ExtensionInterface
{
    /**
     * @var array
     */
    protected $extensions;

    /**
     */
    public function __construct()
    {
        $this->extensions = array(
            new GmpExtension(),
            new BcMathExtension(),
        );
    }

    public function isAvailable()
    {
        foreach ($this->extensions as $ext) {
            if ($ext->isAvailable()) {
                return true;
            }
        }

        return false;
    }

    public function add($left, $right)
    {
        foreach ($this->extensions as $ext) {
            if ($ext->isAvailable()) {
                return $ext->add($left, $right);
            }
        }

        throw new \Exception('There are no extensions available.');
    }

    public function subtract($left, $right)
    {
        foreach ($this->extensions as $ext) {
            if ($ext->isAvailable()) {
                return $ext->subtract($left, $right);
            }
        }

        throw new \Exception('There are no extensions available.');
    }

    public function multiply($left, $right)
    {
        foreach ($this->extensions as $ext) {
            if ($ext->isAvailable()) {
                return $ext->multiply($left, $right);
            }
        }

        throw new \Exception('There are no extensions available.');
    }

    public function divide($left, $right)
    {
        foreach ($this->extensions as $ext) {
            if ($ext->isAvailable()) {
                return $ext->divide($left, $right);
            }
        }

        throw new \Exception('There are no extensions available.');
    }

    public function compare($left, $right)
    {
        foreach ($this->extensions as $ext) {
            if ($ext->isAvailable()) {
                return $ext->compare($left, $right);
            }
        }

        throw new \Exception('There are no extensions available.');
    }
}
