<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 1/8/23
 * Time: 9:54 AM
 */

namespace JoseChan\Examination\DataSet\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Examination
 * @package JoseChan\Examination\DataSet\Models
 * @property string $id
 * @property string $start_time
 * @property string $end_time
 * @property string $name
 * @property string $exam_time
 * @property string $created_at
 * @property string $updated_at
 */
class Examination extends Model
{
    public function getExamTimeAttribute(){
        $examTime = $this->attributes['exam_time'];
//        $examTime = $this->getOriginal("exam_time");
        $minuts = floor($examTime / 60);

        if ($minuts < 10) {
            $minuts = "0" . $minuts;
        }

        return $minuts;
    }
}
