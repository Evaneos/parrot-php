<?php

namespace Parrot;

class EuropeanParrot extends CommonParrot {

    /**
     * @{inherited}
     */
    public function getSpeed() {
        return Parrot::BASE_SPEED;
    }
}