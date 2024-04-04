<?php
//create enums role
namespace App\Enums;

enum Role: int {
    case user = 0;
    case admin = 2;
    case editor = 1;
}
