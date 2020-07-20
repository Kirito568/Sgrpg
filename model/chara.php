<?php
require_once('model.php');

/**
 * Charaモデル
 *
 * @version 1.0.0
 * @author  M.Katsube <katsubemakito@gmail.com>
 */
class CharaModel extends Model{
  protected $tableName = 'Chara';  // 対象テーブル
  private $defaultValue = [
    ['id'=>':charaid',    'value'=>null,    'type'=>PDO::PARAM_INT],
    ['name'=>':name', 'value'=>null, 'type'=>PDO::PARAM_STR]
  ];
  protected  $charaname = 'SELECT name from Chara WHERE id in(:charaid)';
}
