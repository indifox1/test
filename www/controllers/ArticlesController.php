<?php
require_once __DIR__ . '/../models/Article.php';
require_once __DIR__ . '/../classes/Controller.php';

class ArticlesController extends Controller
{
    /**
     * bazayic select anel bolor aarticlnere
     * cuyc tal bolor articlnere
     *
     * @return mixed
     */
    public function index()
    {
        $model = new Article();
        $articles = $model->all();
        $data = [
            'articles' => $articles
        ];

        return $this->view('articles/index', $data);
    }

    /**
     * bazayic select anel nshvac id-ov article
     *cuyc tal nshvac id-ov article\
     *
     */
    public function show($id)
    {
        $model = new Article();
        $article = $model->find($id);
        $data = [
            'article' => $article
        ];

        return $this->view('articles/show', $data);
    }

    /**
     *
     * cuyc tal forma vore ksarqi article
     * @return mixed
     */
    public function create()
    {
        return $this->view('articles/create');

    }

    /**
     *create formayi submite vore qcum  e nor article bazayi mej
     */
    public function store()
    {
        $data = [
            'name' => $_POST['name'],
            'published' => $_POST['published']
        ];
        $model = new Article();
        $model->create($data);

        return redirect('/articles/index');
    }

    /**
     *      * bazayic select anel nshvac id-ov article
     * cuyc tal forma vore kpopoxi nshvac id-ov article e
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $model = new Article();
        $article = $model->find($id);

        $data = [
            'article' => $article
        ];

        return $this->view('articles/edit', $data);

    }

    /**
     * edit formai submiete vore ktarmacni nshvac id-ov article bazayum
     *     * @param $id
     */
    public function update($id)
    {
        $data = [
            'name' => $_POST['name'],
            'published' => $_POST['published']
        ];
        $model = new Article();
        $model->update($id, $data);

        return redirect('/articles/index');

    }

    /**
     * submit vore kjnji nshvac id-ov article bazayic
     * @param $id
     */
    public function destroy($id)
    {
        $data = [
            'name' => $_POST['name'],
            'published' => $_POST['published']
        ];
        $model = new Article();
        $model->delete($id, $data);

        return redirect('/articles/index');
    }
}
