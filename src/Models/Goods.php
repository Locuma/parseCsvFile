<?php

namespace app\Models;

class Goods
{
    public ?string $code = null;
    public ?string $name = null;
    public ?string $level_one = null;
    public ?string $level_two = null;
    public ?string $level_three = null;
    public ?float $price = null;
    public ?string $price_sp = null;
    public ?float $amount = null;
    public ?string $properties_fields = null;
    public ?bool $group_buy = null;
    public ?string $measure = null;
    public ?string $image = null;
    public bool $main_display = false;
    public ?string $description = null;
}