<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * 抽象クラスと具象クラスの結合
     * [
     *   抽象クラス => 具象クラス
     * ]
     *
     * @var array
     */
    public array $bindings = [
        
    ];

    /**
     * DIコンテナ内でのシングルトンで解決
     *　$bindingsの結合をシングルトンパターンで解決する
     * @var array
     */
    public array $singletons = [];
}
