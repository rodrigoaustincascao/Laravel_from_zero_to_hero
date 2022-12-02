<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Branches do repositório
- MAIN => Conteúdo do módulo de DOCKER.
- LARAVEL => Conteúdo do esqueleto do projeto e modelo de dados.


## Tecnologias e ferramentas utilizadas
- docker
- docker compose
- devcontainer
- PHP 8.1
- Laravel 9
- Nginx
- Postgress

## Execução da branch MAIN

Clonar o projeto
```
git clone https://github.com/rodrigoaustincascao/Laravel_from_zero_to_hero.git
```

Realizar o build da imagem docker
```
docker build -t racascao/laravel:1.1 .
```

Abrir o projeto via devcontainer no vscode.

```
php artisan serve --port=8080
```

## Execução da branch LARAVEL

Clonar o projeto
```
git clone https://github.com/rodrigoaustincascao/Laravel_from_zero_to_hero.git
```

Abrir o projeto via devcontainer no vscode.
