

### 1. Configurar o Ambiente

1. **Certifique-se de que o PHP está instalado e configurado no seu ambiente.** Você pode verificar isso executando `php -v` no terminal. 
2. **Configure o seu servidor web.** Você pode usar o servidor embutido do PHP para testar localmente. Navegue até o diretório onde estão seus arquivos PHP e execute o seguinte comando:

    ```bash
    php -S localhost:8000
    ```

    Isso inicia um servidor PHP local na porta 8000.

### 2. Criar e Testar o Servidor

1. **Crie os arquivos necessários** (`server.php`, `Calculator.php`, e `server.wsdl`) no mesmo diretório do seu servidor PHP.

2. **Verifique se o servidor SOAP está funcionando.** Acesse o URL do WSDL no seu navegador para garantir que o WSDL está sendo gerado corretamente. No seu caso, abra o navegador e vá para:

    ```
    http://localhost:8000/server.wsdl
    ```

    Você deve ver o conteúdo do WSDL se tudo estiver configurado corretamente.

3. **Certifique-se de que o servidor SOAP está rodando.** Execute o script `server.php` diretamente no terminal para garantir que o servidor está ativo:

    ```bash
    php server.php
    ```

    Como o servidor está configurado para processar requisições SOAP, não há uma saída visível diretamente do script, mas ele deve estar pronto para processar requisições SOAP na URL configurada.

### 3. Testar o Servidor com um Cliente SOAP

Para testar o servidor, você pode usar o cliente Python que criamos anteriormente. Certifique-se de que o cliente Python tem acesso ao servidor. Atualize o URL do WSDL no cliente Python para refletir a URL do servidor local:

```python
from zeep import Client

# Endereço do WSDL
wsdl = 'http://localhost:8000/server.wsdl'

# Cria o cliente
client = Client(wsdl=wsdl)

# Chama o método 'add' do servidor SOAP
result = client.service.add(5, 3)

print(f'Resultado da soma: {result}')
```

Execute o cliente Python no terminal:

```bash
python seu_cliente.py
```

Se o servidor SOAP estiver configurado corretamente e o cliente estiver correto, você deverá ver o resultado da soma.

### 4. Depuração

Se você encontrar problemas, considere as seguintes etapas de depuração:

1. **Verifique os logs do servidor PHP.** Erros de execução geralmente aparecem nos logs do servidor web ou PHP.
2. **Verifique a sintaxe do WSDL.** Certifique-se de que o arquivo WSDL está bem formado e é acessível.
3. **Verifique se o PHP e o servidor web estão funcionando corretamente.** Tente acessar outros scripts PHP para garantir que não há problemas com a configuração geral do PHP ou do servidor web.

Seguindo esses passos, você deve conseguir configurar, rodar e testar o seu servidor SOAP localmente.
