
import javax.xml.ws.Endpoint;

public class PublicadorJogo {
    public static void main(String args[]){
        Endpoint.publish(
            "http://10.25.2.30:9876/soap", 
            new ServicoJogo()
        );
        System.out.println("Serviço do jogo em execucao...");
    }
}