# 📦 API - Laravel 10

Bem-vindo à **API tradeupgroup**, um projeto desenvolvido em **Laravel 10** com foco na organização, padronização e boas práticas para a construção de APIs. 
---

## 🚀 Link do Projeto API
link da api [tradeupgroup-api](https://tradeupgroup.simples-envio.com/)

## Sobre o Projeto

A API Tradeupgroup é uma API desenvolvida para atender a diferentes tipos de operações de forma organizada e padronizada. O projeto segue recursos nativos do Laravel para manter o código limpo e de fácil leitura.

## Configuraçoes
segue key para acessar google maps, add ao .ENV
que ira funcionar

GOOGLE_MAPS_API_KEY=AIzaSyAelHWMczMbxGAHdMcJM00sNrP3VKaU4gc

## 📋 Principais Características:
- **Laravel 10:** Framework robusto e moderno para o desenvolvimento backend.
- **Controllers:** Responsáveis por receber as requisições e encaminhá-las para os serviços.
- **Form Requests:** Utilizados para validar as requisições, garantindo que os dados recebidos sejam confiáveis e deixando os controllers mais limpos.
- **Services:** Centralizam a lógica de negócio e interações externas, como requisições a APIs ou cálculos específicos.
- **API Resources:** Utilizados para padronizar e formatar as respostas retornadas para o cliente.

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8.2+**
- **Laravel 10**
- **Composer**
- **Viacep API** (exemplo de integração para serviços externos)
- **Google Maps API** (exemplo de integração para serviços externos)

---

## 🏗️ Arquitetura do Projeto

A estrutura do projeto foi organizada com os seguintes objetivos:
- Manter **Controllers** leves e focados no fluxo das requisições.
- Centralizar a lógica complexa em **Services**.
- Validar os dados de entrada utilizando **Form Requests**.
- Garantir respostas consistentes com **API Resources**.


# API Documentation

## API /api/zip

Endpoint: Consultar CEP
Este endpoint permite consultar informações relacionadas a um CEP.

URL: /api/zip
Método HTTP: POST
Formato de Entrada: JSON
Formato de Saída: JSON
Autenticação: Não é necessária.

POST /api/zip HTTP/1.1
Host: 127.0.0.1:8000
Content-Type: application/json
Accept: application/json

{
    "cep": "23086780"
}


## API /api/distance-value

Endpoint: Calcular Distância entre CEPs
Este endpoint permite calcular a distância entre dois CEPs.

URL: /api/distance-value
Método HTTP: POST
Formato de Entrada: JSON
Formato de Saída: JSON
Autenticação: Não é necessária.

{
	"cep_origin": "09866170",
	"cep_destination": "08664147"
}