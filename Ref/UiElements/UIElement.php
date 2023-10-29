<?php

namespace UIElements;

use raylib\Vector2;
use raylib\Input\Mouse;

abstract class UIElement {
    private Vector2 $origin;
    private Vector2 $dimensions;

    private bool $isClicked = false;

    public function __construct(Vector2 $origin, Vector2 $dimensions)
    {
        $this->origin = $origin;
        $this->dimensions= $dimensions;
    }

    abstract public function handle () : void;

    abstract public function getValue () : mixed;

    public function inBounds () : bool
    {
        if (Mouse::getX() > self::getOrigin()->getX() and Mouse::getX() < self::getOrigin()->getX() + self::getDimensions()->getX() and Mouse::getY() > self::getOrigin()->getY() and Mouse::getY() < self::getOrigin()->getY() + self::getDimensions()->getY()) return true;

        return false;
    }

    public function isClicked () : bool
    {
        if (Mouse::isButtonDown(Mouse::LEFT_BUTTON) and $this->inBounds()
            or
            $this->isClicked and Mouse::isButtonDown(Mouse::LEFT_BUTTON)
        ) {
            $this->isClicked = true;
            return true;
        } else $this->isClicked = false;

        return  false;
    }

    /**
     * @return Vector2
     */
    public function getOrigin () : Vector2
    {
        return $this->origin;
    }

    /**
     * @return Vector2
     */
    public function getDimensions(): Vector2
    {
        return $this->dimensions;
    }
}