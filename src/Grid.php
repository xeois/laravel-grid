<?php

namespace LaravelGrid;

use Illuminate\Support\Facades\Facade;

class Grid extends Facade
{
    /**
     * Generate a bootstrap grid.
     *
     * @param int $columns
     * @param array $data
     * @return string
     */
    public static function make($columns, $data)
    {
        $html = '<div class="row">';
        $count = count($data);
        $rows = ceil($count / $columns);

        for ($row = 0; $row < $rows; $row++) {
            for ($col = 0; $col < $columns; $col++) {
                $index = $col + ($row * $columns);
                if ($index >= $count) {
                    break;
                }

                $html .= '<div class="col-md-' . (12 / $columns) . '">' . $data[$index] . '</div>';
            }
        }

        $html .= '</div>';

        return $html;
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'grid';
    }
}
