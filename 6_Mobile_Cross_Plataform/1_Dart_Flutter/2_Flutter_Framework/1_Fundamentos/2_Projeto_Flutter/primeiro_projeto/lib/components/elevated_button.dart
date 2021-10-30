// ==== CLASSE PARA GERAÇÃO GENÉRICA DE BOTÕES DO TIPO "ELEVATEDBUTTON" ==== //
import 'package:flutter/material.dart';

class ElevatedButtonGenerator extends StatelessWidget {
  final String buttonText;
  late List<TextEditingController> _inputsControllers = [];

  ElevatedButtonGenerator(this.buttonText, this._inputsControllers);

  @override
  Widget build(BuildContext context) {
    return ElevatedButton(
        // ==== Programação do evento de clique no botão de confirmar ==== //
        onPressed: () {
          // Parsing dos valores para serem enviados para a classe TransferItem
          // Se o Parsing falhar, o retorno é null
          final double? transferValue = double.tryParse(_inputsControllers[0].text);
          final int? transferAccount = int.tryParse(_inputsControllers[1].text);

          if (transferValue != null && transferAccount != null) {
            //TransferItem(transferValue, transferAccount);

            // Persistência dos dados da nova transferência
            final List<dynamic> newTransferData = [transferValue, transferAccount];

            // Impressão do status do processo em uma barra inferior que aparece e some
            // Essa barra é o widget "SnackBar"
            ScaffoldMessenger.of(context).showSnackBar(
              SnackBar(
                content: Text("Transferência criada | Valor: R\$ $transferValue - Conta: $transferAccount |"),
              ),
            );

            // Aqui a atual página é retirada do topo da pilha de páginas
            // A variável newTransfer é enviada para a página do topo da pilha - que será se tornará a nova atual
            Navigator.pop(context, newTransferData);
          } else {
            ScaffoldMessenger.of(context).showSnackBar(
              const SnackBar(
                content: Text("Erro! Tente novamente!"),
              ),
            );
          }
        },
        child: Text(buttonText));
  }
}
