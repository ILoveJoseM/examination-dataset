<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 1/8/23
 * Time: 9:53 AM
 */

namespace JoseChan\Examination\DataSet\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * @package JoseChan\Examination\DataSet\Models
 * @property string $id
 * @property string $question_bank_id
 * @property string $type
 * @property string $content
 * @property string $description
 * @property string $options
 * @property string $answer
 * @property string $created_at
 * @property string $updated_at
 */
class Question extends Model
{
    const TYPE_SINGLE = 1;
    const TYPE_MULTI = 2;
    const TYPE_JUDGE = 3;

    const TYPE_NAME = [
        self::TYPE_SINGLE => "单选题",
        self::TYPE_MULTI => "多选题",
        self::TYPE_JUDGE=> "判断题"
    ];

    const TYPE_SORT_NAME = [
        self::TYPE_SINGLE => "一、",
        self::TYPE_MULTI => "二、",
        self::TYPE_JUDGE=> "三、"
    ];
}
