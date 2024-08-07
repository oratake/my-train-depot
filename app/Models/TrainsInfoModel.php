<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * ユーザが所有する模型の情報
 */
class TrainsInfoModel extends Model
{
    use HasFactory;

    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'tbl_trains_info';

    /**
     * 模型を所持するユーザの取得
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * 市販模型情報の取得
     *
     * @return BelongsTo
     */
    public function marketGoods(): BelongsTo
    {
        return $this->belongsTo(MarketGoodsModel::class, 'market_id', 'id');
    }
}
