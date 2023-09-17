import javax.swing.JOptionPane;

public class App {
    public static void main(String[] args) throws Exception {
        String mensagemOriginal = JOptionPane.showInputDialog("Digite uma mensagem para criptografar:");

        String mensagemCriptografada = criptografarMensagem(mensagemOriginal);

        JOptionPane.showMessageDialog(null, "Mensagem criptografada: " + mensagemCriptografada);
    }

    public static String criptografarMensagem(String mensagem) {
        char[] caracteres = mensagem.toCharArray();
        StringBuilder mensagemCriptografada = new StringBuilder();

        for (char caractere : caracteres) {
            int valorASCII = (int) caractere;
            valorASCII += 10; // Soma 10 unidades ao valor ASCII

            char caractereCriptografado = (char) valorASCII;
            mensagemCriptografada.append(caractereCriptografado);
        }

        return mensagemCriptografada.toString();
    }
}