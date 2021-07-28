<?php

namespace Iskandarali\MykadValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class Mykad implements Rule
{
    /** @var string */
    protected $attribute;
    protected $value;

    public function passes($attribute, $value): bool
    {
        $this->attribute = $attribute;
        $this->value = $value;

        if (strlen($value) !== 12) {
            return false;
        }

        $year = substr($value, 0, 2);
        $month = substr($value, 2, 2);
        $date = substr($value, 4, 2);
        $last = substr($value, 8, 4);

        if ($last > "4999") {
            $tahuncetak = "19".$year;
            if ($tahuncetak < '19'.date('y')) {
                return false;
            }
        } elseif ($last <= "4999") {
            $tahuncetak = "20".$year;
            if ($tahuncetak > date('Y')) {
                return false;
            }
        }

        $myString = $tahuncetak.'-'.$month.'-'.$date;
        if (date('Y-m-d', strtotime($myString)) != $myString) {
            return false;
        }

        return true;
    }

    public function message(): string
    {
        return __('mykadRules::messages.mykad', [
            'attribute' => $this->attribute,
        ]);
    }
}
