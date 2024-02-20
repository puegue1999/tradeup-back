<?php
namespace App\Interfaces;

interface CepInterface {
	public function index();
	public function store($data);
	public function show($id);
	public function update($data, $id);
	public function destroy($id);
}