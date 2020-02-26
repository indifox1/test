<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../classes/Controller.php';

class UsersController extends Controller
{
    public function index()
    {
        $model = new User();
        $users = $model->all();
        $data = [
            'users' => $users
        ];
        return $this->view('users/index', $data);

    }

    /**
     * bazayic select anel nshvac id-ov article
     *cuyc tal nshvac id-ov article\
     *
     */
    public function show($id)
    {
        $model = new User();

        $user = $model->find($id);
        $data = [
            'user' => $user
        ];

        return $this->view('users/show', $data);
    }

    /**
     *
     * cuyc tal forma vore ksarqi article
     * @return mixed
     */
    public function create()
    {
        return $this->view('users/create');

    }

    /**
     *create formayi submite vore qcum  e nor article bazayi mej
     */
    public function store()
    {
        $data = [
            'name' => $_POST['name'],
        ];
        $model = new User();
        $model->create($data);
        header('location: index');
    }

    /**
     *      * bazayic select anel nshvac id-ov article
     * cuyc tal forma vore kpopoxi nshvac id-ov article e
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $model = new User();
        $users = $model->find($id);
        $data = [
            'users' => $users
        ];
        return $this->view('users/edit', $data);

    }

    /**
     * edit formai submiete vore ktarmacni nshvac id-ov article bazayum
     *     * @param $id
     */
    public function update($id)
    {
        $data = [
            'name' => $_POST['name'],
        ];
        $model = new User();
        $model->update($id, $data);

        header('location: index');

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
        $model = new User();
        $model->delete($id, $data);


        header('location: index');
    }
}