<?php

namespace Dell\Pph21;

class FourthRuleCalculator extends AbstractCalculator {
    public function maxPkp(): float {
        return 100000000000000000000000000000000000000;
    }

    public function minPkp(): float {
        return 500000000;
    }

    public function taxPercentage(): float {
        return 0.3;
    }
}