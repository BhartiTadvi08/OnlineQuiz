<?php 
namespace App\Repositories;

interface PostRepositoryInterface
{
    public function index();

    public function store($arr);

    public function edit($id);

    public function update($id,$array);

    public function show($id);

    public function delete($id);

}