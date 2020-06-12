<?php 
		namespace A;

//write that way : class Cliente implements \B\CadastroInterface {
				//and you will load the interface of namespace B
					class Cliente implements CadastroInterface {
						public $nome = 'John5';

						public function __construct(){
							echo '<pre>';
							print_r(get_class_methods($this));
							echo '</pre>';
						}

						public function __get($atributo){
							return $this->$atributo;
						}
						public function salvar(){
							echo ' Salvar --';
						}
						//remover added because we tested implements \B\CadastroInterface
						public function remover(){
							echo ' Remover --';
						}
					}

					interface CadastroInterface {
						public function salvar();

					}

					

 ?>