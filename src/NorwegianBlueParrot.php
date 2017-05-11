<?php

namespace Parrot;

class NorwegianBlueParrot extends CommonParrot {

    /**
     * @{inherited}
     */
    public function getSpeed() {
        return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
    }

    private function getBaseSpeedWith($voltage) {
        return min(24.0, $voltage * Parrot::BASE_SPEED);
    }
}