<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelscaleTypeModel extends Model
{
    use HasFactory;

    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'mst_modelscale_type';
}
