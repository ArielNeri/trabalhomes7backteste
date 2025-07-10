<?php

class StudentDiscountCheckerTest {
    public function runTests() {
        $checker = new StudentDiscountChecker();

        $tests = [
            17 => true,
            18 => true,
            25 => true,
            26 => false,
            30 => false,
            10 => true,
        ];

        foreach ($tests as $age => $expected) {
            $result = $checker->hasStudentDiscount($age);
            $status = $result === $expected ? "✅ Passou" : "❌ Falhou";
            echo "Idade: $age | Esperado: " . ($expected ? 'true' : 'false') . " | Resultado: " . ($result ? 'true' : 'false') . " => $status<br>";
        }
    }
}
