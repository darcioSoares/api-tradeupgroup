# 📦 API Feira - Laravel 10

Bem-vindo à **API tradeupgroup**, um projeto desenvolvido em **Laravel 10** com foco na organização, padronização e boas práticas para a construção de APIs. 
---

## 🚀 Link do Projeto API
link da api [shields.io](https://shields.io/)

## Sobre o Projeto

A API Tradeupgroup é uma API desenvolvida para atender a diferentes tipos de operações de forma organizada e padronizada. O projeto segue recursos nativos do Laravel para manter o código limpo e de fácil leitura.

### 📋 Principais Características:
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

### 📂 Estrutura do Projeto
```plaintext
app/
├── Http/
│   ├── Controllers/            # Controladores responsáveis pelas requisições
│   │   ├── Api/
│   │   │   ├── DistanceController.php
│   │   │   └── ...
│   ├── Requests/               # Validação com Form Requests
│   │   └── CalculateDistanceRequest.php
│   ├── Resources/              # API Resources para formatação de respostas
│       └── DistanceCostResource.php
├── Services/                   # Lógica de negócio centralizada
│   └── GoogleMapsService.php
└── ...
