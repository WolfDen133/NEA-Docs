<?php

namespace UIElements;

use raylib\Color;
use raylib\Draw;
use raylib\Rectangle;
use raylib\Text;
use raylib\Vector2;

class Button extends UIElement
{
    public string $text;
    private int $alpha = 0;

    public function __construct(Vector2 $origin, Vector2 $dimensions, string $text = "")
    {
        parent::__construct($origin, $dimensions);

        $this->text = $text;
    }

    public function handle(): void
    {
        $this->draw();
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

        if ($this->text !== "") {
            $textX = ($this->getOrigin()->getX() + $this->getDimensions()->getX() / 2) - (Text::measure($this->text,$this->getDimensions()->getY() - 6) / 2);

            Text::draw($this->text, $textX, $this->getOrigin()->getY() + 5, $this->getDimensions()->getY() - 6, new Color(255, 255, 255, 255));
        }


        if ($this->isClicked()) {
            Draw::rectangle($this->getOrigin()->getX(), $this->getOrigin()->getY(), $this->getDimensions()->getX(), $this->getDimensions()->getY(), new Color(255, 255, 255, 255));

            if ($this->text !== "") {
                $textX = ($this->getOrigin()->getX() + $this->getDimensions()->getX() / 2) - (Text::measure($this->text,$this->getDimensions()->getY() - 6) / 2);

                Text::draw($this->text, $textX, $this->getOrigin()->getY() + 5, $this->getDimensions()->getY() - 6, new Color(0, 0, 0, 255));
            }
        }
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

    public function getValue(): mixed
    {
        return $this->isClicked();
    }
}