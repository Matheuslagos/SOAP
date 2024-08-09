from zeep import Client

# URL do WSDL do serviço SOAP
wsdl_url = 'http://localhost:8000/soap?wsdl'

# Cria o cliente SOAP
client = Client(wsdl=wsdl_url)

# Função para chamar o método 'escolherNumero'
def escolher_numero(numero, nome):
    try:
        response = client.service.escolherNumero(numero, nome)
        print(f"Resposta: {response}")
    except Exception as e:
        print(f"Erro ao chamar 'escolherNumero': {e}")

# Função para chamar o método 'verificarPosicoes'
def verificar_posicoes():
    try:
        response = client.service.verificarPosicoes()
        print(f"Status das posições:\n{response}")
    except Exception as e:
        print(f"Erro ao chamar 'verificarPosicoes': {e}")

# Exemplo de uso
try:
    numero = int(input("Coloque seu número: "))
    nome = input("Digite seu nome: ")
    
    escolher_numero(numero, nome)
    verificar_posicoes()
except ValueError:
    print("Número inválido. Por favor, insira um número inteiro.")
