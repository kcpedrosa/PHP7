<?php 

					namespace A;

					class Cliente implements CadastroInterface {
						public $nome = 'John5';
						public function __get($atributo){
							return $this->$atributo;
						}
						public function salvar(){

						}
					}

					interface CadastroInterface {
						public function salvar();

					}

					namespace B;

					class Cliente implements CadastroInterface {
						public $nome = 'Manson';
						public function __get($atributo){
							return $this->$atributo;
						}
						public function salvar(){

						}
					}

					interface CadastroInterface {
						public function salvar();
					}

					$teste = new Cliente();
					print_r($teste);
					echo $teste->__get('nome');
					

?>