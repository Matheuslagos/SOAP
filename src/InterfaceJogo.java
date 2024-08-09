import javax.jws.WebMethod;
import javax.jws.WebService;
import javax.jws.soap.SOAPBinding;

@WebService
@SOAPBinding(style = SOAPBinding.Style.RPC)
public interface InterfaceJogo {
    @WebMethod String escolherNumero(int numero, String nome);
    @WebMethod String verificarPosicoes();

}