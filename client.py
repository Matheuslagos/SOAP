from zeep import Client

# Crie uma instância do cliente SOAP usando o WSDL
client = Client('http://localhost/calculator.wsdl')

# Chame o método remoto
result = client.service.addNumbers(3, 5)

# Exiba o resultado
print(f"A soma é: {result}")
