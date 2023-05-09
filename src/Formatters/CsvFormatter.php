<?php

namespace app\Formatters;

use app\Models\Goods;

class CsvFormatter
{
    /**
     * @param array $csvArray
     * @return Goods[]
     */
    public function fillGoods(array $csvArray): array
    {
        $csvCollection= [];

        foreach ($csvArray as $row) {
            $csvModel = new Goods();

            $csvModel->code = $row[0] ?? null;
            $csvModel->name = $row[1] ?? null;
            $csvModel->level_one = $row[2] ?? null;
            $csvModel->level_two = $row[3] ?? null;
            $csvModel->level_three = $row[4] ?? null;

            if (is_numeric($row[5])){
                $csvModel->price = (float)$row[5];
            }

            $csvModel->price_sp = $row[6] ?? null;
            if (is_numeric($row[7])){
                $csvModel->amount = $row[7];
            }
            $csvModel->properties_fields = $row[8] ?? null;
            $csvModel->group_buy = $row[9] ?? null;
            $csvModel->measure = $row[10] ?? null;
            $csvModel->image = $row[11] ?? null;

            if (filter_var($row[12], FILTER_VALIDATE_BOOLEAN) !== false && filter_var($row[12], FILTER_VALIDATE_BOOLEAN) !== null) {
                $csvModel->main_display = $row[12];
            }

            $csvModel->description = $row[13] ?? null;

            $csvCollection[] = $csvModel;
        }

        return $csvCollection;
    }
}