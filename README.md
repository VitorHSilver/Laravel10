## Requisitos

\*PHP 8.2 ou superior

-   Composer Instalado

## Como rodar o projeto baixado

Instalar as dependências

```
composer install
```

Duplicar o arquivo ".env.example" e renomear para ".env"
Gerar a chave
```
php artisan key:generate
```

Executar as migration
````
php artisan migrate
`````

Iniciar o projeto criado com laravel

```
php artisan serve
```

Acessar o conteúdo padrão do laravel

```
http://127.0.0.1:8000
```

## Sequencia para criar o projeto

Criar o projeto com laravel

```
composer create-project laravel/laravel (nomedoProjeto)
```

Acessar o diretório onde está o projeto

```
cd meu-projeto
```

Iniciar o projeto criado com laravel

```
php artisan serve
```

Acessar o conteúdo padrão do laravel

```
http://127.0.0.1:8000
```

## Passo a passo das rotas de pagina

web.php

```
Route::get('/nomedapagina' ,[nomedaControler::class , 'metododaController EX.: "index"'])->name(nome da rota EX.:conta.index)
```

php artisan make:controller ContaController

```
Dentro da Controller crio uma function
```

public function index(){ //retornará uma view(pagina) return view('contas.index');}

```
crio uma pasta view index
```

php artisan make:view contas/index

```
Crio um html com as informações que preciso
```

Para criar links devo colocar no elemento a

```
<a href="{{route('nomedaPaginadaView')}}">Listar as contas</a></li>
```

Depois duplico as rotas

```
Alterando AQUI('/AQUI-conta', [ContaController::class, 'AQUI'])->name('conta.AQUI')
```

index | create | store | show | edit | update | destroy

```
Criar as function no Controller referente aos de cima
```

Criar as views em resources/views/contas

```
Criar uma migration
```
php artisan make:migration create_contas_table
````
Executar as migration
````
php artisan migrate