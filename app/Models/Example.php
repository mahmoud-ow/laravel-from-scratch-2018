<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    protected $foo;

    public function __construct(Foo $foo) {
        $this->foo = $foo;
    }
}
