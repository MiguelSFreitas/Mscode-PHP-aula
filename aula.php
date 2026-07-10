<?php
/**
 * GUIA COMPLETO DE PHP PARA QUEM JÁ DOMINA PYTHON
 * * Principais diferenças conceituas que você vai notar:
 * 1. PHP usa ponto e vírgula (;) no final de quase todas as linhas.
 * 2. PHP usa chaves { } para blocos de código (em vez da indentação do Python).
 * 3. Todas as variáveis no PHP começam com o cifrão ($).
 */

// ---------------------------------------------------------------------
// 1. SAÍDA DE DADOS (O "print" do Python)
// ---------------------------------------------------------------------
// Python: print("Olá, Mundo!")
echo "Olá, Mundo!\n"; 

// Também existe a função print(), mas echo é o padrão mais usado.
print("Isso também funciona.\n");


// ---------------------------------------------------------------------
// 2. VARIÁVEIS E TIPOS DE DADOS
// ---------------------------------------------------------------------
// Python: nome = "Carlos" | idade = 25
$nome = "Carlos";      // String
$idade = 25;           // Integer
$altura = 1.75;        // Float
$programador = true;   // Boolean (true/false em minúsculo)

// Concatenação de Strings:
// Python: print("Nome: " + nome) ou f"Nome: {nome}"
// PHP usa o PONTO (.) para juntar strings, ou aceita variáveis dentro de aspas duplas.
echo "Nome: " . $nome . " | Idade: " . $idade . "\n";
echo "Usando aspas duplas: Meu nome é $nome\n"; // Interpolação automática


// ---------------------------------------------------------------------
// 3. ESTRUTURAS CONDICIONAIS (if, elif, else)
// ---------------------------------------------------------------------
/*
Python:
if idade >= 18:
    print("Maior de idade")
elif idade == 17:
    print("Quase lá")
else:
    print("Menor de idade")
*/
if ($idade >= 18) {
    echo "Maior de idade\n";
} elseif ($idade == 17) { // Note que "elseif" é junto no PHP
    echo "Quase lá\n";
} else {
    echo "Menor de idade\n";
}


// ---------------------------------------------------------------------
// 4. LISTAS E DICIONÁRIOS (Arrays no PHP)
// ---------------------------------------------------------------------
// No PHP, tanto Listas quanto Dicionários são chamados de "Arrays".

// Exemplo 1: Lista (Array Indexado)
// Python: frutas = ["Maçã", "Banana", "Uva"]
$frutas = ["Maçã", "Banana", "Uva"];
echo "Primeira fruta: " . $frutas[0] . "\n"; // Acesso por índice igual ao Python

// Exemplo 2: Dicionário (Array Associativo)
/*
Python:
usuario = {
    "nome": "Ana",
    "nivel": "Sênior"
}
*/
$usuario = [
    "nome" => "Ana",      // Usa a seta => para atribuir a chave/valor
    "nivel" => "Sênior"
];
echo "Nível da usuária: " . $usuario["nivel"] . "\n";


// ---------------------------------------------------------------------
// 5. REPETIÇÕES (Loops / For / While)
// ---------------------------------------------------------------------

// Loop FOR tradicional (Baseado no C, diferente do range do Python)
// Inicialização; Condição de parada; Incremento
for ($i = 0; $i < 3; $i++) {
    echo "Contagem for: $i\n";
}

// Loop FOREACH (Esse é o equivalente ao "for item in lista" do Python)
// Python: for fruta in frutas:
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta\n";
}

// Foreach com Dicionários (Chave e Valor)
// Python: for chave, valor in usuario.items():
foreach ($usuario as $chave => $valor) {
    echo "$chave: $valor\n";
}


// ---------------------------------------------------------------------
// 6. FUNÇÕES
// ---------------------------------------------------------------------
/*
Python:
def saudar(nome_usuario):
    return f"Olá, {nome_usuario}!"
*/
function saudar($nome_usuario) {
    return "Olá, " . $nome_usuario . "!\n";
}

echo saudar("Lucas");


// ---------------------------------------------------------------------
// 7. TRUQUE EXTRA: Ver o conteúdo de uma variável (O "type()" ou "print" de objetos)
// ---------------------------------------------------------------------
// No Python você usa print(tipo_da_variavel) ou direto no terminal.
// No PHP, para debugar estruturas complexas como arrays, usamos var_dump() ou print_r().
echo "\n--- Debug de Array ---\n";
print_r($usuario); 
// O var_dump mostra o tipo e o tamanho de tudo dentro da variável.
// var_dump($usuario); 

?>