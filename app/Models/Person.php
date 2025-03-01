<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    use HasFactory;
    public $timestamps = false;//デフォルトにないのでタイムスタンプは無効化にする。
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150',
        'aaaa' => 'required',
    );
    public function getData()
    {
        return $this->id . ': ' . $this->name . '(' . $this->age . ')' . $this->aaaa;
    }

    /*public function scopeNameEqual($query, $str)///バリデーション処理コードがあるとエラーになるのでコメントアウトする(board.phpで出力するため)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('age', function (Builder $builder) {
            $builder->where('age', '>', 20);
        });
    }

    /*public function board()
    {
        return $this->hasOne('App\Models\board');
    }*///hasOne結合のコード

    public function boards()
    {
        return $this->hasMany('App\Models\Board');
    }
}
