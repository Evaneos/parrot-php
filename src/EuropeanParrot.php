<?php

namespace Parrot;

class EuropeanParrot implements Parrot {

    /**
     * @{inherited}
     */
    public function getSpeed() {
        return Parrot::BASE_SPEED;
    }
}