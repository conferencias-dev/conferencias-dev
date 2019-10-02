[![Netlify Status](https://api.netlify.com/api/v1/badges/b3e088f0-93b6-4ddb-ab2f-f44ac0f84895/deploy-status)](https://app.netlify.com/sites/conferencias-dev/deploys)

# Conferências.Dev
Agregador das maiores conferências de desenvolvimento do Brasil.

O [https://conferencias.dev](https://conferencias.dev) é uma iniciativa criada para a comunidade com o propósito de trazer em um único ambiente todas as conferências de desenvolvimento, tecnologia e afins que estarão rolando Brasil a fora!

## Vindo da comunidade para a comunidade 
O projeto foi criado para ser totalmente colaborativo, feito da comunidade para a comunidade. Caso alguém queira adicionar alguma conferência ou evento basta fazer aquela PR seguindo o modelo abaixo e pronto!

Além de deixar o seu GitHub verdinho, vai facilitar a vida de todos nós **devs** que nunca sabemos qual e quando será a próxima conferência a ocorrer!

**OBS:** Em geral não consideramos meetups mensais (a não ser algum meetup específico e não recorrente) como uma conferência ou evento elegível para ser listado no **conferencias.dev**. Acreditamos que para meetup já existem outras soluções maiores e já validadas como o meetup.com

## Modelo de PR para conferências

Nome do arquivo: `yyyy-mm-dd-titulo-da-sua-conferencia-yyyy.md`

Template:

```markdown
---
layout: post                                                # Layout do post, deixar por padrão post.
title: 'Título da sua conferência 2019'                     # Título da conferência.
date_from: 2019-01-01                                       # Data de início da conferência no formado yyyy-mm-dd sem aspas.
date_to: 2019-01-01                                         # Data de encerramento da conferência no formado yyyy-mm-dd sem aspas.
description: 'Aquela mega descrição da sua conferência!'    # Descrição da conferência.
link: 'https://sua.conferencia.com.br'                      # Link oficial da conferência.
tags:                                                       # Lista de tags associadas a sua conferência. Ex: Linguagem (js) e estado (sp). Caso seja mais de uma linguagem use apenas geral.
- js
- sp
---

Aqui você pode cadastrar todas as informações úteis que encontrar sobre a conf! <!-- Descrição da sua conferência. -->

 ```
 
 O arquivo deve ser adicionado à pasta `_posts`
