<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Articles Controller
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    public function index()
    {
         $this->set('articles', $this->Articles->find('all'));
    }

    public function view($id = null)
    {
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }
    public function add()
    {
        $article = $this->Articles->newEmptyEntity();
        if ($this->request->is('post')) {
            // 3.4.0 より前は $this->request->data() が使われました。
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('記事が保存されました。'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('記事の保存が出来ませんでした。'));
        }
        $this->set('article', $article);
    }
    
}
