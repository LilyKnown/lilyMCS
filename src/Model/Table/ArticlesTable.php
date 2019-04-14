namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extend Table
{
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');
  }
}
