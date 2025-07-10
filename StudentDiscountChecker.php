<?php

class StudentDiscountChecker {
    public function hasStudentDiscount(int $age): bool {
        return $age <= 25;
    }
}
