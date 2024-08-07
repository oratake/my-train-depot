<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketGoodsModel extends Model
{
    use HasFactory;

    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'tbl_trains_info';
}
