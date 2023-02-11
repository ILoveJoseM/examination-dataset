<?php
/**
 * Created by PhpStorm.
 * User: chenyu
 * Date: 1/8/23
 * Time: 9:56 AM
 */

namespace JoseChan\Examination\DataSet\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class PaperQuestion
 * @package JoseChan\Examination\DataSet\Models
 * @property string $id
 * @property string $paper_id
 * @property string $type
 * @property string $content
 * @property string $description
 * @property string $options
 * @property string $answer
 * @property string $score
 * @property string $created_at
 * @property string $updated_at
 */
class PaperQuestion extends Model
{

    protected $fillable = [
        "id",
        "paper_id",
        "type",
        "content",
        "description",
        "options",
        "answer",
        "score",
        "created_at",
        "updated_at",
    ];

    public function getOptionsAttribute()
    {
        $original = $this->getRawOriginal("options");
        $options = json_decode($original, true);
        return is_null($options) ? $original : $options;
    }
}
