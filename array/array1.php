<?php

class MinhaClasse{

    private $nome;

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }
}

$novo = new MinhaClasse();
$novo->setNome("Minha Class: jose \n");
echo $novo->getNome();



Class Exemplo{

    private $dados = array();

public function getDados(){
    return $this->dados;
}

    public function __get($nome){
        return $this->dados[$nome];

    }
 public function __set($chave, $value){
        $this->dados[$chave] = $value;
    }

}


$tentando = new Exemplo();
$tentando->nome = "Exemplo class: joao";
$tentando->valor = "nem sei se vai dar certo";
$tentando->idade = 30;
$tentando->sexo = "masculino";
$tentando->altura = 1.80;



foreach($tentando->getDados() as $chave => $valor){
    echo "$chave: $valor\n";
}


class ExemploModel extends Model {
    protected $fillable = [
        'nome',
        'valor',
        'idade',
        'sexo',
        'altura',
    ];
}

class ExemploController{

    public function criarExemplo(Request $request){
        $exemplo = new Exemplo();
        $exemplo->nome = $request->input('nome');
        $exemplo->valor = $request->input('valor');
        $exemplo->idade = $request->input('idade');
        $exemplo->sexo = $request->input('sexo');
        $exemplo->altura = $request->input('altura');
        $exemplo->padaria = "padaria é onde vende pão";
        

        ExemploModel::create([
            'nome' => $exemplo->nome,
            'valor' => $exemplo->valor,
            'idade' => $exemplo->idade,
            'sexo' => $exemplo->sexo,
            'altura' => $exemplo->altura,
            'padaria' => $exemplo->padaria
        ]);
        
    }

    public function ExemploDois(Request $request){
        //no caso de ser um update
        $id = $request->input('id');


        $dados = [
            'nome' =>$request->input('nome'),
            'valor' =>$request->input('valor'),
            'idade' =>$request->input('idade'),
            'sexo' =>$request->input('sexo'),
            'altura' =>$request->input('altura'),
        ];

        ExemploModel::create($dados);

        //ou se for um update opcao 1
        $exemplo = ExemploModel::find($id);
        $exemplo->update($dados);


        //ou se for update opcao 2
        ExemploModel::where('id', $id)->update($dados); // busca o id, e atualize a tabela com o id update $dados

        //parece bem simples popular uma array 
        $dados = array(
                    'nome' => $request->input('nome'),
        'valor' => $request->input('valor'),
        'idade' => $request->input('idade'),
        'sexo' => $request->input('sexo'),
        'altura' => $request->input('altura'),
        'padaria' => $request->input('padaria'),

        );

        //depois jogar tudo dentro de uma model com o parametro de create para salvar tudo
        ExemploModel::create($dados);

    }


}
