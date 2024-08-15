from zeep import Client

# Endereço do WSDL
wsdl = 'http://localhost/server.wsdl'

# Cria o cliente
client = Client(wsdl=wsdl)

# Chama o método 'add' do servidor SOAP
result = client.service.add(5, 3)

print(f'Resultado da soma: {result}')
