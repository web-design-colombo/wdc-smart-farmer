<?php
//create enums role
namespace App\Enums;

enum Role: int {
    case user = 0;
    case admin = 1;
    case buyer = 2;
    case farmer = 3;


}
