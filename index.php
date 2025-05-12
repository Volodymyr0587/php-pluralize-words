<?php

class Pluralizer
{
    /**
     * Повертає рядок з кількістю і правильно відміненим словом "день"
     *
     * @param int $number
     * @return string
     */
    public static function pluralize(int $number): string
    {
        $absNumber = abs($number);
        $lastDigit = $absNumber % 10;
        $lastTwoDigits = $absNumber % 100;

        if ($lastTwoDigits >= 11 && $lastTwoDigits <= 14) {
            $word = 'днів';
        } else {
            switch ($lastDigit) {
                case 1:
                    $word = 'день';
                    break;
                case 2:
                case 3:
                case 4:
                    $word = 'дня';
                    break;
                default:
                    $word = 'днів';
            }
        }

        return "$number $word";
    }
}


echo Pluralizer::pluralize(1);    // 1 день
echo Pluralizer::pluralize(2);    // 2 дня
echo Pluralizer::pluralize(5);    // 5 днів
echo Pluralizer::pluralize(21);   // 21 день
echo Pluralizer::pluralize(1002); // 1002 дня

