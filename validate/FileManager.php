<?php

/**
 * Gerencia todas as validações a serem feita a um arquivo
 */
class FileManager {

	private $validators = array();

	public function attach( Validator $validator ) {
		$this->validators[] = $validator;
	}

	public function validate( $file ) {
		foreach ($this->validators as $v) {
			$v->validate($file);
		}
	}

}