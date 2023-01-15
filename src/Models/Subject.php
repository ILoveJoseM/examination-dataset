<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 1/8/23
 * Time: 9:48 AM
 */

namespace JoseChan\Examination\DataSet\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Subject
 * @package JoseChan\Examination\DataSet\Models
 * @property string $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class Subject extends Model
{
    /**
     * @return array
     */
    public static function getOptions()
    {
        return self::all()->pluck("name", "id")->toArray();
    }
}
