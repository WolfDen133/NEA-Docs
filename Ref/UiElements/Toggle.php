<?php

namespace UIElements;

require "UIElement.php";

use raylib\Color;
use raylib\Draw;
use raylib\Input\Mouse;
use raylib\Rectangle;
use raylib\Vector2;
use raylib\Vector4;
use raylib\Window;

class Toggle extends UIElement {

    private bool $value;

    private int $xOffset = 0;

    private int $alpha = 0;

    public function __construct(Vector2 $pos, bool $default = false)
    {
        $this->value = $default;

        parent::__construct($pos, new Vector2(80, 40));
    }

    /**
     * @return bool
     */
    public function getValue(): bool
    {
        return $this->value;
    }

    public function handle(): void
    {
        $this->handleValueChange();
        $this->draw();
    }

    public function handleValueChange () : void
    {
        if ($this->isClicked()) {
            if (Mouse::isButtonPressed(Mouse::LEFT_BUTTON)) $this->value = !$this->value;
        }

        if ($this->value) {
            if ($this->xOffset < 50) $this->xOffset += 10;
        } else if ($this->xOffset > 0) $this->xOffset -= 10;
    }

    public function draw () : void
    {
        Draw::rectangle($this->getOrigin()->getX() - 1, $this->getOrigin()->getY() - 1, $this->getDimensions()->getX() + 2, $this->getDimensions()->getY() + 2, new Color(255, 255, 255, 255));
        Draw::rectangle($this->getOrigin()->getX(), $this->getOrigin()->getY(), $this->getDimensions()->getX(), $this->getDimensions()->getY(), new Color(0, 10, 25, 255));

        if ($this->inBounds()) {
            if ($this->alpha < 100) $this->alpha += 10;

            $this->drawGlow();
            Draw::rectangle($this->getOrigin()->getX(), $this->getOrigin()->getY(), $this->getDimensions()->getX(), $this->getDimensions()->getY(), new Color(0, 20, 50, 255 * ($this->alpha / 100)));

        } else if ($this->alpha > 0) {
            $this->alpha -= 10;
            $this->drawGlow();

            Draw::rectangle($this->getOrigin()->getX(), $this->getOrigin()->getY(), $this->getDimensions()->getX(), $this->getDimensions()->getY(), new Color(0, 20, 50, 255 * ($this->alpha / 100)));

        }

        $this->drawToggleHead();
    }

    public function drawGlow () : void
    {
        Draw::rectangleGradientV($this->getOrigin()->getX(), $this->getOrigin()->getY() - 10, $this->getDimensions()->getX(), 10, new Color(255, 255, 255, 0), new Color(255, 255, 255, 255 * ($this->alpha / 100)));
        Draw::rectangleGradientV($this->getOrigin()->getX(), $this->getOrigin()->getY() + $this->getDimensions()->getY(), $this->getDimensions()->getX(), 10, new Color(255, 255, 255, 255 * ($this->alpha / 100)), new Color(255, 255, 255, 0));
        Draw::rectangleGradientH($this->getOrigin()->getX() - 10, $this->getOrigin()->getY(), 10, $this->getDimensions()->getY(), new Color(255, 255, 255, 0), new Color(255, 255, 255, 255 * ($this->alpha / 100)));
        Draw::rectangleGradientH($this->getOrigin()->getX() + $this->getDimensions()->getX(), $this->getOrigin()->getY(), 10, $this->getDimensions()->getY(), new Color(255, 255, 255, 255 * ($this->alpha / 100)), new Color(255, 255, 255, 0));

        Draw::rectangleGradientEx(new Rectangle($this->getOrigin()->getX() - 10, $this->getOrigin()->getY() - 10, 10, 10), new Color(255, 255, 255, 0), new Color(255, 255, 255, 0), new Color(255, 255, 255, 255 * ($this->alpha / 100)), new Color(255, 255, 255, 0));
        Draw::rectangleGradientEx(new Rectangle($this->getOrigin()->getX() + $this->getDimensions()->getX(), $this->getOrigin()->getY() - 10, 10, 10), new Color(255, 255, 255, 0), new Color(255, 255, 255, 255 * ($this->alpha / 100)), new Color(255, 255, 255, 0), new Color(255, 255, 255, 0));
        Draw::rectangleGradientEx(new Rectangle($this->getOrigin()->getX() - 10, $this->getOrigin()->getY() + $this->getDimensions()->getY(), 10, 10), new Color(255, 255, 255, 0), new Color(255, 255, 255, 0), new Color(255, 255, 255, 0), new Color(255, 255, 255, 255 * ($this->alpha / 100)));
        Draw::rectangleGradientEx(new Rectangle($this->getOrigin()->getX() + $this->getDimensions()->getX(), $this->getOrigin()->getY() + $this->getDimensions()->getY(), 10, 10), new Color(255, 255, 255, 255 * ($this->alpha / 100)), new Color(255, 255, 255, 0), new Color(255, 255, 255, 0), new Color(255, 255, 255, 0));
    }

    public function inBoundOfHead (Vector2 $position) : bool
    {
        if ($position->getX() >= $this->getSlideHeadBounds()->x and $position->getX() <= $this->getSlideHeadBounds()->z and $position->getY() >= $this->getSlideHeadBounds()->y and $position->getY() <= $this->getSlideHeadBounds()->w and $position->getY() <= $this->getOrigin()->getY() + $this->getDimensions()->getY()) return true;

        return false;
    }

    public function getSlideHeadBounds () : Vector4
    {
        return new Vector4(($this->getOrigin()->getX() + 4) + $this->xOffset, $this->getOrigin()->getY() + 4, $this->getOrigin()->getX() + $this->xOffset + 22, $this->getOrigin()->getY() + $this->xOffset + 32);
    }


    private function drawToggleHead () : void
    {
        Draw::rectangle(($this->getOrigin()->getX() + 4) + $this->xOffset, $this->getOrigin()->getY() + 4, 22, 32, new Color(255, 255, 255, 255));
        Draw::rectangle(($this->getOrigin()->getX() + 5) + $this->xOffset, $this->getOrigin()->getY() + 5, 20, 30, new Color(0, 10, 25, 255));

        if ($this->inBoundOfHead(Mouse::getPosition())) {
            Draw::rectangle(($this->getOrigin()->getX() + 3) + $this->xOffset, $this->getOrigin()->getY() + 3, 24, 34, new Color(255, 255, 255, 255));
            Draw::rectangle(($this->getOrigin()->getX() + 5) + $this->xOffset, $this->getOrigin()->getY() + 5, 20, 30, new Color(0, 40, 80, 255));
        }
    }
}