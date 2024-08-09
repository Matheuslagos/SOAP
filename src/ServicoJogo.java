import javax.jws.WebService;
import java.util.HashMap;
import java.util.Map;

@WebService(endpointInterface = "soap.InterfaceJogo")
public class ServicoJogo implements InterfaceJogo{

    private Map<Integer, String> posicoes = new HashMap<>();

    public String escolherNumero(int numero, String nome){
        if(numero < 1 || numero > 5){
            return "Número inválido. Escolha um número entre 1 e 5.";
        }

        if(posicoes.containsKey(numero)){
            String usuarioAnterior = posicoes.get(numero);
            posicoes.put(numero, nome);
            return "Você matou " + usuarioAnterior;
        } else {
            posicoes.put(numero, nome);
            return "Número " + numero + " escolhido com sucesso por " + nome;
        }
    }

    public String verificarPosicoes(){
        StringBuilder status = new StringBuilder();
        for(int i = 1; i <= 5; i++){
            if(posicoes.containsKey(i)){
                status.append("Posição ").append(i).append(": ").append(posicoes.get(i)).append("\n");
            } else {
                status.append("Posição ").append(i).append(": Vazia\n");
            }
        }
        return status.toString();
    }
}