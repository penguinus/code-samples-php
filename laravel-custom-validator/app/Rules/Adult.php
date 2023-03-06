<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Adult implements ValidationRule
{
    protected $minAge;
    
    public function __construct(int $minAge = 21)
    {
        $this->minAge = $minAge;
    }
    
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($value < $this->minAge) {
            $fail(__('Sorry, you should be :age or more.', ['age' => $this->minAge]));
        }
    }
}
