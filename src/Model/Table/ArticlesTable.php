namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
    public function someMethod()
{
    $resultset = $this->fetchTable('Articles')->find()->all();

    foreach ($resultset as $row) {
        echo $row->title;
    }
}
}