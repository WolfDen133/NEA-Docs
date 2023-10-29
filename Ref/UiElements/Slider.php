<?php

namespace UIElements;

use raylib\Vector2;
use raylib\Input\Mouse;
use raylib\Vector4;
use raylib\Draw;
use raylib\Color;
use raylib\Rectangle;

class Slider extends UIElement {

    public float $min;
    public float $max;

    public float $sliderOffset;

    private int $alpha = 0;

    public function __construct(float $min, float $max, Vector2 $pos, Vector2 $dimensions, ?float $default = null)
    {
        parent::__construct($pos, $dimensions);

        $this->max = $max;
        $this->min = $min;
        $this->sliderOffset = $this->getDimensions()->getX() * (($default - $min) / ($max - $min)) ?? 0;
    }

    public function handle () : void
    {
        $this->valueChangeHandle();
        $this->draw();
    }

    public function valueChangeHandle () : void
    {
        if ($this->isClicked()) {
            $this->sliderOffset = Mouse::getX() - $this->getOrigin()->getX();

            if ($this->sliderOffset < 0) $this->sliderOffset = 0;
            if ($this->sliderOffset > $this->getDimensions()->getX()) $this->sliderOffset = $this->getDimensions()->getX();
        }
    }

    public function inBoundOfHead (Vector2 $position) : bool
    {
        if ($position->getX() >= $this->getSlideHeadBounds()->x and $position->getX() <= $this->getSlideHeadBounds()->z and $position->getY() >= $this->getSlideHeadBounds()->y and $position->getY() <= $this->getSlideHeadBounds()->w) return true;

        return false;
    }

    public function getSlideHeadBounds () : Vector4
    {
        return new Vector4(($this->getOrigin()->getX() - 5) + $this->sliderOffset, $this->getOrigin()->getY() - 5, ($this->getOrigin()->getX() + 5) + $this->sliderOffset, ($this->getOrigin()->getY() + 5) + $this->getDimensions()->getY());
    }

    public function draw () : void
    {
        Draw::rectangle($this->getOrigin()->getX() - 1, $this->getOrigin()->getY() - 1, $this->getDimensions()->getX() + 2, $this->getDimensions()->getY() + 2, new Color(255, 255, 255, 255));
        Draw::rectangle($this->getOrigin()->getX(), $this->getOrigin()->getY(), $this->getDimensions()->getX(), $this->getDimensions()->getY(), new Color(0, 10, 25, 255));

        if ((Mouse::getX() > $this->getOrigin()->getX() and Mouse::getX() < $this->getOrigin()->getX() + $this->getDimensions()->getX() and Mouse::getY() > $this->getOrigin()->getY() and Mouse::getY() < $this->getOrigin()->getY() + $this->getDimensions()->getY()) or $this->isClicked()) {
            if ($this->alpha < 99) $this->alpha += 10;

            $this->drawGlow();

            Draw::rectangle($this->getOrigin()->getX(), $this->getOrigin()->getY(), $this->getDimensions()->getX(), $this->getDimensions()->getY(), new Color(0, 20, 50, 255 * ($this->alpha / 100)));
        } else if ($this->alpha > 1) {
            $this->alpha -= 10;
            $this->drawGlow();
            Draw::rectangle($this->getOrigin()->getX(), $this->getOrigin()->getY(), $this->getDimensions()->getX(), $this->getDimensions()->getY(), new Color(0, 20, 50, 255 * ($this->alpha / 100)));
        }

        $this->drawSlideHead();
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

    public function drawSlideHead () : void
    {
        Draw::rectangle(($this->getOrigin()->getX() - 5) + $this->sliderOffset, $this->getOrigin()->getY() - 5, 10, $this->getDimensions()->getY() + 10, new Color(255, 255, 255, 255));
        Draw::rectangle(($this->getOrigin()->getX() - 4) + $this->sliderOffset, $this->getOrigin()->getY() - 4, 8, $this->getDimensions()->getY() + 8, new Color(0, 10, 25, 255));

        if ($this->inBoundOfHead(Mouse::getPosition())) {
            Draw::rectangle(($this->getOrigin()->getX() - 6) + $this->sliderOffset, $this->getOrigin()->getY() - 6, 12, $this->getDimensions()->getY() + 12, new Color(255, 255, 255, 255));
            Draw::rectangle(($this->getOrigin()->getX() - 4) + $this->sliderOffset, $this->getOrigin()->getY() - 4, 8, $this->getDimensions()->getY() + 8, new Color(0, 40, 80, 255));
        }

        if ($this->isClicked()) Draw::rectangle(($this->getOrigin()->getX() - 6) + $this->sliderOffset, $this->getOrigin()->getY() - 6, 12, $this->getDimensions()->getY() + 12, new Color(255, 255, 255, 255));
    }

    public function getValue (int $precision = 0) : float
    {
        return round($this->min + (($this->max - $this->min) * ($this->sliderOffset / $this->getDimensions()->getX())), $precision);
    }
}