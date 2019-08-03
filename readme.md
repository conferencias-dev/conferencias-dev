[![Netlify Status](https://api.netlify.com/api/v1/badges/b3e088f0-93b6-4ddb-ab2f-f44ac0f84895/deploy-status)](https://app.netlify.com/sites/awesome-hopper-d47e34/deploys)

# Conferências.Dev
Agregador das maiores conferências de desenvolvimento do Brasil.

O [https://conferencias.dev](https://conferencias.dev) é uma iniciativa criada para a comunidade com o propósito de trazer em um único ambiente todas as conferências de desenvolvimento, tecnologia e afins que estarão rolando Brasil a fora!

## Vindo da comunidade para a comunidade 
O projeto foi criado para ser totalmente colaborativo, feito da comunidade para a comunidade. Caso alguém queira adicionar alguma conferência ou evento basta fazer aquela PR seguindo o modelo abaixo e pronto! Além de deixar o seu github verdinho, vai facilitar a vida de todos nós **devs** que nunca sabemos qual e quando será a próxima conferência a ocorrer!

## Modelo de PR para conferências

Nome do arquivo: `yyyy-mm-dd-titulo-da-sua-conferencia-yyyy.md`

Data: Caso o evento ocorra em mais de uma data, insira apenas a data final.

Template:

```markdown
---
layout: post                                                # Layout do post, deixar por padrão post.
title: 'Título da sua conferência 2019'                     # Título da conferência.
date: 2019-01-01                                            # Data da conferência no formado yyyy-mm-dd sem aspas.
description: 'Aquela mega descrição da sua conferência!'    # Descrição da conferência.
main-class: 'dev'                                           # Badge do post, deixar por padrão 'dev'.
color: '#6ec8b1'                                            # Cor principal do post, deixar por padrão '#6ec8b1'.
tags:                                                       # Lista de tags associadas a sua conferência. Ex: Linguagem (js) e estado (sp). Caso seja mais de uma linguagem use apenas geral.
- js
- sp
categories:                                                 # Deixar em branco.
twitter_text: 'Aquela mega descrição da sua conferência!'   # Texto do tweet. Pode ser igual a descrição.
introduction: 'Aquela mega descrição da sua conferência!'   # Texto que vai aparecer embaixo do título no post.
---

Aqui você pode cadastrar todas as informações úteis que encontrar sobre a conf! <!-- Descrição da sua conferência. -->

Link oficial da conferência: [https://sua.conferencia.com.br](https://sua.conferencia.com.br) <!-- Link oficial da conferência. -->
 ```
 
 O arquivo deve ser adicionado à pasta `_posts`
