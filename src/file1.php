<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: osvgud
 * Date: 2018-10-14
 * Time: 12:58
 */

namespace osvgud;


class Robot extends Machine
{
    // return string value, also callable type with default null value ( override super class method )
    public function speak(callable $func = null): string
    {
        if ($func) {
            return parent::speak($func);
        } else {
            return "<p>Hello i am robot</p>";
        }
    }

    // class with is not in super class, variadic variable
    public function speakrobot(string $text = null, int ...$number): string
    {
        if ($text && $number) {
            return parent::guess() . "<p>" . $text . " and he have " . (string)$this->sum($number) . "</p>";
        } else {
            return parent::guess('Robots dont drink something');
        }
    }

    /** private function
     * @param int[] $list
     * @return int
     */
    private function sum(array $list): int
    {
        $sum = 0;
        foreach ($list as $sk) {
            $sum += $sk;
        }
        return $sum;
    }
}