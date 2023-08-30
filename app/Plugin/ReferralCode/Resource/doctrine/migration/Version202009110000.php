<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * 本変更ではplg_referral_code_config.tax_excluded_delivery_free_amountを税込のフィールドに名称変更する。
 * Eccube4ではEntityの定義を変えれば勝手にマイグレーションしてくれるので
 * このクラスは必要ないが、一応履歴として残しておく。
 */
final class Version202009110000 extends AbstractMigration
{
    /**
     * @var string
     */
    const REFERRAL_CODE_CONFIG = 'plg_referral_code_config';

    public function up(Schema $schema) : void
    {
        $table = $schema->getTable(self::REFERRAL_CODE_CONFIG);
        if ($table->hasColumn('tax_excluded_delivery_free_amount')) {
            $this->addSql('alter table '.self::REFERRAL_CODE_CONFIG.' change column tax_excluded_delivery_free_amount delivery_free_amount decimal(10,0) unsigned not null');
        }
    }

    public function down(Schema $schema) : void
    {
        $table = $schema->getTable(self::REFERRAL_CODE_CONFIG);
        if ($table->hasColumn('delivery_free_amount')) {
            $this->addSql('alter table '.self::REFERRAL_CODE_CONFIG.' change column delivery_free_amount tax_excluded_delivery_free_amount decimal(10,0) unsigned not null');
        }
    }
}
