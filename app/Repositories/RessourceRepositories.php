<?php
namespace App\Repositories;

class RessourceRepositories{

    protected $models;

    public function getPaginate($n)
    {
        return $this->models->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->models->create($inputs);
    }
    public function getById($id)
    {
        return $this->models->findOrFail($id);
    }
    public function update($id, Array $inputs)
    {
        $this->getById($id)->update($inputs);
    }
    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}
